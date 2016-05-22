<?php

class History_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function paid_request() {
        //   $this->load->helper('url');
        //API Url
        $url = WEBSERVICEURL . 'getHistoryList.html';
        //Initiate cURL.
        $ch = curl_init($url);
        //The JSON data.
        $jsonData = array(
            'accessToken' => $this->session->merchantToken,
            'serverToken' => $this->session->serverToken,
            'serverSyncTime' => '0',
            'limit' => '0',
            'offSet' => '0'
        );
        //Encode the array into JSON.
        $jsonDataEncoded = json_encode($jsonData);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        //Tell cURL that we want to send a POST request.
        curl_setopt($ch, CURLOPT_POST, true);
        //Attach our encoded JSON string to the POST fields.
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
        //Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        //Execute the request
        $result = curl_exec($ch);
        return $result;
    }

}
