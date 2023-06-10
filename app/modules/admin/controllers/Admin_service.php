<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_service extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_service');
        parent::setModuleId(24);
        $this->load->model('Service_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Service';
        $data['menu'] = 'modules';
        $data['moduleId'] = $this->moduleId;
        $data['breadcrumb'] = array('' => 'Service');
        load_admin_view('service/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Service saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }       
        $data['aContentInfo'] = $this->oMainModel->find_by_pk($editId);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Service';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Service');
        load_admin_view('service/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("id" => $delete_id);
        $row = get_row('service', $aWhere);
        if (isset($row->id)) {
            $file_path = config_item('media_path') . 'service/' . $row->image;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'service', $aWhere);
            set_message("Service deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}
