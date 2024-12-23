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
        \Log::info(' Before Payment Order created ' . $order->id);

        // Store the reference in the database
        $paymentReference = PaymentReference::create([
            'reference_id' => $referenceId,
            'user_id' => auth()->id(), // Assuming user authentication
            'amount' => $amount,
            'status' => 'pending',
            'meta_data' => json_encode(['order_id' => $order->id]),
        ]);
        if($paymentReference){
            \Log::info('Reference Id created ' . $referenceId);
        }else{
            \Log::info('Reference Id not created ' . $referenceId);
        }


        return view('dashboard.massrequests.pay', [
            'order_id' => $order->id,
            'amount' => $amount,
            'reference_id' => $referenceId,
        ]);
    }
    public function handleCallback(Request $request)
    {
        // Get raw payload and signature
        $payload = $request->getContent();
        $signature = $request->razorpay_signature;
        $webhookSecret = env('RAZORPAY_WEBHOOK_SECRET');
        $razorpayOrderId = $request->input('razorpay_order_id');
        $razorpayPaymentId = $request->input('razorpay_payment_id');
        $customerReferenceId = $request->input('custom_reference_id');
        $generatedString = $razorpayOrderId . '|' . $razorpayPaymentId;
        \Log::info('after payment order id ' . $razorpayOrderId);
        try {
            $data = json_decode($payload, true);
            // Calculate the expected signature
            $expectedSignature = hash_hmac('sha256', $generatedString, $webhookSecret);
            // \Log::info('Generated String: ' . $generatedString);
            // \Log::info('Expected Signature: ' . $expectedSignature);
            // \Log::info('Received Signature: ' . $signature);
    
            // Compare the signatures
            if (!hash_equals($expectedSignature, $signature)) {
                throw new \Exception('Signature verification failed');
            }
            // Decode the payload and process further
            $referenceId = $customerReferenceId;
            $paymentReference = PaymentReference::where('reference_id', $referenceId)->first();
    
            if ($paymentReference) {
                if ($paymentReference->status != 'completed') {
                    $paymentReference->update([
                        'status' => 'completed',
                    ]);
                }
                return response()->json(['success' => true]);
            } else {
                return response()->json(['error' => 'Payment reference not found'], 404);
            }
    
        } catch (\Exception $e) {
            \Log::error('Webhook processing error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
    
    public function webhookhandler(Request $request)
    { 
        $payload = $request->getContent(); // Raw webhook payload
        $razorpaySignature = $request->header('X-Razorpay-Signature'); // Webhook signature header
        $webhookSecret = env('RAZORPAY_WEBHOOK_SECRET');
          \Log::info('webhook generatered payload signature');
          \Log::info('webhook signer' . $razorpaySignature);
          \Log::info($payload);
           
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

