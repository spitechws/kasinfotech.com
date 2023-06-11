<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_client extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_client');
        $this->load->model('Client_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Client';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Client');
        load_admin_view('client/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Client saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('client', array("id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Client';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Client');
        load_admin_view('client/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("id" => $delete_id);
        $row = get_row('client', $aWhere);
        if (isset($row->id)) {
            $file_path = config_item('media_path') . 'client/' . $row->image;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'client', $aWhere);
            set_message("Client deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}