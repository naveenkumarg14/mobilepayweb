<?php

Class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('signup_model');
        $this->load->helper('url_helper');
    }

    public function index() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Signup";
        $data['signup_error'] = "";

        $this->form_validation->set_rules('merchantName', 'Shop Name', 'required');
        $this->form_validation->set_rules('merchantAddress', 'Shop Address', 'required');
        $this->form_validation->set_rules('area', 'Shop Area', 'required');
        $this->form_validation->set_rules('pinCode', 'Postal Code', 'required');
        $this->form_validation->set_rules('mobileNumber', 'Shop Mobile Number', 'required');
        $this->form_validation->set_rules('landLineNumber', 'Shop LandLine Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('category', 'Shop Type', 'required');
        $this->form_validation->set_rules('deliveryOption', 'Delivery Option', 'required');
        //$this->form_validation->set_rules('file', 'Shop Logo', 'required');

        if ($this->form_validation->run() === FALSE) {
            
        } else {
            $json_response = $this->signup_model->get_signup_response();
            $decode_json = json_decode($json_response);
            $status_code = $decode_json->statusCode;

            switch ($status_code) {
                case "200":
                    redirect('signin');
                    break;
                case "403":
                    $InvalidLogin = $decode_json->data;
                    $data['signup_error'] = $InvalidLogin;
                    break;
                case "500":
                    $InternalServerError = $decode_json->data;
                    $data['signup_error'] = $InternalServerError;
                    break;
                default:
                    $data['signup_error'] = "Invalid Login!";
            }
        }

        $this->load->view('login-templates/header', $data);
        $this->load->view('signup', $data);
        $this->load->view('login-templates/footer', $data);
    }

}