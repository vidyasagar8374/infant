@extends('dashboard.basedashboard')

@section('title', 'Bannerlist')

@section('content')

<div class="content">
       <!-- content -->
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-xs-12">
    <div class="card">
          
            <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Banners</h2>
            
            <a href="{{ route('admin.createbanners') }}" class="btn btn-primary">
                Add New Banner
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
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Description</th>
                <th scope="col">File</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
                <tbody>
                @if(count($bannerlist))
                    @php
                        $currentPage = $bannerlist->currentPage(); // Get current page number
                        $perPage = $bannerlist->perPage(); // Get number of items per page
                    @endphp
                    @foreach ($bannerlist as $key=> $list)
                        <tr>
                        <th scope="row">{{ ($key + 1) + ($perPage * ($currentPage - 1)) }}</th>
                            <td>{{ $list->title }}</td>
                            <td>{{ $list->subtitle }}</td>
                            <td>{{ $list->description }}</td>
                            <td>
                                <a href="{{ asset($list->file_path) }}" target="_blank">
                                    <img src="{{ asset($list->file_path) }}" alt="Image preview" style="width: 50px; height: auto;">
                                </a>
                            </td>

                            <td>
                                <!-- View Link -->
                                <a href="" class="btn btn-info btn-sm" title="View">
                                    <i class="bi bi-eye"></i>
                                </a>
                                
                                <!-- Update Link -->
                                <a href="{{ route('admin.banners.view', ['id' => $list->id]) }}" class="btn btn-warning btn-sm" title="Edit">
                                    <i class="bi bi-pencil"></i>
                                </a>

                                
                                <!-- Delete Link -->
                                <form action="{{ route('admin.banners.delete', $list->id) }}" method="POST" style="display:inline;">
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
            {{ $bannerlist->links('pagination::bootstrap-5') }}
        <!-- end card body -->
    </div>
        
    </div>  <!--  //end card -->
    </div>
    </div>
        <!-- content -->
        </div>

@endsection