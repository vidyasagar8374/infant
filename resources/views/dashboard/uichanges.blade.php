@extends('dashboard.basedashboard')

@section('title', 'dashboard')

@section('content')
            <!-- Main Content -->
    <div class="content">
        <h1>Dashboard</h1>

        <!-- Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white">
                    <div class="card-body">
                       header Sliders
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">hearderSliders</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        Success Card
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        Danger Card
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-white">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection