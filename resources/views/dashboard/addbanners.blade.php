@extends('dashboard.basedashboard')

@section('title', 'dashboard')

@section('content')
<!-- Main Content -->
    <div class="content">
       <!-- content -->
<div class="container mt-5">
    <div class="col-lg-6 col-md-6 col-xs-12 offset-lg-2">
    <div class="card offset-lg-1">
    <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Create Banner</h2>
            
            <a href="{{ route('admin.getbanners') }}" class="btn btn-primary">
                List
            </a>
        </div>
            <div class="card-body">
                        <!-- Display Validation Errors -->
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

                    <!-- Form to create banner with floating labels -->
                    <form action="{{ route('admin.savebanner') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" placeholder="Title">
                            <label for="title">Title</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle') }}" placeholder="Subtitle">
                            <label for="subtitle">Subtitle</label>
                        </div>

                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="description" name="description" placeholder="Description">{{ old('description') }}</textarea>
                            <label for="description">Description</label>
                        </div>

                        <div class="mb-3">
                            <label for="file" class="form-label">Banner Image</label>
                            <input type="file" class="form-control" id="file" name="file">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
       
  </div>  <!--  //end card -->
</div>
</div>
       <!-- content -->
    </div>



@endsection