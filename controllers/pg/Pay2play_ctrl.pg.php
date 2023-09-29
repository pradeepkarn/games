<?php

use Paynow\Payments\Paynow;

class Pay2play_ctrl
{
    public $paynow;
    public function __construct()
    {
        $this->paynow = new Paynow(
            INTEGRATION_ID,
            INTEGRATION_KEY,
            BASEURI,
            // The return url can be set at later stages. You might want to do this if you want to pass data to the return url (like the reference of the transaction)
            BASEURI
        );
    }
    function check_status()
    {
        if (isset($_POST['paymentid']) && is_numeric($_POST['paymentid'])) {
            $db = new Dbobjects;
            $db->tableName = 'payment';
            $pmt = $db->pk(intval($_POST['paymentid']));
            if (!$pmt) {
                $data['msg'] = "Payment not found";
                $data['success'] = false;
                $data['data'] = null;
                echo json_encode($data);
                exit;
            }
            $pmt = obj($pmt);
            if ($pmt->user_id != USER['id']) {
                $data['msg'] = "You are not authorized to check this payment status";
                $data['success'] = false;
                $data['data'] = null;
                echo json_encode($data);
                exit;
            }
            $pollUrl = $pmt->pollurl;
            $paymentid = $pmt->id;
        } else {
            $data['msg'] = "Invalid payment id";
            $data['success'] = false;
            $data['data'] = null;
            echo json_encode($data);
            exit;
        }
        if ($pollUrl=='') {
            $data['msg'] = "Payment not done";
            $data['success'] = false;
            $data['data'] = null;
            echo json_encode($data);
            exit;
        }
        $status = $this->paynow->pollTransaction($pollUrl);
        if ($status->paid()) {
            $db = new Dbobjects;
            $db->tableName = 'payment';
            $db->pk($paymentid);
            $parr = null;
            $parr['reference'] = $status->reference();
            $parr['paynowReference'] = $status->paynowReference();
            $parr['amount'] = $status->amount();
            $parr['status'] = $status->status();
            $pd = array('status' => $parr);
            $json = json_encode($pd);
            $db->insertData['paynowjson'] = $json;
            $db->insertData['status'] = 'paid';
            $db->update();
            $data['msg'] = "Status found";
            $data['success'] = true;
            $data['data'] = $parr;
            echo json_encode($data);
            exit;
        } else if($status->status()){
            $db = new Dbobjects;
            $db->tableName = 'payment';
            $db->pk($paymentid);
            $parr = null;
            $parr['reference'] = $status->reference()??'NA';
            $parr['paynowReference'] = $status->paynowReference()??'NA';
            $parr['amount'] = $status->amount()??0;
            $parr['status'] = $status->status()??'NA';
            $pd = array('status' => $parr);
            $json = json_encode($pd);
            $db->insertData['paynowjson'] = $json;
            $db->insertData['status'] = $status->status()??'NA';
            $db->update();
            $data['msg'] = "Status found";
            $data['success'] = false;
            $data['data'] = $parr;
            echo json_encode($data);
            exit;
        }
    }
    function save_json_file($response)
    {
        $filename = "payref/" . uniqid(time() . '_json') . '.json';
        $content = json_encode($response);
        $file = fopen($filename, 'w');
        if ($file) {
            // Write the content to the file
            fwrite($file, $content);
            // Close the file
            fclose($file);
        }
    }
}
