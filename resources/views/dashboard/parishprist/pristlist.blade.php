@extends('dashboard.basedashboard')

@section('title', 'Pristlists')

@section('content')

<div class="content">
       <!-- content -->
<div class="container-fluid parishlists">
    <div class="col-lg-12 col-md-12 col-xs-12">
    <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Posts</h2>
            
            <a href="{{ route('admin.createparishprist') }}" class="btn btn-primary">
                Add Prist
            </a>
        </div>
            <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Success Message -->
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
          <!-- start card body -->
          <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Profile</th>
                <th scope="col">Name</th>
                <th scope="col">Period</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
                <tbody>
                @if(count($pristlists))
                    @php
                        $currentPage = $pristlists->currentPage(); // Get current page number
                        $perPage = $pristlists->perPage(); // Get number of items per page
                    @endphp
                    @foreach ($pristlists as $key=> $list)
                        <tr>
                        <td scope="row">{{ ($key + 1) + ($perPage * ($currentPage - 1)) }}</td>
                        <td>
                            <div class="avatar">
                            <a href="#"><img src="{{ asset($list->profile) }}"  alt="{{ $list->name }}"></a>
                            </div>    
                            </td>
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->start_year }} -  {{ $list->end_year }}</td>
                            <td>
                                <!-- View Link -->
                                <a href="" class="btn btn-info btn-sm" title="View">
                                    <i class="bi bi-eye"></i>
                                </a>
                                
                                <!-- Update Link -->
                                <a href="{{ route('admin.viewprists', ['id' => Crypt::encryptString($list->id)]) }}" class="btn btn-warning btn-sm" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                
                                <!-- Delete Link -->
                                <form action="" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this banner?');">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="6" class="text-center">No Data Available</td> <!-- Set colspan to the number of columns -->
                    </tr>
                @endif

                
               
                </tbody>
            </table>
            </div>
            {{ $pristlists->links('pagination::bootstrap-5') }}
        <!-- end card body -->
    </div>
        
    </div>  <!--  //end card -->
    </div>
    </div>
        <!-- content -->
        </div>

@endsection