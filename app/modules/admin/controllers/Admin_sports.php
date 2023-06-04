<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_sports extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_sports');
        $this->load->model('Sports_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Sports";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Sports');
        load_admin_view('sports/index', $data);
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
        $aContentInfo = get_row('sports', array("sport_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Sports Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_sports' => 'Sports List',""=>"Manage");
        load_admin_view('sports/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("sport_id" => $delete_id);
        $row = get_row('sports', $aWhere);
        if (isset($row->sport_id)) {
            $file_path = config_item('media_path') . 'sports/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'sports', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}