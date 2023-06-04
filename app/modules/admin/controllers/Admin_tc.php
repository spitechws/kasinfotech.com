<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_tc extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_tc');
        $this->load->model('Tc_model', 'oMainModel');
    }

    function index() {
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="TC";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'TC');
        load_admin_view('tc/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message($response['msg']);
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('tc', array("tc_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "TC Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_tc' => 'TC List',""=>"Manage");
        load_admin_view('tc/form', $data);
        hide_message();
    }

    function delete($delete_id = 0) {
        $aWhere = array("tc_id" => $delete_id);
        $row = get_row('tc', $aWhere);
        if (isset($row->tc_id)) {
            $file_path = config_item('media_path') . 'tc/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'tc', $aWhere);
            set_message("TC deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}