<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_links extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_links');
        $this->load->model('Links_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Links List";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Links List');
        load_admin_view('links/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Link saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('links', array("link_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Link Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_links' => 'Links',""=>"Manage");
        load_admin_view('links/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("link_id" => $delete_id);
        $row = get_row('links', $aWhere);
        if (isset($row->link_id)) {
            $file_path = config_item('media_path') . 'links/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'links', $aWhere);
            set_message("Link deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}