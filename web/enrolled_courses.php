<?php

session_start();

?>
<main>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>eLearning Hub</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +91 123 456 7890</a>
                <a href="#"><span>Email:</span> info@elearn.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                   <!-- <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a> -->

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Explore</a>
                                    <ul class="dropdown">
                                        <li><a>Arts and Humanities</a></li>
                                        <li><a>Business</a></li>
                                        <li><a href="CScourses.php">Computer Science</a></li>
                                        <li><a>Health</a></li>
                                        <li><a>Math and Logic</a></li>
                                        <li><a>Social Sciences</a></li>
                                    </ul>
                                </li>
                            </ul>

                            <!-- Register / Login -->
                            <?php
                            if(isset($_SESSION['uEmail'])) {
                                echo '
                                <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';echo $_SESSION['uEmail'];echo '</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="enrolled_courses.php">Courses</a>
                                            <a class="dropdown-item" href="php/logout.inc.php">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>';

                            }

                            else {
                                echo '<div class="register-login-area">
                                <a href="signup.php" class="btn">Register</a>
                                <a href="login.php" class="btn active">Login</a>
                            </div>';
                            }
                            ?>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <!-- Breadcumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Computer Science</li>
            </ol>
        </nav>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Catagory ##### -->
    <div class="clever-catagory bg-img d-flex align-items-center justify-content-center p-3" style="background-image: url(img/bg-img/bg2.jpg);">
        <h3>Enrolled courses</h3>
    </div>

    <!-- ##### Courses ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
        <?php
    require 'php/dbh.inc.php';
    $sql = "Select DISTINCT course_name from courses_ where u_email=?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql)){
        header("Location: index.php?ERROR");
        exit();
    }
    else {

        mysqli_stmt_bind_param($stmt,'s',$_SESSION['uEmail']);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        while($row = mysqli_fetch_array($result))
        {
            if($row['course_name'] == 'cplusplus')
            {
                echo '<a href="cplusplus.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/courses/cpp.png" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>C++ programming</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Stanford University</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn C++ Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10.2k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
            
            if($row['course_name'] == 'python')
            {
                echo '<a href="python.php">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/courses/python.png" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Python programming</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Michigan University</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Python Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 20.3k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.8
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
            if($row['course_name'] == 'java')
            {
                echo '<a href="java.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="img/courses/java.png" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Java programming</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">University of Maryland</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Java Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 6.3k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.6
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
            if($row['course_name'] == 'machinelearning')
            {
                echo '<a href="machinelearning.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/courses/ML.jpeg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Machine Learning</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">UC Berkeley</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Machine Learning Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 18.5k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
            if($row['course_name'] == 'cryptography')
            {
                echo '<a href="cryptography.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/courses/crypto.jpg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Cryptography</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">MIT</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Cryptography Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10.7k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.7
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                </a>';

            }
            if($row['course_name'] == 'gamedevelopment')
            {
                echo '<a href="gamedevelopment.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="img/courses/game.png" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Game development</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">University of Utah</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Game Development Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10.2k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.2
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
            if($row['course_name'] == 'dsalso')
            {
                echo '<a href="dsalso.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/courses/ds.png" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Data structures and Algorithms</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">CalTech</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Data structures and algorithms Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 12.6k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.1
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
            if($row['course_name'] == 'mobile')
            {
                echo '<a href="mobile.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/courses/app.png" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Mobile Application development</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Stanford</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Mobile application development Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 17.7l
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.7
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
            if($row['course_name'] == 'dbms')
            {
                echo '<a href="dbms.php">
                <!-- Single Popular Course -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <img src="img/courses/dbms.jpeg" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>Database Management Systems</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">University of Pennsylvania</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            </div>
                            <p>Learn Database Management Online At Your Own Pace. Start Today and Become an Expert in Days. Join Millions of Learners From Around The World Already Learning with our expert instructors</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 18.9k
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.8
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>';

            }
        }

    }
    ?>
</div>
</div>
</section>

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Top Footer Area -->
        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         <center>
                       
                <table style="width:70%; color:white">
                    <tr>
                        <th>Company Address</th>
                        <th>Contact Number</th> 
                        <th>Email</th>
                    </tr>
                    <tr>
                        <td>ABC Street, </td>
                        <td>+91 123 456 7891</td>
                        <td>info@elearn.com</td>
                    </tr>
                    <tr>
                        <td>New Town, India</td>
                        <td>+91 123 456 7891</td>
                        <td>support@elearn.com</td>
                    </tr>
                  
                </table>
                </center> 
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                <a href="#"><span>Email:</span> info@clever.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body>

</html>
</main>