 <!-- Login Reg In start -->
 <section class="login-reg">
     <div class="overlay pb-120">
         <div class="container">

             <div class="row pt-120 d-flex justify-content-center">
                 <div class="col-xxl-6 col-xl-7">
                     <div class="login-reg-main text-center">
                         <div class="form-area">
                             <div class="section-text">
                                 <h4>Create Account</h4>
                                 <p>Sign Up to get exciting games!</p>
                             </div>
                             <form id="my-form" action="/<?php echo home . route('registerAjax'); ?>" method="post">
                                 <div class="row">
                                     <div class="col-12">
                                        
                                         <div class="single-input">
                                             <label for="email">Email Address</label>
                                             <div class="input-box">
                                                 <input type="text" id="email" name="email" class="email" placeholder="Enter Your Email">
                                             </div>
                                             <button type="button" id="send-otp-btn" class="btn btn-sm btn-primary my-2">Send me OTP</button>
                                             <div class="input-box">
                                                 <input type="text" id="otp" name="otp" class="otp" placeholder="Enter the OTP you just received on above email">
                                             </div>
                                         </div>
                                         <div class="single-input">
                                             <label for="name">User Name</label>
                                             <div class="input-box">
                                                 <input type="text" name="username" id="name" placeholder="Enter User Name">
                                             </div>
                                         </div>
                                         <div class="single-input">
                                             <label for="passInput">Password</label>
                                             <div class="input-box">
                                                 <input type="password" name="password" id="passInput" placeholder="Enter Your Password">
                                             </div>
                                         </div>
                                         <div class="single-input">
                                             <label for="cnfpassInput">Confirm Password</label>
                                             <div class="input-box">
                                                 <input type="password" name="confirm_password" id="cnfpassInput" placeholder="Enter Your Password">
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
                                 <button id="reg-btn" type="button" class="cmn-btn mt-40 w-100">Sign Up</button>
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
                         <div class="account mt-30">
                            <p>Have an account? <a href="<?php echo BASEURI.route('login'); ?>">Login</a></p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <script>
       document.addEventListener('DOMContentLoaded', function () {
         const checkbox = document.getElementById('tnc');
         const registerBtn = document.getElementById('reg-btn');

         checkbox.addEventListener('change', function () {
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