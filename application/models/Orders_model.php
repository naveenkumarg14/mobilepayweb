<?php

class Orders_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->database();
    }

    public function unpaid_request() {
        // $this->load->helper('url');
        //API Url
        ///merchant/getUnPayedPurchaseList
        $url = 'http://123.238.109.39:8082/mobilepay/merchant/getUnPayedPurchaseList.html';
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

    public function paid_request() {
        //   $this->load->helper('url');
        //API Url
        $url = 'http://123.238.109.39:8082/mobilepay/merchant/getPayedPurchaseList.html';
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

    public function GetRows($keyword) {
        $this->db->like("ProductName", $keyword);
        $res = $this->db->get('productdetails')->result_array();
        return $res;
    }

    public function create_order() {

        $productname = $this->input->post('productname');
        $product_id = $this->input->post('product_id');
        $product_rate = $this->input->post('product_rate');
        $product_qty = $this->input->post('product_qty');
        $total_price = $this->input->post('total_price');
        
       $tax = $this->input->post('tax');
       $discounttype = $this->input->post('discounttype');
       $discountAmount = $this->input->post('discountAmount');
       $discountMinAmount= $this->input->post('discountMinAmount');

        $purchaseDetails = array();
        $count = count($product_id);
        for ($i = 0; $i < $count; $i++) {
            $name = $productname[$i];
            $id = $product_id[$i];
            $quantity = $product_qty[$i];
            $unitprice = $product_rate[$i];
            $total = $total_price[$i];

            $itemDetails = array("itemNo" => $id, "description" => $name, "quantity" => $quantity, "unitprice" => $unitprice, "amount" => $total);
            $purchaseDetails[] = $itemDetails;
        }

        $amountDetails = array("taxAmount" => $tax, "discount" => $discountAmount, "discountType" => $discounttype, "discountMiniVal" => $discountMinAmount);

        $time = time()*1000;//1463838753000
        $purchaseDateTime = 'MOB'+time();
        $jsonData = array(
            'accessToken' => $this->session->merchantToken,
            'serverToken' => $this->session->serverToken,
            'serverSyncTime' => '0',
            'limit' => '0',
            'offSet' => '0',
            'billNumber' => $purchaseDateTime,
            'purchaseDateTime' => $time,
            'customername' => $this->input->post('customername'),
            'userMobile' => $this->input->post('mobilenumber'),
            'isHomeDeliver' => $this->input->post('homedelivery'),
            'totalAmount' => $this->input->post('subTotal'),
            'purchaseDetails' => $purchaseDetails,
            'amountDetails' => $amountDetails,
        );

        //API Url
        $url = 'http://123.238.109.39:8082/mobilepay/merchant/createPurchase.html';
        //Initiate cURL.
        $ch = curl_init($url);
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