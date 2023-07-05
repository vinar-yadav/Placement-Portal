<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<title>Placement Cell</title>

<head>
    <?php

    include 'php/head.php'

    ?>
    
    <style>
        .c-item {
            height: 480px;
        }

        .c-img {
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }
    </style>

    <style>
        button {
            border: none;
            background-color: transparent;
            outline: none;
        }

        .dropbtn {
            width: 213px;
            color: none;
            text-decoration: none;
            font-size: 30px;
            font-weight: 500;
            padding: 5px 30px;
            margin: 15px 0;
            color: #fff;
            position: relative;
            line-height: 50px;
            transition: all 0.3s ease;
        }

        .dropbtn:after {
            position: absolute;
            content: "";
            background: #fff;
            width: 100%;
            height: 50px;
            left: 0;
            border-radius: 50px;
            transform: scaleY(0);
            z-index: -1;
            transition: transform 0.3s ease;
        }

        .dropbtn:hover:after {
            transform: scaleY(1);
        }

        .dropbtn:hover {
            color: #4158d0;
        }

        .dropdown {
            position: relative;
            display: flex;
        }

        .dropdown-content {

            display: none;
            position: absolute;
            background-color: transparent;
            min-width: 160px;
            margin-left: 213px;
            /* box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2); */
            z-index: 1;
        }

        .dropdown-content a {
            width: 213px;
            text-decoration: none;
            font-size: 20px;
            font-weight: 500;
            margin: -12px 33px;
            color: #fff;
            position: relative;
            line-height: 50px;
            transition: all 0.3s ease;
            padding: 0px 6px;
            display: block;
            text-align: left;

        }

        .dropdown-content a:hover {

            color: #4158d0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        } 
    </style>
    <link rel="stylesheet" href="assets/css/navigation.css">
    <script src="https://kit.fontawesome.com/75ba83376c.js" crossorigin="anonymous"></script>

</head>

<body>

    <!-- header starts -->
    <?php

    // include 'php/header.php'

    ?>
    <!-- header ends -->
    <header>
    <img src="assets/img/logo_250.png" height=100px style="height:100px; width:100px ; margin:10px 10px" />
        <input type="checkbox" id="active">
        <label for="active" class="menu-btn"><i class="fa-solid fa-bars"></i></label>
        <div class="wrapper over" style="text-align: center;">
            <ul>
                <li><a href="index.php">Home</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Login</button>
                    <div class="dropdown-content">
                        <a href="admin/index.php">Admin</a>
                        <a href="login.php">Student</a>
                        <a href="login.php">Co-ordinator</a>
                    </div>
                </div>



                <li><a href="contact.php">Contact Us</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Register</button>
                    <div class="dropdown-content">
                        <a href="register-candidates.php">Student</a>
                        <a href="register-company.php">Co-ordinator</a>
                    </div>
                </div>
                <li><a href="faq.php">FAQs</a></li>

            </ul>
        </div>

    </header>

    <section>
        <!-- previous one -->
        <!-- <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
            <img src="assets/img/hero-carousel/hero-carousel-1.svg" class="img-fluid animated">
            <h2>Welcome to <span>NITJ- Placement Cell</span></h2>
            <p>We Will Support You In Your Entire Placement Journey.</p>
            <div class="d-flex">
                <a href="login.php" class="btn-get-started scrollto">Get Started</a>

            </div>
        </div> -->
        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-interval="100">
            <!-- <div class="carousel-indicators" style="z-index: -1;">
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> -->
            <div class="carousel-inner">
                <div class="carousel-item active c-item">
                    <img src="assets/img/nitj_2.jpg" class="d-block w-100 c-img" alt="Slide 1" >
                    <div class="carousel-caption top-0 mt-4">
                        <p class="mt-5 fs-3 text-uppercase">NITJ <strong> Placement </strong> Cell</p>
                        <h1 class="display-1 fw-bolder text-capitalize">Boosting up your Career</h1>
                        <a href="login.php"><button class="btn btn-primary px-4 py-2 fs-5 mt-5">Get Started</button></a>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="assets/img/nitj_1.jpg" class="d-block w-100 c-img" alt="Slide 2">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="text-uppercase fs-3 mt-5">NITJ <strong> Placement </strong> Cell</p>
                        <p class="display-1 fw-bolder text-capitalize">1.2 CR Highest Package</p>
                        <a href="login.php"><button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal" data-bs-target="#booking-modal">Get Started</button></a>
                    </div>
                </div>
                <div class="carousel-item c-item">
                    <img src="assets/img/nitj_3.jpg" class="d-block w-100 c-img" alt="Slide 3">
                    <div class="carousel-caption top-0 mt-4">
                        <p class="text-uppercase fs-3 mt-5">NITJ <strong> Placement </strong> Cell</p>
                        <p class="display-1 fw-bolder text-capitalize">150+ Companies Visited</p>
                        <a href="login.php"><button class="btn btn-primary px-4 py-2 fs-5 mt-5" data-bs-toggle="modal" data-bs-target="#booking-modal">Get Started</button></a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev" style="z-index: 0;">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next" style="z-index: 0;">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <main id="main">

        <!-- ======= Featured Services Section ======= -->
        <section id="featured-services" class="featured-services" >
            <div class="container">

                <div class="row gy-4" >

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
                        <div class="service-item position-relative" >
                            <div class="icon"><i class="bi bi-activity icon"></i></div>
                            <h4><a href="login.php" class="stretched-link">Login</a></h4>
                            <p>Students can login using their credentials. </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200" >
                        <div class="service-item position-relative" >
                            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
                            <h4><a href="register-candidates.php" class="stretched-link">Register</a></h4>
                            <p>Register yourself here.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
                            <h4><a href="#" class="stretched-link">Look for companies</a></h4>
                            <p>You can search for companies.</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
                            <h4><a href="#" class="stretched-link">Apply for Drives</a></h4>
                            <p>Look for eligibilty criteria and apply for companies accordingly.</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>
        </section><!-- End Featured Services Section -->




        <!-- ======= Call To Action Section ======= -->


        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-out">

                <div class="row g-5">


                    <div class="col-lg-8 col-md-6 content d-flex flex-column justify-content-center ">
                        <h3>Placement <em>Cell</em> </h3>
                        <p>The Placement Cell plays a crucial role in locating job
                            opportunities for under graduates and post graduates passing out from the college by
                            keeping in touch with reputed firms and industrial establishments.
                            <br>The placement cell operates round the year to facilitate contacts between companies
                            and graduates. The number of students placed through the campus interviews is
                            continuously rising.
                        </p>
                        <!-- <a class="cta-btn align-self-start" href="#">Get Started</a> -->
                    </div>


                    <div class="col-lg-4 col-md-6  d-flex align-items-center">
                        <div class="img">
                            <img src="assets/img/feature-7.jpg" alt="" class="img-fluid">
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Call To Action Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients">
            <div class="container" data-aos="zoom-out">

                <div class="clients-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide"><img src="assets/img/clients/client-1.svg" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
                        <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
                    </div>
                </div>

            </div>
        </section><!-- End Clients Section -->



        <!-- ======= Features Section ======= -->
        <section id="objectives" class="features" name="objectives">
            <div class="container" data-aos="fade-up">



                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row gy-4">
                            <div class="col-lg-8 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                                <h3>Objectives</h3>
                                <p class="fst-itali">
                                    Our Placement Portal serves various objectives:
                                </p>
                                <ul>
                                    <li><i class="bi bi-check-circle-fill"></i> Developing the students to meet the Industries recruitment process.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To motivate students to develop Technical knowledge and soft skills in
                                        terms of career planning, goal setting.
                                    </li>
                                    <li><i class="bi bi-check-circle-fill"></i> To produce world-class professionals who have excellent analytical skills,
                                        communication skills, team building spirit and ability to work in cross cultural
                                        environment.</li>

                                </ul>
                            </div>
                            <div class="col-lg-4 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="assets/img/features-1.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <!-- End Tab Content -->





                    <section id="statistics" class="content-header">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center latest-job margin-bottom-20">
                                    <h1>Our Statistics</h1>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM job_post";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Total Drives</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-paper"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-green">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM company WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Job Offers</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-briefcase"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-yellow">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE resume!=''";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>CV'S/Resume</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-ios-list"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class="col-lg-3 col-xs-6">
                                    <!-- small box -->
                                    <div class="small-box bg-red">
                                        <div class="inner">
                                            <?php
                                            $sql = "SELECT * FROM users WHERE active='1'";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                $totalno = $result->num_rows;
                                            } else {
                                                $totalno = 0;
                                            }
                                            ?>
                                            <h3>
                                                <?php echo $totalno; ?>
                                            </h3>

                                            <p>Users</p>
                                        </div>
                                        <div class="icon">
                                            <i class="ion ion-person-stalker"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                        </div>
                    </section>
                    <!-- ======= F.A.Q Section ======= -->


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    <?php

    include 'php/footer.php';
    ?>

    <!-- End Footer -->

    <!-- TPO bot -->

    <!-- <a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

    <button class="open-button is-size-5" onclick="openForm()" style="color:#6900FF !important;"><strong><i class="fas fa-comment-alt"></i> Chat</strong></button>

    <div class="chat-popup" id="myForm">
        <form class="form-container">
            <iframe style="border: none;border-radius: 5px;" width="280" height="390" allow="microphone;" src="https://console.dialogflow.com/api-client/demo/embedded/7dec0910-2f92-4902-849c-5c6f90718781">
            </iframe>

            <button type="button" class="button cancel is-fullwidth" style="background-color: rgba(105, 0, 255, 0.11);color:#6900FF;" onclick="closeForm()"><strong>Close</strong></button>
        </form>
    </div> -->


    <!-- JS FILES -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="{% static 'js/tabs.js' %}"></script>
    <style>

    </style>
    <script>
        // ===== Scroll to Top ==== 
        $(window).scroll(function() {
            if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
                $('#return-to-top').fadeIn(200); // Fade in the arrow
            } else {
                $('#return-to-top').fadeOut(200); // Else fade out the arrow
            }
        });
        $('#return-to-top').click(function() { // When arrow is clicked
            $('body,html').animate({
                scrollTop: 0 // Scroll to top of body
            }, 500);
        });

        // function openForm() {
        //     document.getElementById("myForm").style.display = "block";
        // }

        // function closeForm() {
        //     document.getElementById("myForm").style.display = "none";
        // }
        // $("#button").click(function() {
        //     $('html, body').animate({
        //         scrollTop: $("#about").offset().top
        //     }, 1000);
        // });
        // $("#button1").click(function() {
        //     $('html, body').animate({
        //         scrollTop: $("#events").offset().top
        //     }, 1000);
        // });
    </script>
    <script src="assets/js/main1.js"></script>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <script src="assets/js/counter.js"></script>



    <!-- tpo bot ends -->



</body>

</html>