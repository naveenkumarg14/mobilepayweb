<?php

class Products_model extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function add_products($excel_val) {
        foreach ($excel_val as $value) {
            $data = array(
                'ProductName' => $value['B'],
                'Rate' => $value['C']
            );
            $this->db->insert('ProductDetails', $data);
        }
        return;
    }

    public function get_all_products() {
        $query = $this->db->get('ProductDetails');
        return $query->result_array();
    }

    public function get_product_by_id($id) {
        $query = $this->db->get_where('ProductDetails', array('ProductId' => $id));
        return $query->row_array();
    }

}
