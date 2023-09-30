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

    .hero .info h2:after {
        content: "";
        position: absolute;
        display: block;
        width: 80px;
        height: 4px;
        background: #18FFFF;
        left: 0;
        right: 0;
        bottom: 0;
        margin: auto;
    }

    @media (max-width: 768px) {
        .hero .info h2 {
            font-size: 36px;
        }
    }

    .hero .info p {
        color: rgba(255, 255, 255, 0.8);
        font-size: 18px;
    }

    .hero .info .btn-get-started {
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
        border: 2px solid #18FFFF;
    }

    .hero .info .btn-get-started:hover {
        background: #00B8D4;
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
                        <div class="row justify-content-center">
                            <div class="col-lg-6 text-center">
                                <h2 data-aos="fade-down"><?php echo $hr->title; ?></h2>
                                <p data-aos="fade-up">
                                    <?php echo $hr->content; ?>
                                </p>
                                <a data-aos="fade-up" data-aos-delay="200" href="<?php echo $hr->link; ?>" class="btn-get-started">Get Started</a>
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

    <div class="overlay pt-120 pb-120">
        <div class="container wow fadeInUp">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h5 class="sub-title">IMPROVE WITH COURSES & COACHES</h5>
                        <h2 class="title">SUPPORTED GAMES</h2>
                        <p>Lorem is a platform dedicated to helping players get better at the video games and esports they love most</p>
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
                        ?>
                            <div class="single-slide">
                                <div class="single">
                                    <div class="single-item">
                                        <div class="thumb">
                                            <img style="height: 300px; object-fit:cover;" src="/<?php echo MEDIA_URL . "/images/pages/" . $gm->banner; ?>" class="w-100" alt="icon">
                                        </div>
                                        <div class="text-area">
                                            <h5><?php echo $gm->title; ?></h5>
                                            <p class="my-2"><?php echo changeToAMPM($gm->opens_at); ?> - <?php echo changeToAMPM($gm->closes_at); ?> (<?php echo TIME_ZONE; ?>)</p>
                                            <div class="footer d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <a href="<?php echo USER ? BASEURI . route('gameRegister', ['gameid' => $gm->id]) : BASEURI . route('register'); ?>" style="background-image: linear-gradient(to right, #33001b, #ff0084);  padding: 0 25px; border-radius: 50px;"><?php echo USER ? "Play" : "Register"; ?></a>
                                                </div>
                                                <p class="mdr">$ <?php echo $gm->price; ?></p>
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
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-header">
                        <h5 class="sub-title">ENJOY YOUR GAMING EXPERIENCE MORE</h5>
                        <h2 class="title">Quality rather than Quantity!</h2>
                        <p>“We are not another corporation with hundreds of random Coaches”</p>
                    </div>
                </div>
            </div>
            <div class="row gap-3">
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/features-icon-1.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>Be Coached By The Best!</h5>
                            <p>Our team consists only of Experienced Coaches who are currently in the Challenger League.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/features-icon-2.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>Improvment or Cash Back!</h5>
                            <p>If you consider that you did not learn anything at all we will refund your money.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/features-icon-3.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>Coaching in Every Region</h5>
                            <p>We will be coaching you regardless of the region and time zone from which you are playing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/features-icon-4.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h5>97% Satisfied Customers</h5>
                            <p>All our existing customers have expressed their satisfaction with the coaching that we provide.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Features second end -->

<!-- Counter start -->
<div class="counter-section index-2">
    <div class="container pt-120 wow fadeInUp">
        <div class="main-content">
            <div class="row cus-mar">
                <div class="col-lg-4 col-md-6">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/counter-icon-1.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h2><span class="counter">1230</span></h2>
                            <p>Games</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/counter-icon-2.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h2><span class="counter">398</span><span>K</span></h2>
                            <p>Pro Coaches</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-area d-flex align-items-center">
                        <div class="img-area">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/counter-icon-3.png" alt="icon">
                        </div>
                        <div class="text-area">
                            <h2><span class="counter">398</span><span>K</span></h2>
                            <p>Pro Coaches</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counter end -->

<!-- call to action start -->
<section class="call-to-action">
    <div class="overlay pt-120 pb-120">
        <div class="container">
            <div class="main-content">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-4 cus-mar">
                        <div class="section-text">
                            <h5 class="sub-title">Become Player One</h5>
                            <h2 class="title">Unable to hit the Rank you aim for?</h2>
                            <p>Take your gaming skills to the next level in our Masterclass coaching.</p>
                        </div>
                        <a href="coaching-grid-list.html" class="cmn-btn alt">browse more</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <div class="feature-item text-center">
                                    <div class="thumb">
                                        <img src="/<?php echo STATIC_URL; ?>/games/assets/images/call-action-image-1.png" alt="icon">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 gap-3">
                                <div class="feature-item text-center">
                                    <div class="thumb mb-20">
                                        <img src="/<?php echo STATIC_URL; ?>/games/assets/images/call-action-image-2.png" alt="icon">
                                    </div>
                                </div>
                                <div class="feature-item text-center">
                                    <div class="thumb">
                                        <img src="/<?php echo STATIC_URL; ?>/games/assets/images/call-action-image-3.png" alt="icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- call to action end -->

<!-- How it works start -->
<section class="how-works index-2 index-3">
    <div class="overlay pt-120 pb-120">
        <div class="container wow fadeInUp">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 order-lg-0 order-1">
                    <div class="sec-image d-rtl">
                        <img src="/<?php echo STATIC_URL; ?>/games/assets/images/character.png" alt="image" class="max-un">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-header">
                        <h5 class="sub-title">Gaming Masterclasses & Coaching</h5>
                        <h2 class="title">How Lorem works</h2>
                        <p>With Lorem you book your sessions, instantly, and chat with coaches in real time (without breaking the bank).</p>
                    </div>
                    <div class="cus-mar">
                        <div class="single-item">
                            <div class="thumb">
                                <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/how-works-icon-1.png" alt="icon">
                                <span class="xlr">01</span>
                            </div>
                            <div class="text-area">
                                <h5>Choose Your Game</h5>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="thumb">
                                <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/how-works-icon-2.png" alt="icon">
                                <span class="xlr">02</span>
                            </div>
                            <div class="text-area">
                                <h5>Register Your Profile</h5>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="thumb">
                                <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/how-works-icon-3.png" alt="icon">
                                <span class="xlr">03</span>
                            </div>
                            <div class="text-area">
                                <h5>Become a pro</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- How it works end -->

<!-- Communtiy start -->
<section class="communtiy second">
    <div class="overlay pt-120 pb-120">
        <div class="container wow fadeInUp">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="section-text">
                        <h5 class="sub-title">Out of 3M+ total Lorem users</h5>
                        <h2 class="title">Join The Lorem Community</h2>
                        <p>A professional trainer will help you make better decisions, know what to watch out for, and level up quickly.</p>
                    </div>
                    <a href="register.html" class="cmn-btn">Join our community</a>
                </div>
                <div class="col-lg-6">
                    <div class="main-content">
                        <div class="bg-area">
                            <img class="bg-item max-un" src="/<?php echo STATIC_URL; ?>/games/assets/images/comunity-circle.png" alt="image">
                        </div>
                        <div class="community-item">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/community-01.png" alt="image" class="item item-1">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/community-02.png" alt="image" class="item item-2">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/community-03.png" alt="image" class="item item-3">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/community-04.png" alt="image" class="item item-4">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/community-05.png" alt="image" class="item item-5">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/community-06-alt.png" alt="image" class="item item-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Communtiy end -->

<!-- FAQs In start -->
<section class="faqs-section index-3">
    <div class="overlay pt-120 pb-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-7">
                    <div class="section-header text-center">
                        <h5 class="sub-title">Frequently Asked Questions</h5>
                        <h2 class="title">If you got questions we have answer</h2>
                        <p>We have a list of frequently asked questions about us</p>
                    </div>
                </div>
            </div>
            <div class="row cus-mar justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion" id="accordionFaqs">
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftOne" aria-expanded="false" aria-controls="collapseLeftOne">
                                    WHAT IS LOREM?
                                </button>
                            </h6>
                            <div id="collapseLeftOne" class="accordion-collapse collapse" aria-labelledby="headingLeftOne" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh ut odio tempus malesuada ac bibendum diam. In sollicitudin, dui a rutrum semper, lectus dui ultrices nisl, vitae facilisis arcu sem in ligula.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftTwo" aria-expanded="false" aria-controls="collapseLeftTwo">
                                    I'VE MADE ORDER. WHAT NOW?
                                </button>
                            </h6>
                            <div id="collapseLeftTwo" class="accordion-collapse collapse" aria-labelledby="headingLeftTwo" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh ut odio tempus malesuada ac bibendum diam. In sollicitudin, dui a rutrum semper, lectus dui ultrices nisl, vitae facilisis arcu sem in ligula.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftThree" aria-expanded="false" aria-controls="collapseLeftThree">
                                    CAN I GET A DISCOUNT ON THIS PRICE?
                                </button>
                            </h6>
                            <div id="collapseLeftThree" class="accordion-collapse collapse" aria-labelledby="headingLeftThree" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh ut odio tempus malesuada ac bibendum diam. In sollicitudin, dui a rutrum semper, lectus dui ultrices nisl, vitae facilisis arcu sem in ligula.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftFour" aria-expanded="false" aria-controls="collapseLeftFour">
                                    HOW CAN I KNOW YOU ARE LEGIT?
                                </button>
                            </h6>
                            <div id="collapseLeftFour" class="accordion-collapse collapse" aria-labelledby="headingLeftFour" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh ut odio tempus malesuada ac bibendum diam. In sollicitudin, dui a rutrum semper, lectus dui ultrices nisl, vitae facilisis arcu sem in ligula.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h6 class="accordion-header" id="headingLeftFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeftFive" aria-expanded="false" aria-controls="collapseLeftFive">
                                    WHY GET A COACH FROM LOREM?
                                </button>
                            </h6>
                            <div id="collapseLeftFive" class="accordion-collapse collapse" aria-labelledby="headingLeftFive" data-bs-parent="#accordionFaqs">
                                <div class="accordion-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec in nibh ut odio tempus malesuada ac bibendum diam. In sollicitudin, dui a rutrum semper, lectus dui ultrices nisl, vitae facilisis arcu sem in ligula.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FAQs In end -->

<!-- Testomonial start -->
<section class="testomonial">
    <div class="overlay pt-120 pb-120">
        <div class="container wow fadeInUp">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-text text-center">
                        <h5 class="sub-title">HEAR WHAT OUR PLAYERS HAVE TO SAY.</h5>
                        <h2 class="title">DON'T TAKE OUR WORD FOR IT</h2>
                        <p>Take your gaming skills to the next level in our Masterclass coaching</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-carousel">
                        <div class="single-slide">
                            <div class="single">
                                <div class="img-area">
                                    <img src="/<?php echo STATIC_URL; ?>/games/assets/images/testimonials-img.png" alt="image">
                                </div>
                                <div class="info-area">
                                    <p class="xlr">‘’Lorem is awesome! Had a great session with Saksham and got to learn a lot from a single workshop.’’</p>
                                    <div class="bottom d-flex align-items-center">
                                        <div class="img-area">
                                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/check.png" alt="image">
                                        </div>
                                        <p>JAYLON SARIS</p>
                                        <span>FIFA Gamer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="single">
                                <div class="img-area">
                                    <img src="/<?php echo STATIC_URL; ?>/games/assets/images/testimonials-img.png" alt="image">
                                </div>
                                <div class="info-area">
                                    <p class="xlr">‘’Lorem is awesome! Had a great session with Saksham and got to learn a lot from a single workshop.’’</p>
                                    <div class="bottom d-flex align-items-center">
                                        <div class="img-area">
                                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/check.png" alt="image">
                                        </div>
                                        <p>JAYLON SARIS</p>
                                        <span>FIFA Gamer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="single">
                                <div class="img-area">
                                    <img src="/<?php echo STATIC_URL; ?>/games/assets/images/testimonials-img.png" alt="image">
                                </div>
                                <div class="info-area">
                                    <p class="xlr">‘’Lorem is awesome! Had a great session with Saksham and got to learn a lot from a single workshop.’’</p>
                                    <div class="bottom d-flex align-items-center">
                                        <div class="img-area">
                                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/check.png" alt="image">
                                        </div>
                                        <p>JAYLON SARIS</p>
                                        <span>FIFA Gamer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="single">
                                <div class="img-area">
                                    <img src="/<?php echo STATIC_URL; ?>/games/assets/images/testimonials-img.png" alt="image">
                                </div>
                                <div class="info-area">
                                    <p class="xlr">‘’Lorem is awesome! Had a great session with Saksham and got to learn a lot from a single workshop.’’</p>
                                    <div class="bottom d-flex align-items-center">
                                        <div class="img-area">
                                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/check.png" alt="image">
                                        </div>
                                        <p>JAYLON SARIS</p>
                                        <span>FIFA Gamer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-slide">
                            <div class="single">
                                <div class="img-area">
                                    <img src="/<?php echo STATIC_URL; ?>/games/assets/images/testimonials-img.png" alt="image">
                                </div>
                                <div class="info-area">
                                    <p class="xlr">‘’Lorem is awesome! Had a great session with Saksham and got to learn a lot from a single workshop.’’</p>
                                    <div class="bottom d-flex align-items-center">
                                        <div class="img-area">
                                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/icon/check.png" alt="image">
                                        </div>
                                        <p>JAYLON SARIS</p>
                                        <span>FIFA Gamer</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testomonial end -->