@extends('dashboard.basedashboard')

@section('title', 'dashboard')

@section('content')

<style>
       .card-counter {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

    

        .count-numbers {
            font-size: 2rem;
            font-weight: bold;
        
        }

        .count-name {
            font-size: 1rem;
            font-weight: 300;
        }

        .bg-primary-light {
            background-color: rgba(0, 123, 255, 0.7);
        }

        .bg-danger-light {
            background-color: rgba(220, 53, 69, 0.7);
        }

        .bg-success-light {
            background-color: rgba(40, 167, 69, 0.7);
        }

        .bg-info-light {
            background-color: rgba(23, 162, 184, 0.7);
        }
</style>
            <!-- Main Content -->
    <div class="content">
        <h1>Dashboard</h1>

        <!-- Cards -->

<div class="container my-4">
    <div class="row g-4">
        <!-- Flowz Card -->
        <div class="col-md-3">
            <div class="card-counter bg-primary-light d-flex justify-content-between align-items-center">
                <i class="bi bi-calendar2-week" style="font-size: 2.5rem;margin-right: 15px;"></i>
                <div>
                    <span class="count-numbers d-block" style="font-size: 2rem; font-weight: bold;">{{ $posts }}</span>
                    <span class="count-name" style="font-size: 1rem; font-weight: 300;">Posts</span>
                </div>
            </div>
        </div>

        <!-- Instances Card -->
        <div class="col-md-3">
            <div class="card-counter bg-danger-light d-flex justify-content-between align-items-center">
                <i class="bi bi-person-rolodex" style="font-size: 2.5rem; margin-right: 15px;"></i>
                <div>
                    <span class="count-numbers d-block" style="font-size: 2rem; font-weight: bold;">{{ $contactlist }}</span>
                    <span class="count-name" style="font-size: 1rem; font-weight: 300;">Enquiry</span>
                </div>
            </div>
        </div>

        <!-- Data Card -->
        <div class="col-md-3">
            <div class="card-counter bg-success-light d-flex justify-content-between align-items-center">
                <i class="bi bi-people-fill" style="font-size: 2.5rem; margin-right: 15px;"></i>
                <div>
                    <span class="count-numbers d-block" style="font-size: 2rem; font-weight: bold;">{{ $parishlists }}</span>
                    <span class="count-name" style="font-size: 1rem; font-weight: 300;">Parish Prists</span>
                </div>
            </div>
        </div>

        <!-- Users Card -->
        <div class="col-md-3">
            <div class="card-counter bg-info-light d-flex justify-content-between align-items-center">
                <i class="bi bi-people" style="font-size: 2.5rem; margin-right: 15px;"></i>
                <div>
                    <span class="count-numbers d-block" style="font-size: 2rem; font-weight: bold;">{{ $users }}</span>
                    <span class="count-name" style="font-size: 1rem; font-weight: 300;">Users</span>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>



@endsection