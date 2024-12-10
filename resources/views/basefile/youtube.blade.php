@extends('basefile.baseindex') @section('title', 'Telecast') @section('content')
<div class="container-fluid contact-header shadow">
    <div class="breadcum-badge p-3 pt-5 pb-5 text-center">
        <h3>Telecast</h3>
    </div>
</div>
<!-- End Breadcum -->

<div class="content-body p-5">
    <!-- video section -->

    <div class="accordion" id="accordionExample">
        @foreach($groupedData as $year => $months)
        <!-- Year heading -->
        <h2 class="mt-4 mb-2">{{ $year }}</h2>

        @foreach($months as $month => $data)
        <div class="accordion-item">
            <!-- Month as accordion button -->
            <h2 class="accordion-header" id="heading{{ $year }}{{ $month }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $year }}{{ $month }}" aria-expanded="false" aria-controls="collapse{{ $year }}{{ $month }}">
                    {{ date('F', mktime(0, 0, 0, $month, 10)) }}
                    <!-- Displays the month name (e.g., January) -->
                </button>
            </h2>
            <!-- Accordion body: Display data for that month -->
            <div id="collapse{{ $year }}{{ $month }}" class="accordion-collapse collapse @if($loop->parent->first && $loop->first) show @endif" aria-labelledby="heading{{ $year }}{{ $month }}">
                <div class="accordion-body">
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
                        @foreach($data as $item)
                        <swiper-slide>
                            <div class="card video-card m-2">
                                <div class="card-video-wrapper">
                                    <iframe
                                        src="https://www.youtube.com/embed/{{ $item->youtube_id }}"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        referrerpolicy="strict-origin-when-cross-origin"
                                        allowfullscreen
                                    ></iframe>
                                </div>
                                <div class="card-body youtubepage">
                                    <h5 class="card-title">{{ $item->title }}</h5>
                                    <p class="card-text"><b>Description &nbsp : </b>{{ $item->subtitle }}</p>
                                    <p class="card-text"><b>Sponser &nbsp : </b>{{ $item->sponsor }}</p>
                                    <p class="card-text"><b>Intension &nbsp : </b>{{ $item->intention }}</p>
                                    <p class="card-text"><b>provider &nbsp : </b>{{ $item->provider }}</p>
                                    <p class="youtubeicon mt-1 mb-1">
                                        <a href="https://www.youtube.com/embed/{{ $item->youtube_id }}" target="_blank"><img src="{{ asset('inpageimages/catholichub_live_infant_jesusshrine_yamjal.png') }}" alt="" srcset="" /></a>
                                        <a href="https://www.youtube.com/embed/{{ $item->youtube_id }}" target="_blank"><img src="{{ asset('inpageimages/divyavani_live_infant_jesusshrine_yamjal.png') }}" alt="" srcset="" /></a>
                                    </p>

                                    <a href="#" class="btn btn-primary btn-view-more">View More</a>
                                </div>
                            </div>
                        </swiper-slide>
                        @endforeach
                      </swiper-container>
                     </div>
                </div>
            </div>
        </div>
        @endforeach @endforeach
    </div>
</div>

<!-- video section -->

@endsection
