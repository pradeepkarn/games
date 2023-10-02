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
// function send2($to = "263780995266")
// {

//     $curl = curl_init();

//     $postdata =  array(
//         "from" => "Pay2Play",
//         "to" => "$to",
//         "message" => "Testing Detail City account",
//         "refId" => "detail1244"
//     );
//     curl_setopt_array($curl, array(

//         CURLOPT_URL => 'https://clicksmsgateway.com',

//         CURLOPT_RETURNTRANSFER => true,

//         CURLOPT_ENCODING => '',

//         CURLOPT_MAXREDIRS => 10,

//         CURLOPT_TIMEOUT => 0,

//         CURLOPT_FOLLOWLOCATION => true,

//         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

//         CURLOPT_CUSTOMREQUEST => 'POST',

//         CURLOPT_POSTFIELDS => json_encode($postdata),

//         CURLOPT_HTTPHEADER => array(

//             'Accept: application/json',

//             'Content-Type: application/json',

//             'Authorization: Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiI0OTYiLCJvaWQiOjQ5NiwidWlkIjoiYjUzNDEwODYtNmMzNy00NjQ5LWJjNzYtZDFkOTdiOWZlNWQ4IiwiYXBpZCI6Mjc3LCJpYXQiOjE2OTYyMzk0OTQsImV4cCI6MjAzNjIzOTQ5NH0.tLyDYskyHR2_ZhXkCR9WEQKGidSN_lqMYy8YNqLJnPJYG7qtmecEPWmeA7BLhAZ2ijcfF-hqPjnfykoVymab1A'

//         ),

//     ));

//     $response = curl_exec($curl);

//     curl_close($curl);

//     echo $response;
// }
// send2();
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
