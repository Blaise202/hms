

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

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header class="p-0">
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-sm">
                        <div class="site-info">
                            <a href="#">
                                <span class="mai-call text-primary"></span> 
                                +250 790 056 064
                            </a>
                            <span class="divider">|</span>
                            <a href="#">
                                <span class="mai-mail text-primary"></span>
                                 izerimanab74@gmail.com
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 text-right-flex text-sm">
                        <div class="social-mini-button">
                            <a href="#">
                                <span class="mai-logo-facebook-f"></span>
                            </a>
                            <a href="#">
                                <span class="mai-logo-twitter"></span>
                            </a>
                            <a href="#">
                                <span class="mai-logo-dribbble"></span>
                            </a>
                            <a href="#">
                                <span class="mai-logo-instagram"></span>
                            </a>
                        </div>
                    </div>    
                </div> <!-- .row -->
            </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm ">
            <div class="container col-sm-12">
                <div class="col-sm-2">
                    <a class="navbar-brand " href="#">
                        <span class="text-primary"> A<sub>-</sub>Z</span>-Hospital
                    </a>
                </div>
                

                <div class="col-sm-10" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="doctors.html">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
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
    <div class="p-3 pr-5">
        <form action="#">
            <div class="input-group input-navbar">
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-addon1">
                            <span class="mai-search"></span>
                        </span>
                    </div>
            </div>
        </form>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
            aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> 
    </div>
    
   <div class="pl-3">
        <table class="table table-dark tr-striped">
            <tr>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
                <th>Modify Appointment</th>
            </tr>
            @foreach ($appoint as $appoints)
                <tr>
                    
                    <td>{{$appoints->dr_name}}</td>
                    <td>{{$appoints->date}}</td>
                    <td>{{$appoints->message}}</td>
                    <td>{{$appoints->status}}</td>
                    <td> 
                        <a href="{{ url('AppointmentDelete',$appoints->id) }}" onclick="return confirm('Are you sure you need to delete this appointment')" class="btn btn-accent">Cancel</a> 
                        <a class="btn btn-primary">Edit</a> 
                    
                    </td>

                    
                </tr>
            @endforeach
           
        </table>
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

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>