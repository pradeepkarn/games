<?php

use PHPMailer\PHPMailer\PHPMailer;

require_once(__DIR__ . "/config.php");
require_once(__DIR__ . "/settings.php");
import("/includes/class-autoload.inc.php");
import("functions.php");
import("settings.php");
define("direct_access", 1);
############################################################################
exit;
// function testmail()
//     {
//         $recipient = "test@gmail.com";
//         $mail = php_mailer(new PHPMailer());
//         $mail->setFrom(email, SITE_NAME . "Temporary password");
//         $mail->isHTML(true);
//         $mail->Subject = 'Secret Link';
//         $mail->Body = "Payment confirmed!! TR No. 'trnvar'.  you have only one chance to use this coupon link, so don't share with anyone: 'linkvar' Good luck!";
//         $mail->addAddress("$recipient", "$recipient");
//         if ($mail->send()) {
//             msg_set("A temporary password has been sent to $recipient, please login and change to strong password.");
//             return true;
//         } else {
//             msg_set("Email sending error");
//             return false;
//         }
//     }
//     testmail();

exit;
// exit;

function updateProgressBar($current, $total)
{
    $percent = ($current / $total) * 100;
    $barWidth = 50;
    $numBars = (int) ($percent / (100 / $barWidth));
    $progressBar = "[" . str_repeat("=", $numBars) . str_repeat(" ", $barWidth - $numBars) . "] $percent%";
    echo "\r$progressBar";
    // flush();
}


echo "\nTask complete!\n";
