<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style_audience.css">

    
  </head>
  <body>
    
    <div class="wrap">
      <!-- START NAV-->
      <header role="banner">
        <div class="top-bar">
          <div class="container">
            <div class="row">
              <div class="col-9 social">
                <!-- <a href="#"><span class="fa fa-twitter"></span></a>
                <a href="#"><span class="fa fa-facebook"></span></a>
                <a href="#"><span class="fa fa-instagram"></span></a>
                <a href="#"><span class="fa fa-youtube-play"></span></a> -->
              </div>
              <div class="col-3 search-top">
                <!-- <a href="#"><span class="fa fa-search"></span></a> -->
                <form action="https://www.google.com/search" class="search-top-form" method="get" name="searchform" target="_blank">
                <input name="sitesearch" type="hidden" value="">
                  
                <span class="icon fa fa-search"></span>
                <input type="text" id="s" name="q" placeholder="Type keyword to search...">
                </form>
              </div>  
            </div>
          </div>
        </div>

        <div class="container logo-wrap">
          <div class="row pt-5">
            <div class="col-12 text-center">
              <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
              <h1 class="site-logo"><a href="index.html">Family Fun</a></h1>
            </div>
          </div>
        </div>
        
        <nav class="navbar navbar-expand-md  navbar-light bg-light">
          <div class="container">
            <div class="collapse navbar-collapse" id="navbarMenu">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="/home">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown05">
                    <a class="dropdown-item" href="category.html">Lifestyle</a>
                    <a class="dropdown-item" href="category.html">Food</a>
                    <a class="dropdown-item" href="category.html">Adventure</a>
                    <a class="dropdown-item" href="category.html">Travel</a>
                    <a class="dropdown-item" href="category.html">Business</a>
                  </div>

                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about">Contact</a>
                </li>
              </ul>
              
            </div>
          </div>
        </nav>
      </header>
      <!-- END NAV-->
      @yield('konten')
      <!-- END header -->

    
      <footer id="about" class="site-footer">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md-4">
              <h3>About Us</h3>
              <p class="mb-4">
                <img src="https://image.freepik.com/free-photo/close-up-students-writing-reading-exam-answer-sheets-exercises-classroom-school-with-stress_73622-858.jpg" alt="Image placeholder" class="img-fluid">
              </p>

              <p>Berangkat dari 3 orang mahasiswa Informatika UIN Sunan Gunung Djati Bandung, 
                kami mencoba memberi <i>force</i> menuju Indonesia yang lebih baik. 
                <a href="#">Read More</a></p>
            </div>
            <div class="col-md-6 ml-auto">
              <div class="row">
                <div class="col-md-7">
                  <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Travel</a></li>
                      <li><a href="#">Adventure</a></li>
                      <li><a href="#">Courses</a></li>
                      <li><a href="#">Categories</a></li>
                    </ul>
                  </div>
                  </div>
                <div class="col-md-1"></div>
                
                <div class="col-md-4">

                  <div class="mb-5">
                    <h3>Social</h3>
                    <ul class="list-unstyled footer-social">
                      <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                      <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                      <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
                      <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
                      <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
              <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>

    
    <script src="js/main.js"></script>
  </body>
</html>