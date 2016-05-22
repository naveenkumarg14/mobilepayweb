<?php

class Signup_model extends CI_Model {

    public function get_signup_response() {
        $this->load->helper('url');

        //API Url
        $url = 'http://123.238.109.39:8082/mobilepay/merchant/signup.html';
        //Initiate cURL.
        $ch = curl_init($url);

        //The JSON data.
        $jsonData = array(
            'merchantName' => $this->input->post('merchantName'),
            'merchantAddress' => $this->input->post('merchantAddress'),
            'area' => $this->input->post('area'),
            'pinCode' => $this->input->post('pinCode'),
            'mobileNumber' => $this->input->post('mobileNumber'),
            'landLineNumber' => $this->input->post('landLineNumber'),
            'password' => $this->input->post('password'),
            'category' => $this->input->post('category'),
            'file' => $this->input->post('file')
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
        curl_close($ch);
        return $result;
    }

}
