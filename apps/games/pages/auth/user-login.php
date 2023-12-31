    <!-- Login Reg In start -->
    <section class="login-reg">
        <div class="overlay pb-120">
            <div class="container">
                
                <div class="row pt-120 d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login-reg-main text-center">
                            <div class="form-area">
                                <div class="section-text">
                                    <h4>Welcome Back!</h4>
                                    <p>We're so excited to see you again! Log In to your Ticket City Account!</p>
                                </div>
                                <form id="my-form" action="/<?php echo home . route('userLoginAjax'); ?>">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="res"></div>
                                            <div class="single-input">
                                                <label for="email">Email Address</label>
                                                <div class="input-box">
                                                    <input type="text" id="email" name="username" placeholder="Enter Your Email">
                                                </div>
                                            </div>
                                            <div class="single-input">
                                                <label for="passInput">Password</label>
                                                <div class="input-box">
                                                    <input type="password" id="passInput" name="password" placeholder="Enter Your Password">
                                                </div>
                                            </div>
                                            <div class="remember-me">
                                                <label class="checkbox-single d-flex align-items-center">
                                                    <span class="left-area">
                                                        <span class="checkbox-area d-flex">
                                                            <input type="checkbox" checked="checked">
                                                            <span class="checkmark"></span>
                                                        </span>
                                                        <span class="item-title d-flex align-items-center">
                                                            <span>Remember Me</span>
                                                        </span>
                                                    </span>
                                                </label>
                                                <a href="javascript:void(0)">Forgot Password</a>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" id="login-btn" class="cmn-btn mt-40 w-100">Login</button>
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
                                <p>Don't have an account? <a href="<?php echo BASEURI.route('register'); ?>">Sign Up Here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php pkAjax_form("#login-btn", "#my-form", "#res"); ?>
    <!-- Login Reg In end -->