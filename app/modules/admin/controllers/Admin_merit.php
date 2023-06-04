<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_merit extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_merit');
        $this->load->model('Merit_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Merit List";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Merit List');
        load_admin_view('merit/index', $data);
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
        $aContentInfo = get_row('merit', array("merit_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Merit List Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_merit' => 'Merit List',""=>"Manage");
        load_admin_view('merit/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("merit_id" => $delete_id);
        $row = get_row('merit', $aWhere);
        if (isset($row->merit_id)) {
            $file_path = config_item('media_path') . 'merit/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'merit', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}