 <!-- Login Reg In start -->
 <section class="login-reg">
     <?php $game = $context->data->game; ?>
     <div class="overlay pb-120">
         <div class="container">

             <div class="row pt-120 d-flex justify-content-center">
                 <div class="col-xxl-6 col-xl-7">
                     <div class="login-reg-main text-center">
                         <div class="form-area">
                             <div class="section-text">
                                 <h4><?php echo $game->title; ?></h4>
                                 <img style="height: 100px; object-fit:contain;" src="/<?php echo MEDIA_URL . "/images/pages/" . $game->banner; ?>" class="w-100" alt="icon">
                             </div>
                             <form id="my-form" action="/<?php echo home . route('gameRegisterAjax'); ?>" method="post">
                                 <div class="row">
                                     <div class="col-12">

                                         <div class="single-input">
                                             <label for="email">Email Address</label>
                                             <div class="input-box">
                                                 <input type="text" id="email" name="email" value="<?php echo USER['email'] ?? null; ?>" class="email" placeholder="Enter Your Email">
                                             </div>
                                         </div>
                                         <div class="single-input">
                                             <label for="isdcode">ISD CODE</label>
                                             <div class="input-box">
                                                 <input type="number" id="isdcode" name="isd_code" value="<?php echo USER['isd_code'] ?? null; ?>" class="email" placeholder="Enter Dial code">
                                             </div>
                                         </div>
                                         <div class="single-input">
                                             <label for="mobile">Mobile</label>
                                             <div class="input-box">
                                                 <input type="text" id="mobile" name="mobile" value="<?php echo USER['mobile'] ?? null; ?>" class="email" placeholder="Enter Your Mobile">
                                             </div>
                                         </div>
                                         <div class="single-input">
                                             <label for="fname">First name</label>
                                             <div class="input-box">
                                                 <input type="text" name="first_name" id="fname" value="<?php echo USER['first_name'] ?? null; ?>" placeholder="Enter First Name">
                                             </div>
                                         </div>
                                         <div class="single-input">
                                             <label for="lname">Last name</label>
                                             <div class="input-box">
                                                 <input type="text" name="last_name" id="lname" value="<?php echo USER['last_name'] ?? null; ?>" placeholder="Enter Last Name">
                                             </div>
                                         </div>
                                     </div>

                                     <div class="remember-me">
                                         <label class="checkbox-single d-flex align-items-center">
                                             <span class="left-area">
                                                 <span class="checkbox-area d-flex">
                                                     <input checked type="checkbox" name="terms_and_conditions_and_privacy_policy" id="tnc">
                                                     <span class="checkmark"></span>
                                                 </span>
                                                 <span class="item-title d-flex align-items-center">
                                                     <span>You agree with our</span>
                                                     <a href="javascript:void(0)">Forgot Password</a>
                                                     <span>And </span>
                                                     <a href="#">privacy policy</a>
                                                 </span>
                                             </span>
                                         </label>
                                     </div>
                                 </div>
                                 <input type="hidden" name="gameid" value="<?php echo $game->id; ?>">
                                 <input type="hidden" name="price" value="<?php echo $game->price; ?>">
                                 <button id="reg-btn" type="button" class="cmn-btn mt-40 w-100">
                                     $<?php echo $game->price; ?>/- Buy Now
                                 </button>
                                 <div id="res" class="text-white"></div>
                             </form>
                             <div class="reg-with">
                                 <div class="or">
                                     <p>OR</p>
                                 </div>
                                 <div class="social">
                                     <ul class="footer-link d-flex justify-content-center align-items-center">
                                         <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                         <li><a href="javascript:void(0)"><i class="fab fa-google"></i></a></li>
                                         <li><a href="javascript:void(0)"><i class="fab fa-twitch"></i></a></li>
                                         <li><a href="javascript:void(0)"><i class="fab fa-apple"></i></a></li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                         <!-- <div class="account mt-30">
                            <p>Have an account? <a href="<?php //echo BASEURI.route('login'); 
                                                            ?>">Login</a></p>
                         </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const checkbox = document.getElementById('tnc');
         const registerBtn = document.getElementById('reg-btn');

         checkbox.addEventListener('change', function() {
             if (checkbox.checked) {
                 registerBtn.disabled = false;
             } else {
                 registerBtn.disabled = true;
             }
         });
     });
 </script>
 <script>
     function handleOtpSend(res) {
         if (res.success === true) {
             swalert({
                 title: 'Success',
                 msg: res.msg,
                 icon: 'success'
             });
         } else if (res.success === false) {
             swalert({
                 title: 'Failed',
                 msg: res.msg,
                 icon: 'error'
             });
         } else {
             swalert({
                 title: 'Failed',
                 msg: 'Something went wrong',
                 icon: 'error'
             });
         }
     }
 </script>
 <?php

    send_to_server_wotf("#send-otp-btn", ".email", "handleOtpSend", route('sendOtpAjax'));

    pkAjax_form("#reg-btn", "#my-form", "#res");
    ?>
 <!-- Login Reg In end -->