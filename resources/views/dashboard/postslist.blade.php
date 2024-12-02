@extends('dashboard.basedashboard')

@section('title', 'Postlists')

@section('content')

<div class="content">
       <!-- content -->
<div class="container-fluid">
    <div class="col-lg-11 col-md-10 col-xs-12 offset-lg-1">
    <div class="card">
        <div class="card-header"><h2>Posts</h2></div>
            <div class="card-body">
          <!-- start card body -->
          <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Subtitle</th>
                <th scope="col">Description</th>
                <th scope="col">File</th>
                <th scope="col">Active</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
                <tbody>
                    @foreach ($postslists as $post)
                <tr>
                <th scope="row">{{$post->id }}</th>
                <td>{{$post->title }}</td>
                <td>{{$post->subtitle }}</td>
                <td>{{$post->description }}</td>
                <td>{{$post->file_path }}</td>
                <td>{{$post->is_active }}</td>
                <td></td>
                </tr>
                
                @endforeach
                </tbody>
            </table>
        </div>
            {{ $postslists->links() }}
        <!-- end card body -->
    </div>
        
    </div>  <!--  //end card -->
    </div>
    </div>
        <!-- content -->
        </div>

@endsection