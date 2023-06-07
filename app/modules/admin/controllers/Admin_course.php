<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_course extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_course');
        parent::setModuleId(24);
        $this->load->model('Course_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Course");
        $data['menu'] = 'modules';
        $data['moduleId'] = $this->moduleId;
        $data['breadcrumb'] = array('' => 'Course');
        load_admin_view('services/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Course saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = $this->oMainModel->getRecord('t1.*', array("course_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Course");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Course');
        load_admin_view('course/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("course_id" => $delete_id);
        $row = get_row('course', $aWhere);
        if (isset($row->course_id)) {
            $file_path = config_item('media_path') . 'course/' . $row->image;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'course', $aWhere);
            set_message("Course deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}
