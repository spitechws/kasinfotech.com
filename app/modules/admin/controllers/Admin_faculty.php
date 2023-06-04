<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_faculty extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_faculty');
        parent::setModuleId(21);
        $this->load->model('Faculty_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Faculty");
        $data['menu'] = 'modules';
        $data['moduleId'] = $this->moduleId;
        $data['breadcrumb'] = array('' => 'Faculty');
        load_admin_view('faculty/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Faculty saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = $this->oMainModel->getRecord('t1.*', array("faculty_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Faculty");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_faculty' => 'Faculty', '' => 'Manage');
        load_admin_view('faculty/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("faculty_id" => $delete_id);
        $row = get_row('faculty', $aWhere);
        if (isset($row->faculty_id)) {
            $file_path = config_item('media_path') . 'faculty/' . $row->thumbnail;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'faculty', $aWhere);
            set_message("Faculty deleted succesffully");
            redirect($this->moduleUrl);
        }
    }
}