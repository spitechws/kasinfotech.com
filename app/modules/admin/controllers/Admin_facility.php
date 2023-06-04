<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_facility extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_facility');
        parent::setModuleId(15);
        $this->load->model('Facility_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Facility";
        $data['menu'] = 'modules';
        $data['moduleId'] = $this->moduleId;
        $data['breadcrumb'] = array('' => 'Facility');
        load_admin_view('facility/index', $data);
        hide_message();
    }

    function add($editId = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Facility saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('facility', array("facility_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Facility");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_facility' => 'Facility List', '' => 'Manage');
        load_admin_view('facility/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("facility_id" => $delete_id);
        $row = get_row('facility', $aWhere);
        if (isset($row->facility_id)) {
            $file_path = config_item('media_path') . 'facility/' . $row->image;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'facility', $aWhere);
            set_message("Facility deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}
