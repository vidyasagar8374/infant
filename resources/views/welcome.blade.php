
@extends('basefile.baseindex')
@section('title', 'Infant Jesus  Shrine Yamjal')
@section('content')
 <div class="content">
        <!-- Carousel -->
        <div id="churchCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        @foreach($banners as $key => $banner)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            @if(file_exists(public_path($banner->file_path)))
            <img src="{{ asset($banner->file_path) }}" class="d-block w-100" alt="Church Image">
            @else
            <p></p>
            @endif
            <div class="carousel-caption">
                <h1>{{ $banner->title }}</h1>
                <p>{{ $banner->description }}</p>   
            </div>
        </div>
        @endforeach    
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#churchCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#churchCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


        <!-- ==============mass feature =====================-->
	<!-- Service 3 - Bootstrap Brain Component -->
<section class="pt-5 pb-5">
    <div class="container" id="services">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6" data-aos="fade-up">
          <h2 class="mb-4 text-center">Mass and Prayer Timings</h2>
          <p class="text-secondary mb-5 text-center">We are dedicated to delivering exceptional services that drive success and transform your business. With a commitment to excellence, we take pride in offering a comprehensive range of services.</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>
  
    <div class="container overflow-hidden">
      <div class="row gy-5 gx-md-4 gy-lg-0 gx-xxl-5 justify-content-center">
        <div class="col-11 col-sm-6 col-lg-3" data-aos="flip-up" data-aos-duration="300">
          <!-- <div class="badge bg-primary p-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pie-chart" viewBox="0 0 16 16">
              <path d="M7.5 1.018a7 7 0 0 0-4.79 11.566L7.5 7.793V1.018zm1 0V7.5h6.482A7.001 7.001 0 0 0 8.5 1.018zM14.982 8.5H8.207l-4.79 4.79A7 7 0 0 0 14.982 8.5zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z" />
            </svg>
          </div> -->
          <h4 class="mb-3">Daily</h4>
          <p class="mb-3 text-secondary">6 AM- Telugu</p>
          <p class="mb-3 text-secondary">5.30 PM- Rosary</p>
        </div>
        <div class="col-11 col-sm-6 col-lg-3" data-aos="flip-up" data-aos-duration="500">
          <!-- <div class="badge bg-primary p-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-aspect-ratio" viewBox="0 0 16 16">
              <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5v-9zM1.5 3a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-13z" />
              <path d="M2 4.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H3v2.5a.5.5 0 0 1-1 0v-3zm12 7a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1 0-1H13V8.5a.5.5 0 0 1 1 0v3z" />
            </svg>
          </div> -->
          <h4 class="mb-3">Saturday</h4>
          <p class="mb-3 text-secondary">6.00 AM- Telugu</p>
          <p class="mb-3 text-secondary">5.30 PM- Rosary</p>
          <p class="mb-3 text-secondary">4.30 PM Children Mass</p>
          <p class="mb-3 text-secondary">Followed Adoration</p>
        </div>
        <div class="col-11 col-sm-6 col-lg-3" data-aos="flip-up" data-aos-duration="1000">
          <!-- <div class="badge bg-primary p-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-airplane-engines" viewBox="0 0 16 16">
              <path d="M8 0c-.787 0-1.292.592-1.572 1.151A4.347 4.347 0 0 0 6 3v3.691l-2 1V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.191l-1.17.585A1.5 1.5 0 0 0 0 10.618V12a.5.5 0 0 0 .582.493l1.631-.272.313.937a.5.5 0 0 0 .948 0l.405-1.214 2.21-.369.375 2.253-1.318 1.318A.5.5 0 0 0 5.5 16h5a.5.5 0 0 0 .354-.854l-1.318-1.318.375-2.253 2.21.369.405 1.214a.5.5 0 0 0 .948 0l.313-.937 1.63.272A.5.5 0 0 0 16 12v-1.382a1.5 1.5 0 0 0-.83-1.342L14 8.691V7.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v.191l-2-1V3c0-.568-.14-1.271-.428-1.849C9.292.591 8.787 0 8 0ZM7 3c0-.432.11-.979.322-1.401C7.542 1.159 7.787 1 8 1c.213 0 .458.158.678.599C8.889 2.02 9 2.569 9 3v4a.5.5 0 0 0 .276.447l5.448 2.724a.5.5 0 0 1 .276.447v.792l-5.418-.903a.5.5 0 0 0-.575.41l-.5 3a.5.5 0 0 0 .14.437l.646.646H6.707l.647-.646a.5.5 0 0 0 .14-.436l-.5-3a.5.5 0 0 0-.576-.411L1 11.41v-.792a.5.5 0 0 1 .276-.447l5.448-2.724A.5.5 0 0 0 7 7V3Z" />
            </svg>
          </div> -->
          <h4 class="mb-3">Sunday</h4>
          <p class="mb-3 text-secondary">6.00 AM- Telugu</p>
          <p class="mb-3 text-secondary">8.00 AM- Telugu,Healing Services</p>
          <p class="mb-3 text-secondary">10.00 AM- English</p>
          <p class="mb-3 text-secondary">5.30 PM- Rosary</p>
          <p class="mb-3 text-secondary">Followed Adoration</p>
        </div>
        <div class="col-11 col-sm-6 col-lg-3" data-aos="flip-up" data-aos-duration="2000">
          <!-- <div class="badge bg-primary p-3 mb-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-alarm" viewBox="0 0 16 16">
              <path d="M8.5 5.5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5z" />
              <path d="M6.5 0a.5.5 0 0 0 0 1H7v1.07a7.001 7.001 0 0 0-3.273 12.474l-.602.602a.5.5 0 0 0 .707.708l.746-.746A6.97 6.97 0 0 0 8 16a6.97 6.97 0 0 0 3.422-.892l.746.746a.5.5 0 0 0 .707-.708l-.601-.602A7.001 7.001 0 0 0 9 2.07V1h.5a.5.5 0 0 0 0-1h-3zm1.038 3.018a6.093 6.093 0 0 1 .924 0 6 6 0 1 1-.924 0zM0 3.5c0 .753.333 1.429.86 1.887A8.035 8.035 0 0 1 4.387 1.86 2.5 2.5 0 0 0 0 3.5zM13.5 1c-.753 0-1.429.333-1.887.86a8.035 8.035 0 0 1 3.527 3.527A2.5 2.5 0 0 0 13.5 1z" />
            </svg>
          </div> -->
          <h4 class="mb-3">Secound Sunday</h4>
          <p class="mb-3 text-secondary">6.00 AM- Telugu</p>
          <p class="mb-3 text-secondary">8.00 AM- Telugu</p>
          <p class="mb-3 text-secondary">10.00 AM- English</p>
          <p class="mb-3 text-secondary">5.30 PM- Rosary</p>
          <p class="mb-3 text-secondary">Followed Adoration</p>
        </div>
      </div>
    </div>
  </section>

  <!-- alternative -->
  <section class="alternative-section">
          <!-- alternative section -->
  <div class="container my-5">
      <div class="row align-items-center">
          <!-- Left column: Text -->
          <div class="col-md-6 order-md-1 order-1 text-center text-md-start" data-aos="fade-up">
              <h2>Asia's largest Piligrim</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>

              <a href="{{ route('home.about') }}"  target="_blank"><button type="button" class="btn btn-link mt-1 mb-1">Read more..</button></a>
          </div>


          <!-- Right column: Image -->
          <div class="col-md-6 order-md-2  order-2 text-center feature hover-zoom">
              <img src="images\features\01.jpg" class="img-fluid rounded-1" alt="Example image">
          </div>
      </div>
  </div>
    <!-- alternative section -->
    <!-- oldage donations -->
    <div class="container my-5">
      <div class="row align-items-center">
          <!-- Left column: Text -->
          <div class="col-md-6 order-md-2 order-1 text-center text-md-start" data-aos="fade-up">
              <h2>Now live</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
              <a href="{{ route('home.telecast') }}" target="_blank"><button type="button" class="btn btn-link mt-1 mb-1">click here more</button></a>
          </div>

          <!-- Right column: Image -->
          <div class="col-md-6 order-md-1  order-2 text-center feature hover-zoom">
              <img src="images\features\live.jpeg" class="img-fluid  rounded-1" alt="Example image">
          </div>
      </div>
  </div>
    <!-- oldage donations -->

        <!-- oldage donations -->
        <!-- <div class="container my-5">
          <div class="row align-items-center">
             
              <div class="col-md-6  order-md-2  order-2 text-center feature">
                <img src="https://via.placeholder.com/500x300" class="img-fluid" alt="Example image">
            </div>

              <div class="col-md-6  order-md-1 order-1 text-center text-md-start">
                  <h2>This is the heading</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse varius enim in eros elementum tristique.</p>
              </div>
    
             
             
          </div>
      </div> -->
        <!-- oldage donations -->


  </section>
<!-- end alternative -->

  <!-- ========================================== Posts========================================== -->
  @if(count($posts))
<section class="comingup-events container pt-5 pb-5">
  <div class="container pt-3 pb-3 text-center">
    <h2 class="activity-text">Upcoming Events</h2>
  </div>
  <div class="swiper-container-wrapper" style="position: relative;">
    <swiper-container 
    navigation="true" 
    space-between="20" 
    speed="500" 
    loop="true" 
    breakpoints='{
        "320": {"slidesPerView": 1},
        "640": {"slidesPerView": 2},
        "1024": {"slidesPerView": 3}
    }'>
  @foreach($posts as $post)
    <swiper-slide>
        <div class="card card-margin" data-aos="zoom-in" data-aos-duration="2000">
            <div class="card-header no-border">
                <h5 class="card-title">{{ $post->title }}</h5>
            </div>
            <div class="card-body pt-0">
                <div class="widget-49">
                    <div class="widget-49-title-wrapper pt-1">
                        <div class="widget-49-date-primary">
                        <span class="widget-49-date-day">{{ \Carbon\Carbon::parse($post->date)->format('d') }}</span>
                        <span class="widget-49-date-month">{{ \Carbon\Carbon::parse($post->date)->format('M') }}</span>
                        </div>
                        <div class="widget-49-meeting-info">
                            <span class="widget-49-pro-title">{{ $post->subtitle }}</span>
                            <span class="widget-49-meeting-time"></span>
                        </div>
                    </div>
                    <ol class="widget-49-meeting-points">
                      @if(!empty($post->subtitle))
                        <li class="widget-49-meeting-item"><span>{{ $post->subtitle }}</span></li>
                        @endif
                        @if(!empty($post->subtitle))
                        <li class="widget-49-meeting-item"><span>{{ $post->description  }}</span></li>
                        @endif
                       
                    </ol>
                    @if(file_exists(public_path($post->file)))
                      <div class="widget-49-meeting-action">
                          <a href="{{ asset($post->file) }}" class="btn btn-sm btn-flash-border-primary" target="_blank"><i class="bi bi-file-earmark-pdf"></i></a>
                      </div>
                      @else
                          <p></p>
                      @endif
                </div>
            </div>
        </div>
    </swiper-slide>
 @endforeach

</swiper-container>
</div>

</section>
@endif
   <!-- ==========================================End Posts========================================== -->



  <!-- album song -->
  <section class="pt-5 pb-5">
  <div class="container" style="background-image: url('{{ asset('inpageimages/album-song-infant-jesus.jpg') }}'); background-size: cover; background-position: center; height: 400px; display: flex; align-items: center; justify-content: center; position: relative;">
    <!-- Dark Overlay for Better Text Readability -->
    <div class="overlay" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.5);"></div>

    <!-- Content Area with Author Details and Play Icon -->
    <div class="content text-center text-white" style="position: relative; z-index: 1;">
        <!-- Author Information -->
        <h4>Album Song</h4>
        <h5>Written by Fr.David Koppara</h5>
        <p>Brief description about the author goes here.</p>
        
        <!-- Play Button Icon -->
        <button type="button" class="play-button btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal">
        <i class="bi bi-play-fill"></i>
    </button>
    </div>
</div>

    <!-- Video Modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModalLabel">Album Song Video</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                    <iframe width="560" height="315"  id="youtubeVideo"  src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




  <!-- start Teams -->
    <!-- Team 1 - Bootstrap Brain Component -->
<section class="pt-3 pb-3">
  <div class="container bg-light">
    <div class="row justify-content-md-center pt-5 pb-5">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">Diocese Priests</h2>
        <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>


  <div class="container overflow-hidden infantparish pb-5">
    <div class="row gy-4 gy-lg-0 gx-xxl-5">
      @foreach($parishlists as $parishlist)
      <div class="col-12 col-md-6 col-lg-3">
        <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden my-hover-card" data-aos="flip-left" data-aos-duration="2000">
          <div class="card-body p-0">
            <figure class="m-0 p-0">
              <img loading="lazy"  src="{{ asset($parishlist->profile) }}" alt="{{ $parishlist->name }}">
              <figcaption class="m-0 p-4">
                <h4 class="mb-1">{{ $parishlist->name }}</h4>
                <p class="text-secondary mb-0">
                  @if($parishlist->is_present == 1)
                      Pope
                  @elseif($parishlist->is_present == 2)
                      Archbishop of Hyderabad
                  @elseif($parishlist->is_present == 3)
                    Parish Priest
                  @elseif($parishlist->is_present == 4)
                  Ass. Parish
                  @endif
                </p>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  </div>
</section>
  <!-- Ends  Teams -->
  <!-- Activities -->
  <div class="container-fluid">
  <div class="header-text m-2">
    <h3 class="activity-text">Activities</h3>
  </div>
  <div class="swiper-container-wrapper" style="position: relative;">
      <swiper-container 
        navigation="true" 
        space-between="20" 
        speed="500" 
        loop="true" 
        css-mode="true" 
        breakpoints='{
            "320": {"slidesPerView": 1},
            "640": {"slidesPerView": 2},
            "1024": {"slidesPerView": 4}
        }'>

    <swiper-slide>
      <div class="col-lg-12 col-sm-12" data-aos="fade-left" data-aos-duration="3000">
        <div class="card m-2 activities" style="width: 100%;">
          <img src="images\features\old_feed.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Food for the elderly is provided every Thursday</p>
          </div>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="col-lg-12 col-sm-12" data-aos="fade-left" data-aos-duration="3000">
        <div class="card m-2 activities" style="width: 100%;">
          <img src="images\features\catechism.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Catechism for childrens</p>
          </div>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="col-lg-12 col-sm-12" data-aos="fade-left" data-aos-duration="3000">
        <div class="card m-2 activities" style="width: 100%;">
          <img src="images\features\alterserver.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Alter services for childrens.</p>
          </div>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="col-lg-12 col-sm-12" data-aos="fade-left" data-aos-duration="3000">
        <div class="card m-2 activities" style="width: 100%;">
          <img src="images\features\singingpractise-infantjesus.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Singing Practise</p>
          </div>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="col-lg-12 col-sm-12" data-aos="fade-left" data-aos-duration="3000">
        <div class="card m-2 activities my-hover-card" style="width: 100%;">
          <img src="images\features\music-practise-infantjesus.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Music Practise</p>
          </div>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="col-lg-12 col-sm-12" data-aos="fade-left" data-aos-duration="3000">
        <div class="card m-2 activities" style="width: 100%;">
          <img src="images\features\comminion-old-people-infant-jesus-yamjal.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">There will be communion services for elderly people every Friday.</p>
          </div>
        </div>
      </div>
    </swiper-slide>
    <swiper-slide>
      <div class="col-lg-12 col-sm-12" data-aos="fade-left" data-aos-duration="3000">
        <div class="card m-2 activities" style="width: 100%;">
          <img src="images\features\confession-infant-jesus-yamjal.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Confession on every saturday evining</p>
          </div>
        </div>
      </div>
    </swiper-slide>

  </swiper-container>
</div>
  </div>
 <!-- Navigation buttons -->


 <div class="container transport-grid pt-3 pb-3">
      <div class="bg-image">
          <img src="{{ asset('inpageimages/trainsystem-infant-jesus-yamjal.jpg') }}" class="d-none d-lg-block" alt="" srcset="">
      <div class="container transport-system">
      <div class="row">
    <!-- Main Column with two inner columns for Train and Bus -->
    <div class="col-lg-6 col-xl-6 col-md-12">
      <div class="row">
        <!-- Train Column -->
        <div class="col-md-6">
          <div class="card mb-3">
            <div class="card-header">
              Train
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">

                  <strong>12759 | CHARMINAR EXP</strong> 
                  
                </li>
                <li class="list-group-item">
                  <strong>07696 | RMD SC SPECIAL</strong> 
                </li>
                <li class="list-group-item">
                  <strong>17651 | CGL KCG EXPRESS</strong> 
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Bus Column -->
        <div class="col-md-6">
          <div class="card mb-3">
            <div class="card-header">
              Bus
            </div>
            <div class="card-body">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <strong>Secundarabad</strong> 279, 1D   <br> Ibhrahimpatnam
                  <br>
                  <strong>JBS</strong> 279
                  <br>
                  <strong>MGBS</strong> 277,459,419  <br> Ibhrahimpatnam
                </li>
                <li class="list-group-item">
                  <strong>LB Nagar</strong> 277D,1D,279
                  <br>
                  
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</div>






  <!-- Ends Activities -->




 @endsection