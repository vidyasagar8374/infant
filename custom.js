

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

// swiper
  const swiperEl = document.querySelector('swiper-container');

  // Swiper parameters
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
    on: {
      init() {
        console.log('Swiper initialized');
      },
    },
  };
  
  // Assign parameters to the swiper element
  Object.assign(swiperEl, swiperParams);
  
  // Initialize swiper manually
  swiperEl.initialize();


// AOs intialization
  // AOS.init();




  


  

  
  







