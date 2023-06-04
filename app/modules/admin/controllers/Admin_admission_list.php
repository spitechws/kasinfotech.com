<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_admission_list extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_admission_list');
        $this->load->model('Admission_list_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Admission List";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Admission List');
        load_admin_view('admission_list/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Attachment saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('admission_list', array("list_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Admission List Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_admission_list' => 'Admission List',""=>"Manage");
        load_admin_view('admission_list/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("list_id" => $delete_id);
        $row = get_row('admission_list', $aWhere);
        if (isset($row->list_id)) {
            $file_path = config_item('media_path') . 'admission_list/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'admission_list', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}