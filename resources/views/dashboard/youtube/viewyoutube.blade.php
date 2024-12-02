@extends('dashboard.basedashboard')

@section('title', 'dashboard')

@section('content')

    <!-- Main Content -->
    <div class="content">
        <!-- content -->
 <div class="container mt-5">
     <div class="col-lg-10 col-md-10 col-xs-12 offset-lg-1">
     <div class="card">
         <div class="card-header"><h2>View Youtube</h2> </div>
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

                    <!-- Form to add YouTube post -->
                    <form action="{{ route('admin.updateyoutube') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="title" name="title" value="{{ $youtube->title }}" placeholder="Title">
                                <input type="hidden" class="form-control" id="title" name="id" value="{{ $youtube->id }}" placeholder="">
                                <label for="title">Title</label>
                            </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $youtube->subtitle }}" placeholder="Subtitle">
                                <label for="subtitle">Subtitle</label>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-xs-12">
                         <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="date" name="date" value="{{ $youtube->date }}" placeholder="Date">
                            <label for="date">Date</label>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="sponsor" name="sponsor" value="{{ $youtube->sponsor }}" placeholder="Sponsor">
                            <label for="sponsor">Sponsor</label>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="intention" name="intention" placeholder="Intention">{{ $youtube->intention }}</textarea>
                            <label for="intention">Intention</label>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-floating mb-3">
                            <select class="form-select" id="provider" name="provider">
                                <option value="divyavani" {{ old('provider', $youtube->provider) == 'divyavani' ? 'selected' : '' }}>
                                    Divyavani
                                </option>
                                <option value="catholichub" {{ old('provider', $youtube->provider) == 'catholichub' ? 'selected' : '' }}>
                                    CatholicHub
                                </option>
                            </select>

                                <label for="provider">Provider</label>
                            </div>
                        </div>


                             <!-- YouTube URL Input -->
                             <div class="col-lg-6 col-md-6 col-xs-12">
                             <div class="form-floating mb-3">
                                <input type="url" class="form-control" id="youtube_url" name="youtube_url" value="{{ $youtube->youtube_id }}" placeholder="YouTube URL">
                                <label for="youtube_url">YouTube URL</label>
                            </div>
                         </div>
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
             </div>
        
   </div>  <!--  //end card -->
 </div>
 </div>
        <!-- content -->
     </div>




@endsection