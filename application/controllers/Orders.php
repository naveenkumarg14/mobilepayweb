<?php

Class Orders extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Orders_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {

        $this->load->view('templates/header');
        $this->load->view('orders/index');
        $this->load->view('templates/footer');
    }

    public function orders_unpaid_list() {

        $json_response = $this->Orders_model->unpaid_request();
        $decode_json = json_decode($json_response);
        $status_code = $decode_json->statusCode;

        switch ($status_code) {
            case "200":
                $data['unpaid_data'] = $decode_json;
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
        $this->load->view('orders/orders_unpaid_list', $data);
        $this->load->view('templates/footer');
    }

    public function orders_unpaid_view($purchaseId) {

        $json_response = $this->Orders_model->unpaid_request();
        $decode_json = json_decode($json_response);
        $data['purchaseId'] = $purchaseId;
        $status_code = $decode_json->statusCode;

        switch ($status_code) {
            case "200":
                $data['unpaid_data'] = $decode_json;
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
        $this->load->view('orders/orders_unpaid_view', $data);
        $this->load->view('templates/footer');
    }

    public function orders_paid_list() {

        $json_response = $this->Orders_model->paid_request();
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
        $this->load->view('orders/orders_paid_list', $data);
        $this->load->view('templates/footer');
    }

    public function orders_paid_view($purchaseId) {

        $json_response = $this->Orders_model->paid_request();
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
        $this->load->view('orders/orders_paid_view', $data);
        $this->load->view('templates/footer');
    }

    public function order_add() {

        $this->load->view('templates/header');
        $this->load->view('orders/order_add');
        $this->load->view('templates/footer');
    }

    public function ajax() {
        $keyword = $this->input->post('type');
        $data = $this->Orders_model->GetRows($keyword);
        echo json_encode($data);
    }

    public function create() {

        $json_response = $this->Orders_model->create_order();
        $decode_json = json_decode($json_response);
        $status_code = $decode_json->statusCode;

        switch ($status_code) {
            case "200":
                $data['sucess'] = $decode_json->data;
                break;
            case "405":
                $data['error'] = "Invalid Login!";
                break;
            case "406":
                $data['error'] = "Invalid Mobile!";
                break;
            case "500":
                $data['error'] = "Internal Server Error!";
                break;
            default:
                $data['error'] = "Invalid Login!";
        }


        $this->load->view('templates/header');
        $this->load->view('orders/order_add');
        $this->load->view('templates/footer');
    }

    public function decline() {
        $json_response = $this->Orders_model->decline_request();
        redirect('orders/orders_unpaid_list');
    }

    public function update_order_status() {
        $json_response = $this->Orders_model->order_status();
        redirect('orders/orders_paid_list');
    }

}
