<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Alpha-Q</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

 <style>
   table, td {
  border: 1px solid black;
}
   </style>
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container-fluid">
        
      <div id="logo" class="pull-left">
          <h1>
              
        <a href="#intro" class="scrollto"> Alpha-Q</a></h1>
      
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          
          <li><a href="#services">Student</a></li>
         
          
          
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active">
            <div class="carousel-background"><img src="img/intro-carousel/1.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h3>ALPHA-Q</h3>
                <h2>KUSH SHAH</h2>
                <a href="#featured-services" class="btn-get-started scrollto">Web Developer</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/2.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h4>ALPHA-Q</h4>
                <h2>TANMAY KHOT</h2>
                <a href="#featured-services" class="btn-get-started scrollto">Web Developer</a>
              </div>
            </div>
          </div>

          <div class="carousel-item">
            <div class="carousel-background"><img src="img/intro-carousel/3.jpg" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h4>ALPHA-Q</h4>
                <h2>ACHYUT P</h2>
                <a href="#featured-services" class="btn-get-started scrollto">Web Developer</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">

    

    

    <!--==========================
      Student Registration Form
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow ">
          <h3>Sign Up Page</h3>
          <p>Users are requested to fill up the given form carefully.</p>
        </header>



        <form method="POST" action="connect2.php">




        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Email Address</a></h4>
            <p class="description">Please provide your email address.</p>

              <div class="input-group" style="margin-left: 60px">
                <input class="input--style-1" type="email" placeholder="Email id" name="email" style="margin-bottom: 5px ; width: 200px" required="">
              </div>

          </div>




          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">First Name</a></h4>
            <p class="description">Please enter First name</p>
          
            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="text" placeholder="First Name" name="first_name" style="margin-bottom: 5px" required="">
              
            </div>
            
          </div>



          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Last Name</a></h4>
            <p class="description">Please enter Last name</p>
          
            <div class="input-group" style="margin-left: 60px">
  
              <input class="input--style-1" type="text" placeholder="Last Name" name="last_name" style="margin-bottom: 5px" required="">
              
            </div>
            
          </div>

        </div>


        <div class="row">

          
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">BOD</a></h4>
            <p class="description">Please choose your correct birthdate</p>

            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1 js-datepicker" type="date" placeholder="BIRTHDATE" name="bod" required="">
              
              </div>
              </br>
                
          </div>



          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Phone Number</a></h4>
            <p class="description">Please enter your phone number.</p>
            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="number" placeholder="Number" name="phone_number" style="margin-bottom: 5px ; width: 220px" required="">
          </div>
          </div>



          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Institution Name</a></h4>
            <p class="description">Please enter Institution name</p>
          
            <div class="input-group" style="margin-left: 60px">
  
              <input class="input--style-1" type="text" placeholder="Institution Name" name="institution_name" style="margin-bottom: 5px" required="">
              
            </div>
            
          </div>

        </div>



      <div class="row">

          
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Country Name</a></h4>
            <p class="description">Please enter present Country Name</p>

            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="text" placeholder="Country Name" name="country_name" style="margin-bottom: 5px" required="">
          </div>

          </div>



          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Password</a></h4>
            <p class="description">Please enter password</p>
            <div class="input-group" style="margin-left: 60px">
              <input class="input--style-1" type="password" placeholder="Password" name="password" style="margin-bottom: 5px ; width: 220px" required="">
          </div>
          </div>



          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">Confirm Password</a></h4>
            <p class="description">Please enter confirm password</p>
          
            <div class="input-group" style="margin-left: 60px">
  
              <input class="input--style-1" type="password" placeholder="Confirm Password" name="confirm_passord" style="margin-bottom: 5px" required="">
              
            </div>
            
          </div>

        </div>



















          


          
          
          
        </div>

      </div>
    </section>

    <!--==========================
     Submit Button Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Final Check</h3>
        <p> The team of Leaf Drive Academy give you one more chance to check your details properly. Once sent, it would be possible to change again.</p>
        <input type="submit" name="Submit" value="Submit">
      </div>
    </section><!-- #call-to-action -->




     </form>

    
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
 
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

  <!-- Jquery JS-->
  <script src="lib/jquery/jquery.min.js"></script>
  <!-- lib JS-->
  <script src="lib/select2/select2.min.js"></script>
  <script src="lib/datepicker/moment.min.js"></script>
  <script src="lib/datepicker/daterangepicker.js"></script>

  <!-- Main JS-->
  <script src="js/global.js"></script>










</body>
</html>
