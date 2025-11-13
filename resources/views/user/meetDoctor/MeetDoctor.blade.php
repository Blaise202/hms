<base href="/public">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>A2Z hospital</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owlcarousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header >
        <div class="topbar">
            <div class="container">
              <div class="row">
                <div class="col-sm-8 text-sm">
                  <div class="site-info">
                    <a href="#"><span class="mai-call text-primary"></span> +25 079 005 6064</a>
                    <span class="divider">|</span>
                    <a href="#"><span class="mai-mail text-primary"></span> izerimanab74@gmail.com</a>
                  </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                  <div class="social-mini-button">
                    <a href="https://www.facebook.com"><span class="mai-logo-facebook-f"></span></a>
                    <a href="https://mobile.twitter.com"><span class="mai-logo-twitter"></span></a>
                    <a href="#"><span class="mai-logo-dribbble"></span></a>
                    <a href="#"><span class="mai-logo-instagram"></span></a>
                  </div>
                </div>
              </div> <!-- .row -->
            </div> <!-- .container -->
          </div><!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm col-sm-12">
            <div class="container col-sm-12">
                <div class="col-sm-2 text-right-flex ">
                    <div>
                        <a class="navbar-brand " href="#">
                            <span class="text-primary"> A<sub>-</sub>Z</span>-Hospital
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                        aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="col-sm-10 text-right" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href= "{{ url('AboutUs') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('Workers') }}">Workers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('news') }}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('Contacts') }}">Contact</a>
                        </li>
                        @if(Route::has('login'))

                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" style="background-color:rgb(108, 186, 140); color:white" href="{{ url('myAppointment') }}">My Appointments</a>
                                </li>
                                <x-app-layout>
                                </x-app-layout>
                            @else

                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                                </li>
                            @endauth
                        @endif
                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>


    <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="banner-section">
          <div class="container text-center wow fadeInUp">
            <nav aria-label="Breadcrumb">
                <h2>Welcome to Our Meet a Doctor Session</h2>
            </nav>
          </div> <!-- .container -->
        </div> <!-- .banner-section -->
      </div>


    <div class="bg-light">
       <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Pleasured to help you</h1>
                        <p class="text-grey mb-4">
                            <p>
                                We are delighted to have you join us for this special "Meet a Doctor" session, where we bring you closer to the heart of healthcare. Your well-being is our priority, and we believe in fostering a strong connection between our esteemed healthcare professionals and the community we serve.
                            </p>
                            <p>
                                Today, we have the pleasure of introducing you to one of our dedicated doctors who plays a pivotal role in providing compassionate and personalized care. This session offers a unique opportunity to learn more about their expertise, treatment approaches, and commitment to your health and wellness.
                            </p>
                            <p>
                                Thank you for being a part of our community. Let's embark on a journey of knowledge, collaboration, and a shared commitment to a healthier, happier you.
                            </p>
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="img-place custom-img-1">
                            <img src="../assets/img/bg-doctor.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- .bg-light -->
    </div> <!-- .bg-light -->

    @include('user.meetDoctor.SetHelp')
    {{-- <div class="bg-light">
        <div class="container text-center wow fadeInUp">
            <h1 class="font-weight-normal">News</h1>
        </div> 
        <br><br>
        
    </div> --}}
    <div class="bg-light">
        <div class="container text-center wow fadeInUp">
            <h1 class="font-weight-normal">OR</h1>
        </div> 
    @include('user.appointment')
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Company</h5>
                    <ul class="footer-menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Editorial Team</a></li>
                        <li><a href="#">Protection</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>More</h5>
                    <ul class="footer-menu">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Advertise</a></li>
                        <li><a href="#">Join as Doctors</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Our partner</h5>
                    <ul class="footer-menu">
                        <li><a href="#">One-Fitness</a></li>
                        <li><a href="#">One-Drugs</a></li>
                        <li><a href="#">One-Live</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-lg-3 py-3">
                    <h5>Contact</h5>
                    <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>

                    <h5 class="mt-3">Social Media</h5>
                    <div class="footer-sosmed mt-3">
                        <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                        <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <hr>

            <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All
                right reserved</p>
        </div>
    </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owlcarousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>