<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_product extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_product');
        $this->load->model('Product_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Product';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Product');
        load_admin_view('product/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Product saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('product', array("id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Product';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Product');
        load_admin_view('product/form', $data);
    }   

    function delete($delete_id = 0) {
        $aWhere = array("id" => $delete_id);
        $row = get_row('product', $aWhere);
        if (isset($row->id)) {       
            @unlink(config_item('media_path') . 'product/' . $row->image1);
            @unlink(config_item('media_path') . 'product/' . $row->image2);
            @unlink(config_item('media_path') . 'product/' . $row->image3);
            @unlink(config_item('media_path') . 'product/' . $row->image4);
            $this->db->delete(tbl_prefix() . 'product', $aWhere);
            set_message("Product deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}