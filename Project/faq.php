<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include 'php/head.php'

    ?>
    <title>Placement Portal</title>
</head>

<body>

    <?php

    include 'php/header.php'
    ?>
    <section id="faq" class="faq">
        <div class="container-fluid" data-aos="fade-up">

            <div class="row gy-4">

                <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                    <div class="content px-xl-5">
                        <h3>Frequently Asked <strong>Questions</strong></h3>
                        <p>
                            Any queries or doubts regarding the<strong> Placement Portal </strong> will be addressed over here students might get confused regarding the placement portal and may have may have queries to be solved.
                    </div>

                    <div class="accordion accordion-flush px-xl-5" id="faqlist">

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    What is the objective of this portal ?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laudantium asperiores sequi vero nam ab quibusdam illo similique tempora saepe laboriosam atque, dicta omnis culpa quas laborum recusandae, sunt veniam vel? Hic, corrupti magni praesentium sit dolorum ipsam perspiciatis animi, alias error nisi fugit quibusdam odio nesciunt vitae culpa rerum ut?
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    Do you find any problem during login or registration ?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, ratione.
                                </div>
                            </div>
                        </div><!-- # Faq item-->

                        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                    <i class="bi bi-question-circle question-icon"></i>
                                    How much time, one need to wait for the account approval ?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                                <div class="accordion-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod tenetur doloribus in, nobis incidunt aliquid? Magnam fuga facere praesentium quidem.
                                </div>
                            </div>
                        </div><!-- # Faq item-->
                        <!-- # Faq item-->

                        <!-- # Faq item-->

                    </div>

                </div>

                <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/faqq.jpg");'>&nbsp;</div>
            </div>

        </div>
    </section>

    <?php
    include 'php/footer.php'
    ?>



</body>

</html>