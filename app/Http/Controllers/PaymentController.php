<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\PaymentReference;
use Razorpay\Api\Api;


class PaymentController extends Controller
{
    public function initiatePayment(Request $request)
    {
        $request->validate([    
            'amount' => 'required|numeric|min:1',
        ]);

        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        // Generate unique reference ID
        $referenceId = uniqid('pay_');
        $amount = $request->amount;

        // Create Razorpay Order
        $order = $api->order->create([
            'receipt' => $referenceId,
            'amount' => $amount * 100, // Amount in paise
            'currency' => 'INR',
        ]);

        // Store the reference in the database
        $paymentReference = PaymentReference::create([
            'reference_id' => $referenceId,
            'user_id' => auth()->id(), // Assuming user authentication
            'amount' => $amount,
            'status' => 'pending',
            'meta_data' => json_encode(['order_id' => $order->id]),
        ]);

        return view('dashboard.massrequests.pay', [
            'order_id' => $order->id,
            'amount' => $amount,
            'reference_id' => $referenceId,
        ]);
    }
    public function handleCallback(Request $request)
        {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

            $signature = $request->razorpay_signature;
            $payload = $request->getContent();

            try {
                $api->utility->verifyWebhookSignature($payload, $signature, env('RAZORPAY_WEBHOOK_SECRET'));

                $data = json_decode($payload, true);
                $referenceId = $data['payload']['payment']['entity']['receipt'];

                $paymentReference = PaymentReference::where('reference_id', $referenceId)->first();
                if ($paymentReference) {
                    if($paymentReference->status != 'completed'){
                        $paymentReference->update([
                            'status' => 'completed',
                        ]);
                    }
                    return response()->json(['success' => true]);
                }
            } catch (\Exception $e) {
                return response()->json(['error' => $e->getMessage()], 400);
            }
        }
    public function webhookhandler(Request $request)
    {
        $payload = $request->getContent(); // Raw webhook payload
        $razorpaySignature = $request->header('X-Razorpay-Signature'); // Webhook signature header
        $webhookSecret = env('RAZORPAY_WEBHOOK_SECRET'); // Set this in your .env file

        try {
            // Verify the webhook signature
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $api->utility->verifyWebhookSignature($payload, $razorpaySignature, $webhookSecret);

            // Decode the payload to access event details
            $data = json_decode($payload, true);

            // Extract event type and relevant data
            $eventType = $data['event'];
            $paymentEntity = $data['payload']['payment']['entity'];

            // Call the handler based on the event type
            switch ($eventType) {
                case 'payment.captured':
                    $this->updatePaymentStatus($paymentEntity, 'completed');
                    break;

                case 'payment.failed':
                    $this->updatePaymentStatus($paymentEntity, 'failed');
                    break;

                default:
                    \Log::info('Unhandled event type: ' . $eventType);
            }

            // Respond with a 200 OK status
            return response()->json(['status' => 'success'], 200);

        } catch (\Exception $e) {
            \Log::error('Webhook processing failed: ' . $e->getMessage());
            return response()->json(['error' => 'Webhook processing failed'], 400);
        }
    }

    /**
     * Update payment status based on Razorpay webhook data.
     *
     * @param array $paymentEntity
     * @param string $status
     * @return void
     */
    private function updatePaymentStatus($paymentEntity, $status)
    {
        $referenceId = $paymentEntity['order_id']; // Assuming your order_id maps to your reference ID
        $paymentReference = PaymentReference::where('reference_id', $referenceId)->first();

        if ($paymentReference) {
            if($paymentReference->status != 'completed'){
                $paymentReference->update([
                    'status' => 'completed',
                ]);
            }
            \Log::info("Payment status updated to {$status} for reference ID {$referenceId}.");
        } else {
            \Log::warning("Payment reference not found for order ID: {$referenceId}.");
        }
    }
        

    

}

