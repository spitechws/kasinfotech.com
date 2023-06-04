<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_academic_calendar extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_academic_calendar');
        $this->load->model('Academic_calendar_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Academic Calendar";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Academic Calendar');
        load_admin_view('academic_calendar/index', $data);
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
        $aContentInfo = get_row('academic_calendar', array("calendar_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Academic Calendar Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_academic_calendar' => 'Academic Calendar List',""=>"Manage");
        load_admin_view('academic_calendar/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("calendar_id" => $delete_id);
        $row = get_row('academic_calendar', $aWhere);
        if (isset($row->calendar_id)) {
            $file_path = config_item('media_path') . 'academic_calendar/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'academic_calendar', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}