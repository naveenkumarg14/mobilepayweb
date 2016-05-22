<?php

Class Signin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('signin_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
    }

    public function index() {
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = "Signin";
        $data['error'] = "";

        $this->form_validation->set_rules('mobilenumber', 'Mobile Number', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() === FALSE) {
            
        } else {
            $json_response = $this->signin_model->get_signin_response();
            $decode_json = json_decode($json_response);
            $status_code = $decode_json->statusCode;

            switch ($status_code) {
                case "200":
                    $merchantToken = $decode_json->data->merchantToken;
                    $serverToken = $decode_json->data->serverToken;
                    $this->session->set_userdata('mobileNumber', $this->input->post('mobilenumber'));
                    $this->session->set_userdata('merchantToken', $merchantToken);
                    $this->session->set_userdata('serverToken', $serverToken);
                    redirect('home');
                    break;
                case "404":
                    $data['error'] = "Invalid Login!";
                    break;
                case "500":
                    $data['error'] = "Internal Server Error!";
                    break;
                default:
                    $data['error'] = "Invalid Login!";
            }
        }

        $this->load->view('login-templates/header', $data);
        $this->load->view('signin', $data);
        $this->load->view('login-templates/footer', $data);
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('signin');
    }

}
