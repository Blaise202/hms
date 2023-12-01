

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

    @if(session()->has('success'))

        <div class="alert alert-sussess">
            <button type="button" class="close" data-dismiss="alert" >X</button>
            {{ session()->get('success') }}
        </div>
    @endif

    <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
        <div class="hero-section">
            <div class="container text-center wow zoomIn">
                <span class="subhead">Let's make your life happier</span>
                <h1 class="display-4">Healthy Living</h1>
                <a href="#" class="btn btn-primary">Let's Consult</a>
            </div>
        </div>
    </div>


    <div class="bg-light">
        <div class="page-section py-3 mt-md-n5 custom-index">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p><span>Chat</span> with a doctors</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p><span>A <sub><b>-</b></sub> Z</span> Hospital Protection</p>
                        </div>
                    </div>
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-accent text-white">
                                <span class="mai-basket"></span>
                            </div>
                            <p><span> A <sub><b>-</b></sub> Z</span> Hospital Pharmacy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .page-section -->

        <div class="page-section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 py-3 wow fadeInUp">
                        <h1>Welcome to Your Health <br> Center</h1>
                        <p class="text-grey mb-4">
                            Welcome to our Hospital Management System, where cutting-edge technology meets compassionate healthcare. At the heart of our digital infrastructure is a seamless and user-friendly platform designed to enhance the efficiency and quality of patient care. Our system integrates advanced features, from streamlined appointment scheduling and electronic health records to real-time monitoring of vital signs. With a commitment to delivering patient-centric services, our Hospital Management System ensures a smooth and secure experience for both healthcare providers and patients. Experience the future of healthcare management with us, where innovation meets excellence, and every click brings us closer to a healthier tomorrow.
                        </p>
                        <a href="about.html" class="btn btn-primary">Learn More</a>
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

    @include('user.doctor');
    <div class="bg-light">
        <div class="container text-center wow fadeInUp">
            <h1 class="font-weight-normal">News</h1>
        </div> 
        <br><br>
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="row">
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Covid19</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_1.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_1.jpg" alt="">
                          </div>
                          <span>Roger Adams</span>
                        </div>
                        <span class="mai-time"></span> 1 week ago
                      </div>
                    </div>
                  </div>
                </div>
    
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Dental</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_3.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_4.jpg" alt="">
                          </div>
                          <span>Wizdom Jack</span>
                        </div>
                        <span class="mai-time"></span> 2 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
    
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Covid19</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_3.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">Shifting goalposts: Research in the time of the coronavirus</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_3.jpg" alt="">
                          </div>
                          <span>Adams Collier</span>
                        </div>
                        <span class="mai-time"></span> 4 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Neurology</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_4.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">What are the nonmedical factors most closely linked to death risk?</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_1.jpg" alt="">
                          </div>
                          <span>Roger Adams</span>
                        </div>
                        <span class="mai-time"></span> 4 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Cardiology</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_5.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">Do gut bacteria contribute to ethnic health disparities</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_1.jpg" alt="">
                          </div>
                          <span>Roger Adams</span>
                        </div>
                        <span class="mai-time"></span> 4 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Patient Services</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_1.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">The Recovery Room: News beyond the pandemic</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_1.jpg" alt="">
                          </div>
                          <span>Roger Adams</span>
                        </div>
                        <span class="mai-time"></span> 1 month ago
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">General Health</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_2.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">Racism in mental healthcare: An invisible barrier</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_1.jpg" alt="">
                          </div>
                          <span>Roger Adams</span>
                        </div>
                        <span class="mai-time"></span> 2 months ago
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="col-sm-6 py-3">
                  <div class="card-blog">
                    <div class="header">
                      <div class="post-category">
                        <a href="#">Covid19</a>
                      </div>
                      <a href="blog-details" class="post-thumb">
                        <img src="../assets/img/blog/blog_2.jpg" alt="">
                      </a>
                    </div>
                    <div class="body">
                      <h5 class="post-title"><a href="blog-details.html">COVID-19 live updates: Total number of cases passes 11.6 million</a></h5>
                      <div class="site-info">
                        <div class="avatar mr-2">
                          <div class="avatar-img">
                            <img src="../assets/img/person/person_2.jpg" alt="">
                          </div>
                          <span>Diego Simmons</span>
                        </div>
                        <span class="mai-time"></span> 4 weeks ago
                      </div>
                    </div>
                  </div>
                </div>
    
                <div class="col-12 my-5">
                  <nav aria-label="Page Navigation">
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                  </nav>
                </div>
              </div> <!-- .row -->
            </div>
            <div class="col-lg-4">
              <div class="sidebar">
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Search</h3>
                  <form action="#" class="search-form">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                      <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                    </div>
                  </form>
                </div>
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Categories</h3>
                  <ul class="categories">
                    <li><a href="#">Food <span>12</span></a></li>
                    <li><a href="#">Dish <span>22</span></a></li>
                    <li><a href="#">Desserts <span>37</span></a></li>
                    <li><a href="#">Drinks <span>42</span></a></li>
                    <li><a href="#">Ocassion <span>14</span></a></li>
                  </ul>
                </div>
    
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Recent Blog</h3>
                  <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="../assets/img/blog/blog_1.jpg" alt="">
                    </a>
                    <div class="content">
                      <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                  </div>
                  <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="../assets/img/blog/blog_2.jpg" alt="">
                    </a>
                    <div class="content">
                      <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                  </div>
                  <div class="blog-item">
                    <a class="post-thumb" href="">
                      <img src="../assets/img/blog/blog_3.jpg" alt="">
                    </a>
                    <div class="content">
                      <h5 class="post-title"><a href="#">Even the all-powerful Pointing has no control</a></h5>
                      <div class="meta">
                        <a href="#"><span class="mai-calendar"></span> July 12, 2018</a>
                        <a href="#"><span class="mai-person"></span> Admin</a>
                        <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                      </div>
                    </div>
                  </div>
                </div>
    
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Tag Cloud</h3>
                  <div class="tagcloud">
                    <a href="#" class="tag-cloud-link">dish</a>
                    <a href="#" class="tag-cloud-link">menu</a>
                    <a href="#" class="tag-cloud-link">food</a>
                    <a href="#" class="tag-cloud-link">sweet</a>
                    <a href="#" class="tag-cloud-link">tasty</a>
                    <a href="#" class="tag-cloud-link">delicious</a>
                    <a href="#" class="tag-cloud-link">desserts</a>
                    <a href="#" class="tag-cloud-link">drinks</a>
                  </div>
                </div>
    
                <div class="sidebar-block">
                  <h3 class="sidebar-title">Paragraph</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                </div>
              </div>
            </div> 
          </div> <!-- .row -->
        </div> <!-- .container -->
    
    </div>
    @include('user.appointment');

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