<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_ssr extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_ssr');
        $this->load->model('Ssr_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="SSR List";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'SSR List');
        load_admin_view('ssr/index', $data);
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
        $aContentInfo = get_row('ssr', array("ssr_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "SSR List Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_merit' => 'SSR List',""=>"Manage");
        load_admin_view('ssr/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("ssr_id" => $delete_id);
        $row = get_row('ssr', $aWhere);
        if (isset($row->ssr_id)) {
            $file_path = config_item('media_path') . 'ssr/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'ssr', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}