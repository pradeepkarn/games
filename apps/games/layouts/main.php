<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <link rel="shortcut icon" href="/<?php echo STATIC_URL; ?>/games/assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/plugin/nice-select.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/plugin/magnific-popup.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/plugin/slick.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/arafat-font.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/plugin/animate.css">
    <link rel="stylesheet" href="/<?php echo STATIC_URL; ?>/games/assets/css/style.css">
    <script src="/<?php echo STATIC_URL; ?>/view/js/jq.3.5.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>
    <script>
        function swalert(obj) {
            Swal.fire(
                obj.title,
                obj.msg,
                obj.icon
            ).then(() => {
                if (obj.gotoLink) {
                    window.location.href = obj.gotoLink;
                }
            })
        }
    </script>
</head>

<body>
    <div id="global-progress-bar" style="height: 5px;" class="progress fixed-top" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
    </div>
    <!-- start preloader -->
    <div class="preloader" id="preloader"></div>
    <!-- end preloader -->

    <!-- Scroll To Top Start-->
    <a href="javascript:void(0)" class="scrollToTop"><i class="fas fa-angle-double-up"></i></a>
    <!-- Scroll To Top End -->

    <!-- header-section start -->
    <header class="header-section">
        <div class="overlay">
            <div class="container">
                <div class="row d-flex header-area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="<?php echo BASEURI; ?>">
                            <img src="/<?php echo STATIC_URL; ?>/games/assets/images/logo.png" class="logo" width="110px;" alt="logo">
                            
                        </a>
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-content">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-end" id="navbar-content">
                            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURI.route('home'); ?>">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURI.route('about'); ?>">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURI.route('faqs'); ?>">FAQs</a>
                                </li>
                                <!--<li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURI.route('blog'); ?>">Blog</a>
                                </li>-->
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="<?php //echo BASEURI; ?>#">Newsroom</a>
                                </li> -->

                                <!--<li class="nav-item">
                                    <a class="nav-link" href="<?php echo BASEURI.route('contact');; ?>">Contact Us</a>
                                </li>-->
                            </ul>
                            <div class="right-area header-action d-flex align-items-center max-un">
                                <?php if (!USER) : ?>
                                    <a href="<?php echo BASEURI . route('userLogin'); ?>" class="login">Login</a>
                                    <a href="<?php echo BASEURI . route('register'); ?>" class="cmn-btn">Sign Up
                                        
                                    </a>
                                <?php else: ?>
                                    <a href="<?php echo BASEURI . route('logout'); ?>" class="login">Logout</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- header-section end -->

    <?php import("apps/games/pages/{$context->page}", $context); ?>

    <!-- Footer Area Start -->
    <footer class="footer-section"  style="background-color: #ff3c10;">
        <div class="container">
            <div class="footer-area pt-120">
                <div class="footer-top pb-120">
                    <div class="row">
                        <div class="col-xl-3 col-6">
                            <div class="footer-box">
                                <h5 style="color: white;">Company</h5>
                                <ul class="footer-link">
                                    <li><a style="color: white;" href="#">About Us</a></li>
                                    <li><a style="color: white;" href="#">How2Play</a></li>  
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-6">
                            <div class="footer-box">
                                <h5 style="color: white;">COMPANY</h5>
                                <ul class="footer-link">
                                    <li><a style="color: white;" href="#">About us</a></li> 
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-6">
                            <div class="footer-box">
                                <h5 style="color: white;">SUPPORT</h5>
                                <ul class="footer-link">
                                    <li><a style="color: white;" href="#">Privacy Policy</a></li>
                                    <li><a style="color: white;" href="#">Terms n Condition</a></li>
                                    <!--<li><a style="color: white;" href="#">Contact Us</a></li>-->
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-6">
                            <div class="social">
                                <h5 style="color: white;">FOLLOW US</h5>
                                <ul class="footer-link">
                                    <li><a href="javascript:void(0)">
                                            <span style="background-color: white;"><i class="fab fa-facebook-f"></i></span>
                                            facebook
                                        </a></li>
                                    <li><a href="javascript:void(0)">
                                            <span style="background-color: white;"><i class="fab fa-twitter"></i></span>
                                            twitter
                                        </a></li>
                                    <li><a href="javascript:void(0)">
                                            <span style="background-color: white;"><i class="fab fa-twitch"></i></span>
                                            twitch
                                        </a></li>
                                    <li><a  href="javascript:void(0)">
                                            <span style="background-color: white;"><i  class="fab fa-youtube"></i></span>
                                            youtube
                                        </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6 d-flex justify-content-center justify-content-lg-start order-lg-0 order-1">
                            <div class="copyright text-center">
                                <p style="color: white;">All rights reserved. Copyright 2023 The Ticket City. </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!--==================================================================-->
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/jquery.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/jquery-ui.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/bootstrap.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/fontawesome.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/plugin/slick.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/plugin/jquery.nice-select.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/plugin/counter.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/plugin/waypoint.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/plugin/jquery.magnific-popup.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/plugin/wow.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/plugin/plugin.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/games/assets/js/main.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/tour/assets/js/jquery-3.5.1.min.js"></script>
    <?php
    ajaxActive("#global-progress-bar");
    ?>
    <script>
        $.ajaxSetup({
            xhr: function() {
                var xhr = new XMLHttpRequest();
                xhr.upload.addEventListener('progress', function(evt) {
                    if (evt.lengthComputable) {
                        var percentComplete = Math.round((evt.loaded / evt.total) * 100);
                        // Update the width of the progress bar inside #global-progress-bar
                        $('#global-progress-bar .progress-bar').css('width', percentComplete + '%');
                        // Update the text inside the progress bar (if needed)
                        // $('#global-progress-bar .progress-bar').html(percentComplete + '%');
                    }
                }, false);
                return xhr;
            }
        });
    </script>
</body>

</html>