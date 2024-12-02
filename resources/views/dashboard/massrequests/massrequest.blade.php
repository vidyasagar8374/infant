@extends('dashboard.basedashbord')

@section('title', 'Mass Request')

@section('content')
    <div class="container">
        <div class="col-lg-6 col-md-6 col-xs-12 offset-lg-2 offset-md-2 offset-xs-0">
            <div class="card">
                <div class="card-header">
                    <h3>Mass Request</h3>
                </div>
                <div class="card-body">
                <form action="{{ route('payments.initiate') }}" method="POST" id="paymentForm">
                    @csrf
                    <label for="amount">Amount:</label>
                    <input type="number" name="amount" id="amount" required>
                    <button type="submit">Pay</button>
                </form>

                </div>
            </div>
        </div>
    </div>

@endsection