

window.onscroll = function() {
    var navbar = document.getElementById("navbar");
    var navLinks = document.querySelectorAll(".navbar-nav .nav-item a");
    
    if (window.scrollY > 50) {  // When scrolled down more than 50px
        navbar.classList.add("bg-scrolled");
        navbar.classList.remove("bg-transparent");
  
        // Change the color of each nav link to black
        navLinks.forEach(function(link) {
            link.style.color = "black";
        });
    } else {  // When scrolled back to the top
        navbar.classList.remove("bg-scrolled");
        navbar.classList.add("bg-transparent");
  
        // Change the color of each nav link back to white
        navLinks.forEach(function(link) {
            link.style.color = "white";
        });
    }
  };
  
  const swiperEl = document.querySelector('swiper-container');

  const swiperParams = {
    slidesPerView: 1,
    spaceBetween: 10,
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    on: {
      init() {
        console.log('Swiper initialized');
      },
    },
  };
  
  Object.assign(swiperEl, swiperParams);
  swiperEl.initialize();
  
  
  

  
  
  // youtube card


function togglePlay(playButton) {
  const video = playButton.previousElementSibling;
  if (video.paused) {
      video.play();
      playButton.style.display = "none"; // Hide the play button when playing
  } else {
      video.pause();
      playButton.style.display = "block"; // Show the play button when paused
  }
}

   // YouTube video URL
   const youtubeURL = "https://www.youtube.com/embed/O4FUyqMVPbg?si=VxVByGhKOuTNPbv5";

   // Set YouTube video URL on modal show
   document.getElementById('videoModal').addEventListener('show.bs.modal', function () {
       document.getElementById('youtubeVideo').src = youtubeURL;
   });

   // Clear YouTube video URL on modal hide
   document.getElementById('videoModal').addEventListener('hide.bs.modal', function () {
       document.getElementById('youtubeVideo').src = "";
   });


  //  parish swiper

    const swiperContainer = document.querySelector('.mySwiper');

    const swiperParamsParish = {
      
      slidesPerView: 1,
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 10,
        },
      },
    
      on: {
        init() {
          console.log('Swiper initialized parish');
        },
      },
    };
    
    // Assign parameters to the swiper element
    Object.assign(swiperContainer, swiperParamsParish);
    
    // Initialize swiper manually
    swiperContainer.initialize();



  //  parish swiper


    
  
  // youTubeSwiper
    
  const swiperContainerYoutube = document.querySelector('.youTubeSwiper');

  const swiperParamYoutube = {
    
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 10,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 10,
      },
    },
  
    on: {
      init() {
        console.log('Swiper initialized parish');
      },
    },
  };
  
  // Assign parameters to the swiper element
  Object.assign(swiperContainerYoutube, swiperParamYoutube);
  
  // Initialize swiper manually
  swiperContainerYoutube.initialize();
  
  
  
  
  
  
  