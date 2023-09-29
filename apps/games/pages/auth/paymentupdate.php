 <!-- Login Reg In start -->
 <section class="login-reg">
     <?php $req = $context->data->req; 
     $db = new Dbobjects;
     $inst = $db->showOne("select instructions as inst from payment where payment.id = '$req->pid'");
     ?>
     <div class="overlay pb-120">
         <div class="container">

             <div class="row pt-120 d-flex justify-content-center">
                 <div class="col-xxl-6 col-xl-7">
                     <div class="login-reg-main text-center">
                         <div class="form-area">
                             <div class="section-text">

                             </div>
                             <form id="my-form" action="/<?php echo home . route('payStatusAjax'); ?>" method="post">

                                 <h4>Payment ID: <?php echo $req->pid; ?></h4>
                                 <p>
                                    <?php echo $inst['inst']." <br>(In case of not paid)"??null; ?>
                                 </p>
                                 <input type="hidden" class="pmt" name="paymentid" value="<?php echo $req->pid; ?>">
                                 <button id="reg-btn" type="button" class="cmn-btn mt-40 w-100">
                                     Check Status
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
         let amount = null;
         let reference = null;
         let paynowReference = null;
         let status = null;
         if (res.success === true) {
             // console.log(res.data['status']);
             if (res.data && res.data['status']) {
                const paystatus = res.data;
                 amount = paystatus['amount'];
                 reference = paystatus['reference'];
                 paynowReference = paystatus['paynowReference'];
                 status = paystatus['status'];
             }
             let msgshow = `Amount: ${amount}<br> 
             Reference: ${reference}<br> 
             PaynowReference: ${paynowReference}<br>
             Status: ${status}<br>`;
             swalert({
                 title: 'Success',
                 msg: msgshow,
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
    send_to_server_wotf("#reg-btn", ".pmt", "handleOtpSend", route('payStatusAjax'));

    // pkAjax_form("#reg-btn", "#my-form", "#res");
    ?>
 <!-- Login Reg In end -->