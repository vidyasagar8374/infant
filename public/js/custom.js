

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




    

  
  
  
  
  
  
  
  