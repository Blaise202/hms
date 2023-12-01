<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <meta http-equiv="X-UA-Compatible" content="ie=edge" />

        <meta name="copyright" content="MACode ID, https://macodeid.com/" />

        <title>A2Z Hospital Workers page</title>

        <link rel="stylesheet" href="../assets/css/maicons.css" />

        <link rel="stylesheet" href="../assets/css/bootstrap.css" />

        <link
            rel="stylesheet"
            href="../assets/vendor/owl-carousel/css/owl.carousel.css"
        />

        <link rel="stylesheet" href="../assets/vendor/animate/animate.css" />

        <link rel="stylesheet" href="../assets/css/theme.css" />
    </head>
    <body>
        <!-- Back to top button -->
        <div class="back-to-top"></div>

        <header>
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 text-sm">
                            <div class="site-info">
                                <a href="#"
                                    ><span class="mai-call text-primary"></span
                                    >+25 079 005 6064</a
                                >
                                <span class="divider">|</span>
                                <a href="#"
                                    ><span class="mai-mail text-primary"></span>
                                    izerimanab74@gmail.com</a
                                >
                            </div>
                        </div>
                        <div class="col-sm-4 text-right text-sm">
                            <div class="social-mini-button">
                                <a href="#"
                                    ><span class="mai-logo-facebook-f"></span
                                ></a>
                                <a href="#"
                                    ><span class="mai-logo-twitter"></span
                                ></a>
                                <a href="#"
                                    ><span class="mai-logo-dribbble"></span
                                ></a>
                                <a href="#"
                                    ><span class="mai-logo-instagram"></span
                                ></a>
                            </div>
                        </div>
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .topbar -->

            <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
                <div class="container">
                    <a class="navbar-brand" href="#"
                        ><span class="text-primary">A <sub><b>-</b></sub> Z</span>-Hopsital</a
                    >

                    <form action="#">
                        <div class="input-group input-navbar">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="icon-addon1"
                                    ><span class="mai-search"></span
                                ></span>
                            </div>
                            <input
                                type="text"
                                class="form-control"
                                placeholder="Enter keyword.."
                                aria-label="Username"
                                aria-describedby="icon-addon1"
                            />
                        </div>
                    </form>

                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupport"
                        aria-controls="navbarSupport"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupport">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('AboutUs') }}"
                                    >About Us</a
                                >
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('Doctors') }}"
                                    >Workers</a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('News') }}">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('Contacts') }}"
                                    >Contact</a
                                >
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
                    </div>
                    <!-- .navbar-collapse -->
                </div>
                <!-- .container -->
            </nav>
        </header>

        <div
            class="page-banner overlay-dark bg-image"
            style="background-image: url(../assets/img/bg_image_1.jpg)"
        >
            <div class="banner-section">
                <div class="container text-center wow fadeInUp">
                    <nav aria-label="Breadcrumb">
                        <ol
                            class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2"
                        >
                            <li class="breadcrumb-item">
                                <a href="{{ url('') }}">Home</a>
                            </li>
                            <li
                                class="breadcrumb-item active"
                                aria-current="page"
                            >
                                Workers
                            </li>
                        </ol>
                    </nav>
                    <h1 class="font-weight-normal">Workers</h1>
                    
                </div>
            </div>
            
        </div>

        <div class="page-section bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="text-center mb-5 wow fadeInUp">   Our Doctors   </h1>
                    <div class="col-lg-10">
                        <div class="row">
                            @foreach ($doctor as $doctorData)
                            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                                <div class="card-doctor">
                                    <div class="header">
                                        <img style="height: 100%; width:240px" src="doctorimages/{{ $doctorData->image }}" alt="ttt">

                                        <div class="meta">
                                            <a href="#"
                                                ><span class="mai-call"></span
                                            ></a>
                                            <a href="#"
                                                ><span
                                                    class="mai-logo-whatsapp"
                                                ></span
                                            ></a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        {{ $doctorData->f_name }} {{ $doctorData->l_name }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container -->
        </div>
        <div class="page-section bg-darkwhite">
            <div class="container">
                <div class="row justify-content-center">
                    <h1 class="text-center mb-5 wow fadeInUp">   Our Nurses   </h1>
                    <div class="col-lg-10">
                        <div class="row">
                            @foreach ($nurse as $nurseData)
                            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
                                <div class="card-doctor">
                                    <div class="header">
                                        <img style="height: 100%; width:240px" src="nursesimages/{{ $nurseData->image }}" alt="ttt">

                                        <div class="meta">
                                            <a href="#"
                                                ><span class="mai-call"></span
                                            ></a>
                                            <a href="#"
                                                ><span
                                                    class="mai-logo-whatsapp"
                                                ></span
                                            ></a>
                                        </div>
                                    </div>
                                    <div class="body">
                                        {{ $nurseData->name }}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-section bg-light">
            <div class="container">
                <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
        
                <form class="main-form" action="{{ url('appointment') }}" method="POST">
        
                    @csrf
                    
                    <div class="row mt-5 ">
                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                            <input type="text" name="name" class="form-control" placeholder="Full name">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                            <input type="text" name="email" class="form-control" placeholder="Email address..">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
                            <input type="date" name="date" class="form-control">
                        </div>
                        <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                            <select name="dr_name" id="departement" class="custom-select">
                                <option>--select Doctor--</option>
                                @foreach ($doctor as $doctorData)
                                    <option value="{{ $doctorData->f_name }} ">{{ $doctorData->f_name }} the {{ $doctorData->specialisation }}</option>
                                @endforeach
                                
                            </select>
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <input type="text" name="number" class="form-control" placeholder="Number..">
                        </div>
                        <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
                            <textarea name="message" id="message" class="form-control" rows="6"
                                placeholder="Enter message.."></textarea>
                        </div>
                        
                    </div>
                        <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
                    
                </form>
            </div>
        </div>
        <!-- .page-section -->

       

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
                        <p class="footer-link mt-2">
                            351 Willow Street Franklin, MA 02038
                        </p>
                        <a href="#" class="footer-link">701-573-7582</a>
                        <a href="#" class="footer-link"
                            >healthcare@temporary.net</a
                        >

                        <h5 class="mt-3">Social Media</h5>
                        <div class="footer-sosmed mt-3">
                            <a href="#" target="_blank"
                                ><span class="mai-logo-facebook-f"></span
                            ></a>
                            <a href="#" target="_blank"
                                ><span class="mai-logo-twitter"></span
                            ></a>
                            <a href="#" target="_blank"
                                ><span class="mai-logo-google-plus-g"></span
                            ></a>
                            <a href="#" target="_blank"
                                ><span class="mai-logo-instagram"></span
                            ></a>
                            <a href="#" target="_blank"
                                ><span class="mai-logo-linkedin"></span
                            ></a>
                        </div>
                    </div>
                </div>

                <hr />

                <p id="copyright">
                    Copyright &copy; 2020
                    <a href="https://macodeid.com/" target="_blank">MACode ID</a
                    >. All right reserved
                </p>
            </div>
        </footer>

        <script src="../assets/js/jquery-3.5.1.min.js"></script>

        <script src="../assets/js/bootstrap.bundle.min.js"></script>

        <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

        <script src="../assets/vendor/wow/wow.min.js"></script>

        <script src="../assets/js/theme.js"></script>
    </body>
</html>
