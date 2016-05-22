<?php

Class History extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('History_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {

        $this->load->view('templates/header');
        $this->load->view('history/index');
        $this->load->view('templates/footer');
    }

    public function history_paid_list() {

        $json_response = $this->History_model->paid_request();
        $decode_json = json_decode($json_response);
        $status_code = $decode_json->statusCode;

        switch ($status_code) {
            case "200":
                $data['paid_data'] = $decode_json;
                break;
            case "405":
                $data['error'] = "Invalid Login!";
                break;
            case "500":
                $data['error'] = "Internal Server Error!";
                break;
            default:
                $data['error'] = "Invalid Login!";
        }

        $this->load->view('templates/header');
        $this->load->view('history/history_paid_list', $data);
        $this->load->view('templates/footer');
    }

    public function history_paid_view($purchaseId) {

        $json_response = $this->History_model->paid_request();
        $decode_json = json_decode($json_response);
        $data['purchaseId'] = $purchaseId;
        $status_code = $decode_json->statusCode;

        switch ($status_code) {
            case "200":
                $data['paid_data'] = $decode_json;
                break;
            case "405":
                $data['error'] = "Invalid Login!";
                break;
            case "500":
                $data['error'] = "Internal Server Error!";
                break;
            default:
                $data['error'] = "Invalid Login!";
        }

        $this->load->view('templates/header');
        $this->load->view('history/history_paid_view', $data);
        $this->load->view('templates/footer');
    }

}
