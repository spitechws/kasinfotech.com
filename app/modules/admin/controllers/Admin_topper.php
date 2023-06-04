<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_topper extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_topper');
        parent::setModuleId(22);
        $this->load->model('Topper_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Topper");
        $data['menu'] = 'modules';
        $data['moduleId'] = $this->moduleId;
        $data['breadcrumb'] = array('' => 'Topper');
        load_admin_view('topper/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Topper saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }

        $aContentInfo = get_row('topper', array("topper_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Topper");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_topper' => 'Topper', '' => 'Manage');
        load_admin_view('topper/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("topper_id" => $delete_id);
        $row = get_row('topper', $aWhere);
        if (isset($row->topper_id)) {
            $file_path = config_item('media_path') . 'toppers/' . $row->thumbnail;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'topper', $aWhere);
            set_message("Topper deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}
