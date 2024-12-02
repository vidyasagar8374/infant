@extends('dashboard.basedashboard')

@section('title', 'Update Prist')

@section('content')

    <!-- Main Content -->
    <div class="content">
        <!-- content -->
 <div class="container mt-5">
     <div class="col-lg-10 col-md-10 col-xs-12 offset-lg-1">
     <div class="card">
         <div class="card-header d-flex justify-content-between align-items-center"><h2>Update Prist</h2> 
         <a href="{{ route('admin.parishpristlist') }}" class="btn btn-primary">
               Prist List
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

                    <!-- Form to add YouTube post -->
                    <form action="{{  route('admin.updateprist') }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="Name" name="name" value="{{ old('name', $pristdetails->name) }}" placeholder="Name">
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ $pristdetails->id }}" >
                                <label for="Name">Name</label>
                            </div>
                             </div>
                             <div class="col-lg-6 col-md-6 col-xs-12">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="subtitle" name="start_year" value="{{ old('start_year', $pristdetails->start_year) }}" placeholder="start year">
                                <label for="start_year">Start Year</label>
                            </div>
                         </div>
                         <div class="col-lg-6 col-md-6 col-xs-12">
                         <div class="form-floating mb-3">
                            <input type="date" class="form-control" id="end_year" name="end_year" value="{{ old('end_year', $pristdetails->end_year) }}" placeholder="end_year">
                            <label for="end_year">End Year</label>
                        </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-xs-12">
                        <div class="form-floating mb-3">
                            <input type="file" class="form-control" id="Profile" name="file" value="{{ old('file'),$pristdetails->file }}" placeholder="file">
                            <label for="Profile">Profile</label>
                        </div>
                        </div>
                     
                    <div class="col-lg-6 col-md-6 col-xs-12">
                              <!-- Provider Select -->
                              <div class="form-floating mb-3">
                                <select class="form-select" id="provider" name="is_present">
                                    <option value="" >Select</option>
                                    <option value="1" {{ old('is_present', $pristdetails->is_present) == 1 ? 'selected' : '' }}>Pope</option>
                                    <option value="2" {{ old('is_present', $pristdetails->is_present) == 2 ? 'selected' : '' }}>Bishop</option>
                                    <option value="3" {{ old('is_present', $pristdetails->is_present) == 3 ? 'selected' : '' }}>Parish Prist</option>
                                    <option value="4" {{ old('is_present', $pristdetails->is_present) == 4 ? 'selected' : '' }}>Ass. Prist</option>
                                   
                                </select>
                                <label for="pristtype">pristtype</label>
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