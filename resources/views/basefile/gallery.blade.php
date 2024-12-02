
@extends('basefile.baseindex')

@section('title', 'Contact')

@section('content')

    <!-- Breadcum -->
  <div class="container-fluid contact-header shadow">
          <div class="breadcum-badge p-3 pt-5 pb-5 text-center">
            <h3>Gallery for Infant Jesus</h3>
          </div>
      </div>
  <!-- End Breadcum -->
        <!-- Gallery -->
        <div class="container gallery-container">

  
  <div class="row pt-3 pb-3">
    <!-- First Image -->
    <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-duration="3000">
      <img src="images\features\infant-jesus-shrine-emjala.jpg" class="img-fluid gallery-img" alt="Prayer Session 1" data-bs-toggle="modal" data-bs-target="#galleryModal1">
    </div>
    
    <!-- Second Image -->
    <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-duration="3000">
      <img src="images\sliders\altar-infant-jesus-shrine-emjala.jpg" class="img-fluid gallery-img" alt="Prayer Session 2" data-bs-toggle="modal" data-bs-target="#galleryModal2">
    </div>
    
    <!-- Third Image -->
    <div class="col-md-4 mb-4" data-aos="fade-left" data-aos-duration="3000">
      <img src="images\features\old_feed.jpg" class="img-fluid gallery-img" alt="Church Activity 1" data-bs-toggle="modal" data-bs-target="#galleryModal3">
    </div>
  </div>

  <!-- Add more rows as needed -->
</div>

<!-- Modal for First Image -->
<div class="modal fade" id="galleryModal1" tabindex="-1" aria-labelledby="galleryModalLabel1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="https://example.com/prayer1.webp" class="img-fluid" alt="Prayer Session 1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Second Image -->
<div class="modal fade" id="galleryModal2" tabindex="-1" aria-labelledby="galleryModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="https://example.com/prayer2.webp" class="img-fluid" alt="Prayer Session 2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal for Third Image -->
<div class="modal fade" id="galleryModal3" tabindex="-1" aria-labelledby="galleryModalLabel3" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="https://example.com/activity1.webp" class="img-fluid" alt="Church Activity 1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <!-- Gallery -->

  <!-- Ends gallery -->
</div>
@endsection
