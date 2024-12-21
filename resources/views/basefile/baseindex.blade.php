<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <!-- swiper css -->



 <!-- Font Awesome (for social icons) -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
 <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

 <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg  bg-transparent fixed-top" id="navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="https://w7.pngwing.com/pngs/470/762/png-transparent-infant-jesus-of-prague-child-jesus-statue-religion-figurine-statue-miscellaneous-doll-resin-thumbnail.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
        
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.telecast') }}">Telecast</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.gallery') }}">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home.contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

        @yield('content')



              <!-- Footer -->
              <footer class="text-center text-lg-start bg-body-tertiary text-muted bg-primary">
                <!-- Section: Social media -->
                <section class="d-flex justify-content-between align-items-center p-4 border-bottom">
                          <!-- Left: Text -->
                          <div class="me-5 d-none d-lg-block">
                              <span>Get connected with us on social networks:</span>
                          </div>
                          <!-- Right: Social Media Links -->
                          <div>
                              <a href="#" class="text-dark me-4 text-decoration-none">
                                  <i class="fab fa-facebook fa-2x"></i>
                              </a>
                              <a href="#" class="text-dark me-4 text-decoration-none">
                                  <i class="fab fa-twitter fa-2x"></i>
                              </a>
                              <a href="#" class="text-dark me-4 text-decoration-none">
                                  <i class="fab fa-instagram fa-2x"></i>
                              </a>
                              <a href="#" class="text-dark text-decoration-none">
                                  <i class="fab fa-linkedin fa-2x"></i>
                              </a>
                          </div>
                      </section>


                <!-- Section: Social media -->
              
                <!-- Section: Links  -->
                <section class="">
                  <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3 offset-lg-1">
                      <!-- Grid column -->
                      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                          <i class="fas fa-gem me-3"></i>Infant Jesus Shrine
                        </h6>
                        <p>
                            Kammaguda,Turkayamjal 'X' Road,Ranga Reddy DIST-501510
                        </p>
                      </div>
                      <!-- Grid column -->
              
                      <!-- Grid column -->
                      <div class="col-md-2 col-lg-2 col-xl-3 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                        </h6>
                        <p>
                          <a href="#!" class="text-reset">Home</a>
                        </p>
                        <p>
                          <a href="#!" class="text-reset">Telecast</a>
                        </p>
                        <p>
                          <a href="#!" class="text-reset">About</a>
                        </p>
                        <p>
                          <a href="#!" class="text-reset">Contact</a>
                        </p>
                      </div>
                      <!-- Grid column -->

                          <!-- Grid column -->
                      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Kammaguda,Turkayamjal</p>
                        <p>
                          <i class="fas fa-envelope me-3"></i>
                          info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                      </div>
                      <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                  </div>
                </section>
                <!-- Section: Links  -->
              
                <!-- Copyright -->
                <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                  © 2024 Copyright:
                  <a class="text-reset fw-bold" href="https://mdbootstrap.com/">webdesignssagar.com</a>
                </div>
                <!-- Copyright -->
              </footer>
              <!-- Footer -->
                        <!-- footer  -->
                  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
                  <script src="js/custom.js"></script>
                  <script>
                 AOS.init({
                      once: true, // Ensures animation happens only once
                    });
                  </script>
              </body>
              </html>
              