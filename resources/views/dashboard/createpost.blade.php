@extends('dashboard.basedashboard')

@section('title', 'dashboard')

@section('content')

<div class="content">
       <!-- content -->
<div class="container mt-5">
    <div class="col-lg-6 col-md-6 col-xs-12 offset-lg-2">
    <div class="card offset-lg-1">
    <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Create Post</h2>
            <a href="{{ route('admin.getposts') }}" class="btn btn-primary">
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

    <!-- Form to add post with floating labels -->
    <form action="{{ route('admin.savepost') }}" method="POST" enctype="multipart/form-data">
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

        <div class="form-floating mb-3">
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date') }}" placeholder="Date">
            <label for="date">Date</label>
        </div>

        <!-- File Input -->
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="file" name="file" placeholder="Choose file">
            <label for="file">Upload File</label>
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