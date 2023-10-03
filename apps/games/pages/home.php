<style>
    /*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
    .hero {
        overflow-x: hidden;
        padding: 0;
    }

    .hero .carousel {
        width: 100%;
        min-height: 100vh;
        padding: 80px 0;
        margin: 0;
        position: relative;
    }

    .hero .carousel-item {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
        z-index: 1;
        transition-duration: 0.4s;
    }

    .hero .carousel-item::before {
        content: "";
        background-color: rgba(0, 0, 0, 0.7);
        position: absolute;
        inset: 0;
    }

    .hero .info {
        position: absolute;
        inset: 0;
        z-index: 2;
    }

    @media (max-width: 768px) {
        .hero .info {
            padding: 0 50px;
        }
    }

    .hero .info h2 {
        color: #fff;
        margin-bottom: 30px;
        padding-bottom: 30px;
        font-size: 56px;
        font-weight: 700;
        position: relative;
    }



    @media (max-width: 768px) {
        .hero .info h2 {
            font-size: 36px;
        }
    }

    .hero .info p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 28px;
        margin-bottom: 30px;
    }

    .hero .info .btn-get-started {
        position: relative;
        font-family: Poppins, sans-serif;
        font-weight: 500;
        font-size: 16px;
        letter-spacing: 1px;
        display: inline-block;
        padding: 12px 40px;
        border-radius: 50px;
        transition: 0.5s;
        margin: 10px;
        color: #fff;
        border: 2px solid #ff3c10;
        z-index: +9999999999;
        margin-left: 60px;
    }

    .hero .info .btn-get-started:hover {
        background: #ff3c10;
    }

    .hero .carousel-control-prev {
        justify-content: start;
    }

    @media (min-width: 640px) {
        .hero .carousel-control-prev {
            padding-left: 15px;
        }
    }

    .hero .carousel-control-next {
        justify-content: end;
    }

    @media (min-width: 640px) {
        .hero .carousel-control-next {
            padding-right: 15px;
        }
    }

    .hero .carousel-control-next-icon,
    .hero .carousel-control-prev-icon {
        background: none;
        font-size: 26px;
        line-height: 0;
        background: rgba(255, 255, 255, 0.2);
        color: rgba(255, 255, 255, 0.6);
        border-radius: 50px;
        width: 54px;
        height: 54px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero .carousel-control-prev,
    .hero .carousel-control-next {
        z-index: 3;
        transition: 0.3s;
    }

    .hero .carousel-control-prev:focus,
    .hero .carousel-control-next:focus {
        opacity: 0.5;
    }

    .hero .carousel-control-prev:hover,
    .hero .carousel-control-next:hover {
        opacity: 0.9;
    }
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">



    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <?php
        foreach ($context->data->hero as $key => $hr) {
            $hr = obj($hr);
        ?>
            <div class="carousel-item <?php echo $key === 0 ? 'active' : null; ?>" style="background-image: url(/<?php echo MEDIA_URL . "/images/pages/$hr->banner"; ?>)">
                <div class="info d-flex align-items-center">
                    <div class="container">
                        <div class="row justify-content-left">
                            <div class="col-lg-12 text-left">
                                <p data-aos="fade-up">
                                    <?php echo $hr->content; ?>
                                </p>
                                <h2 data-aos="fade-down"><?php echo $hr->title; ?></h2>
                                <a data-aos="fade-up" data-aos-delay="200" href="<?php echo USER ? $hr->link : BASEURI . route('register'); ?>" class="btn-get-started"><?php echo USER ? "Get Started" : "Sign Up"; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>


        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section><!-- End Hero Section -->
<!-- Banner Section start -->
<!-- <section class="banner-section index index-3">
        <div class="overlay">
            <div class="banner-content">
                <div class="container wow fadeInUp">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-5 col-lg-6 col-md-8">
                            <div class="main-content">
                                <div class="top-area section-text">
                                    <h5 class="sub-title">FUTURE OF COACHING SERVICE</h5>
                                    <h1 class="title">IMPROVE  YOUR GAME</h1>
                                    <p class="xlr">Get better and unlock your potential in the games you love most</p>
                                </div>
                                <div class="bottom-area d-xxl-flex">
                                    <a href="coaching.html" class="cmn-btn">Explore</a>
                                    <a href="how-works.html" class="cmn-btn alt">How it works<i class="icon-e-double-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
<!-- Banner Section end -->

<!-- Games start -->
<section class="games carousel">
    <style>
        .single-slide.closed .thumb img {
            filter: blur(5px);
            /* Apply a blur effect */
        }

        .single-slide.closed .text-area::before {
            content: '';
            /* Create a pseudo-element for the disabled ribbon */
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            /* Semi-transparent background */
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            z-index: 1;
            content: 'Inactive';
            /* Text content for the ribbon */
        }
    </style>
    <div class="overlay pt-120 pb-120">
        <div class="container wow fadeInUp">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">

                        <h1 style="color: #494949">GAMES</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="games-carousel">
                        <?php
                        $games = $context->data->game_list;
                        foreach ($games as $key => $gm) {
                            $gm = obj($gm);
                            $isGameClosed = $gm->is_closed;
                            $gameregurl = $isGameClosed ? "#" : BASEURI . route('gameRegister', ['gameid' => $gm->link_id]);
                            $gameText = $isGameClosed ? "Inactive" : "Play";
                        ?>
                            <div class="single-slide <?php echo $isGameClosed ? 'closed' : ''; ?>">
                                <div class="single">
                                    <div class="single-item">
                                        <div class="thumb">
                                            <img style="height: 300px; object-fit:cover;" src="/<?php echo MEDIA_URL . "/images/pages/" . $gm->banner; ?>" class="w-100" alt="icon">
                                        </div>
                                        <div class="text-area justify-content-center align-center">
                                            <h5 style="color: white;"><?php echo $gm->title; ?></h5>
                                            <p class="my-2"><?php echo changeToAMPM($gm->opens_at); ?> - <?php echo changeToAMPM($gm->closes_at); ?> (<?php echo TIME_ZONE; ?>)</p>
                                            <div class="footer d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <a href="<?php echo USER ? $gameregurl : BASEURI . route('register'); ?>" style=" background-color: #ff3c10; padding: 0 25px; border-radius: 50px;"><?php echo USER ? "$gameText" : "Register"; ?></a>
                                                </div>
                                                <p class="mdr">$ <?php echo $gm->price; ?> RTGS</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Games end -->

<!-- Features second start -->
<section class="features-second">
    <div class="overlay pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">

                        <h2 class="title" style="color: #524e4e">How To Play</h2>
                        <p>The memory game is open to individuals who are at least 18 years old or hav the consent of a parent or leagal guardian. Employees, representatives, or affiliates of the game organizers, including their immediate family memebers, are not eligible to participate.</p>
                    </div>
                </div>
            </div>
            <div class="row gap-3">
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icons/edit (1).png" alt="icon">
                        </div>
                        <div class="text-area">

                            <p>Upon registering for the game, you will receive a inique coupon link., that can only be used once and is non-tranferable. Participants are responsible for keeping the coupon link private and not sharing with others.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icons/partnership.png" alt="icon">
                        </div>
                        <div class="text-area">

                            <p>The Objective of the game is to match all the faces within the shortest time possible. Praticipants must complete the game using their own skills and abilities without any external assistance or cheating.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icons/avoid-crowds.png" alt="icon">
                        </div>
                        <div class="text-area">

                            <p>Any form of unfair play, including hacking, exploiting bugs, or using automated scripts, will result in immediate disqualification.</p>
                        </div>
                    </div>
                </div>
                <style>
                    /* Hide the element with class "mobile-hidden" on mobile devices */
                    @media (max-width: 767px) {
                        .mobile-hidden {
                            display: none;
                            z-index: -1;
                        }
                    }
                </style>
                <div class="col-lg-5 mobile-hidden" style="position: absolute; margin-left: 50%; ">
                    <img src="/<?php echo STATIC_URL; ?>/games/assets/images/ticketcity images/player.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features second end -->

<!-- Features second start -->
<section class="features-second" style="background-color: #d1d4e7; margin-top: 30px; margin-bottom: 30px; ">
    <div class="overlay pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-header">

                        <h2 class="title">Terms and Conditions</h2>
                        <p>Please read these Terms and Conditions carefully before participating in our online memory game. By accessing or using the game, you agree to be bound by these Terms and Conditions. If you do not agree with any part of these terms, please refrain from accesing or using the game.</p>
                    </div>
                </div>
            </div>
            <div class="row gap-3">

                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/ticketcity images/eligibility-icon.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>Eligiblity</h5>
                            <p>The memory game is open to individuals who are at least 18 years old or have the consent of a parent or legal guardian. <br> Employees, representatives, or affiliates of the game organizers, including their immediate family members, are not eligible to participate.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/ticketcity images/game-rules-icon.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>Game Rules</h5>
                            <p>The objective of the game is to match all the faces within the shortest time possible. <br> Participants must complete the game using their own skills and abilities without any ecternal assistance or cheating. <br> Any form of unfair play, including hacking, exploiting bugs, or using automated scripts, will result in immediate disqualification.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/ticketcity images/privacy-icon.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>Privacy</h5>
                            <p>We respect your privacy and handle your personal information in accordance with our Privacy Policy. By paricipating in the game, you consent to the collection, use, and disclosure of your personal information as described in the Privacy Policy.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 " style="margin-bottom: 20px;">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/ticketcity images/intellectual-property-icon.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>Intellectual Property:</h5>
                            <p>All intellectual property rights, including copyrights and trademarks, associated with the game, its content, and materials belong to the game organizers. <br> You may not reproduce, distribute, modify, or create derivative permission from the game organizers.</p>
                        </div>
                    </div>
                </div>
                <style>
                    /* Hide the element with class "mobile-hidden" on mobile devices */
                    @media (max-width: 767px) {
                        .mobile-hidden {
                            display: none;
                            z-index: -1;
                        }
                    }
                </style>
                <div class="col-lg-5 mobile-hidden" style="position: absolute; margin-left: 40%; width: 100%;">
                    <img src="/<?php echo STATIC_URL; ?>/games/assets/images/ticketcity images/terms-and-conditions-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features second end -->







<!-- FAQs In start -->
<section class="faqs-section index-3" style="background-image: url(/<?php echo STATIC_URL; ?>/games/assets/images/wallpaperflare.com_wallpaper.jpg); margin-top: -30px;">
    <div class="overlay pt-120 pb-120">
        <div class="container" style="margin-top: 30px;">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">

                        <h2 class="title" style="color: white;">FAQ</h2>

                    </div>
                </div>
            </div>
            <div class="row cus-mar justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="accordionFaqs">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftOne" style="color: white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftOne" aria-expanded="false" aria-controls="collapseLeftOne">
                                    WHAT IS PAY2PLAY?
                                </button>
                            </h6>
                            <div id="collapseLeftOne" class="accordion-collapse collapse" aria-labelledby="headingLeftOne" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p style="color: white;">PayTo Play is a game that you can play online and get paid, with cool non-cash rewards that .</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftTwo" style="color: white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo" aria-expanded="false" aria-controls="collapseLeftTwo">
                                    HOW DOES THE PAYTOPLAY GAME WORK?
                                </button>
                            </h6>
                            <div id="collapseLeftTwo" class="accordion-collapse collapse" aria-labelledby="headingLeftTwo" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p style="color: white;">Register, select your game of choice and pay to play!! </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftThree" style="color: white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftThree" aria-expanded="false" aria-controls="collapseLeftThree">
                                    HOW DO I REGISTER?
                                </button>
                            </h6>
                            <div id="collapseLeftThree" class="accordion-collapse collapse" aria-labelledby="headingLeftThree" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p style="color: white;">To register, you typically need to create an account here on our landing page. Fill in the required information (your name, email address, and phone number). Follow the registration process provided to complete your account creation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftFour" style="color: white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftFour" aria-expanded="false" aria-controls="collapseLeftFour">
                                    HOW DO I CLAIM MY PRIZE?
                                </button>
                            </h6>
                            <div id="collapseLeftFour" class="accordion-collapse collapse" aria-labelledby="headingLeftFour" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p style="color: white;">To claim your prize, simply respond to the email or SMS sent you and follow the details.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftFour" style="color: white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftFour" aria-expanded="false" aria-controls="collapseLeftFour">
                                    IS THERE A TIME PERIOD IN WHICH TO CLAIM MY PRIZE?
                                </button>
                            </h6>
                            <div id="collapseLeftFour" class="accordion-collapse collapse" aria-labelledby="headingLeftFour" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p style="color: white;">Your results appear as soon as you finish the game. If you make it into the top 20,your score will be announced in the leaderboard 30 minutes after the game is closed for that day.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftFour" style="color: white;">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftFour" aria-expanded="false" aria-controls="collapseLeftFour">
                                    ARE THE RESULTS ANNOUNCED LIVE?
                                </button>
                            </h6>
                            <div id="collapseLeftFour" class="accordion-collapse collapse" aria-labelledby="headingLeftFour" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p style="color: white;">Our influencer will announce the winners 30 minutes after the game is closed and all the winners will be announced on Ticket City social media platforms. Each winner received a personalized email and SMS with details to claim their prize.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Media query for mobile devices with a maximum width of 767px */
        @media (max-width: 767px) {
            .form-group img {
                width: 50px;
                /* Set image width to 100% of its container on smaller screens */
                margin-right: 20px;
                /* Remove negative margin on smaller screens */

            }

            .form-group input[type="text"] {
                width: 100%;
                /* Set input width to 100% of its container on smaller screens */
            }

            /* .cmn-btn{

    } */
        }
    </style>
    <div class="newsletter">
        <div class="row justify-content-center">
            <div class="col-lg-7 " style=" background-color: rgba(255, 64, 0, 0.8); padding: 30px 90px;  border-radius: 30px;">
                <div class="section-area mb-30 text-center">
                    <h3 class="title" style="color: white;">Subscribe for updates</h3>
                </div>

                <form action="#">
                    <div class="form-group d-flex align-items-center">

                        <img style="margin-left: -50px; width: 20%;" src="/<?php echo STATIC_URL; ?>/games/assets/images/ticketcity images/subscribe-icon.png" alt="icon">
                        <input type="text" placeholder="Your email address">
                        <button class="cmn-btn" style="background-color: white; ">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Testomonial end -->
</section>
<!-- FAQs In end -->