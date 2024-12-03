<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "{{ env('RAZORPAY_KEY') }}", // Your Razorpay Key
        "amount": "{{ $amount * 100 }}", // Amount in paise
        "currency": "INR",
        "name": "Your App Name",
        "description": "Payment for Order {{ $reference_id }}",
        "order_id": "{{ $order_id }}", // Razorpay Order ID
        "handler": function (response) {
           console.log(response);
           debugger;
            // AJAX request to call the payments.callback route
            fetch("{{ route('payments.callback') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    razorpay_signature: response.razorpay_signature,
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                },
                body: JSON.stringify({
                    razorpay_payment_id: response.razorpay_payment_id,
                    razorpay_order_id: response.razorpay_order_id,
                    razorpay_signature: response.razorpay_signature
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert("Payment successful!");
                    window.location.href = "/success-page"; // Redirect on success
                } else {
                    alert("Payment verification failed!");
                }
            })
            .catch(error => console.error("Error:", error));
        },
        "prefill": {
            "name": "{{ auth()->user()->name ?? '' }}",
            "email": "{{ auth()->user()->email ?? '' }}",
        },
        "theme": {
            "color": "#3399cc"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
</script>
