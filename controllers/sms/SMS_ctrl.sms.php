<?php

// use GuzzleHttp\Client;

class SMS_ctrl
{
  function send(string $pmtid, string $trn, string $link, array $mobiles = array("254706936267"))
  {
    $username = 'D-Account';
    $password = '@Demo2019';
    $trn = strtoupper($trn);
    // Create Basic Auth header by encoding username and password in Base64
    $base64Credentials = base64_encode("$username:$password");
    $client = new \GuzzleHttp\Client();
    $body = array(
      "to" => $mobiles,
      "from" => "Pay2Play-{$pmtid}",
      "text" => "Payment confirmed!! TR No. $trn.  you have only one chance to use this coupon link, so don't share with anyone: $link Good luck!"
    );
    try {
      $response = $client->request('POST', 'http://api.messaging-service.com/sms/1/text/single', [
        'body' => json_encode($body),
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
        return true;
        // myprint($response);
        // echo $response->getBody();
      } else {
        return false;
        // echo 'Error: Unexpected response status code - ' . $response->getStatusCode();
      }
    } catch (\GuzzleHttp\Exception\RequestException $e) {
      return false;
      // Handle Guzzle request exceptions
      // echo 'Error: ' . $e->getMessage();
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
