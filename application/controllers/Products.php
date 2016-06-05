<?php

Class Products extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Products_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('excel');
    }

    public function index() {

        $this->load->view('templates/header');
        $this->load->view('products/index');
        $this->load->view('templates/footer');
    }

    public function products_add() {

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'xlsx';
        $config['max_size'] = '1000';
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());
        } else {
            $data = $this->upload->data();
            $file = $data['full_path'];
            //read file from path
            $objPHPExcel = PHPExcel_IOFactory::load($file);
            //get only the Cell Collection
            $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
            //extract to a PHP readable array format
            foreach ($cell_collection as $cell) {
                $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
                $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
                $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
                //header will/should be in row 1 only. of course this can be modified to suit your need.
                if ($row == 1) {
                    $header[$row][$column] = $data_value;
                } else {
                    $arr_data[$row][$column] = $data_value;
                }
            }
            //send the data in an array format
            $data['header'] = $header;
            $data['values'] = $arr_data;
            $add_products = $this->Products_model->add_products($data['values']);
        }

        $this->load->view('templates/header');
        $this->load->view('products/products_add');
        $this->load->view('templates/footer');
    }

    public function products_list() {

        $data['items_list'] = $this->Products_model->get_all_products();

        $this->load->view('templates/header');
        $this->load->view('products/products_list', $data);
        $this->load->view('templates/footer');
    }

//    public function product_edit($id) {
//
//        $data['item_details'] = $this->Products_model->get_product_by_id($id);
//
//        $this->load->view('templates/header');
//        $this->load->view('products/product_edit', $data);
//        $this->load->view('templates/footer');
//    }

}