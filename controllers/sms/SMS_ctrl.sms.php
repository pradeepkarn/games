<?php

use GuzzleHttp\Client;

class SMS_ctrl
{
    function send()
    {
        $username = 'D-Account';
        $password = '@Demo2019';
        // Create Basic Auth header by encoding username and password in Base64
        $base64Credentials = base64_encode("$username:$password");
        $client = new Client();
        $msg = "Payment confirmed!! TR No. xxxxxx.  you have only one chance to use this coupon link, so don’t share with anyone:(link) Good luck!";
        try {
            $response = $client->request('POST', 'http://api.messaging-service.com/sms/1/text/single', [
                'body' => '{"to":["254706936267"],"from":"Pay2Play","text":"Payment confirmed!! TR No. xxxxxx.  you have only one chance to use this coupon link, so don’t share with anyone:(link) Good luck!"}',
                'headers' => [
                    'accept' => 'application/json',
                    'content-type' => 'application/json',
                    'Authorization' => 'Basic ' . $base64Credentials // Basic Auth header
                ],
            ]);

            // Check if the response status code is 200
            if ($response->getStatusCode() == 200) {
                // Save the response body to a JSON file
                $this->save_json_file($response->getBody());
                // myprint($response);
                echo $response->getBody();
            } else {
                echo 'Error: Unexpected response status code - ' . $response->getStatusCode();
            }
        } catch (\GuzzleHttp\Exception\RequestException $e) {
            // Handle Guzzle request exceptions
            echo 'Error: ' . $e->getMessage();
        }
    }

    function save_json_file($body)
    {
        $filename = "payref/sms/" . uniqid(time() . '_json') . '.json';
        $file = fopen($filename, 'w');
        if ($file) {
            // Write the response body to the file
            fwrite($file, $body);
            // Close the file
            fclose($file);
        }
    }
}

// Usage
// $smsCtrl = new SMS_ctrl();
// $smsCtrl->send();
?>
