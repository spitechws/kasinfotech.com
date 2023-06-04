<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_cms extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_cms');
        $this->load->model('Cms_model', 'oMainModel');
    }

    function index() {        
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "CMS";
        $data['menu'] = 'cms';
        $data['breadcrumb'] = array('' => 'CMS');
        load_admin_view('cms/index', $data);
        hide_message();
    }

    function add($editId = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('CMS saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['aContentInfo'] = get_row('cms', array("cms_id" => $editId));
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "CMS Manage";
        $data['menu'] = 'cms';
        $data['breadcrumb'] = array('admin_cms' => 'CMS List',""=>"CMS Manage");
        load_admin_view('cms/form', $data);
    }

    function delete($delete_id = 0) {
        $this->db->delete(tbl_prefix() . 'cms', array('cms_id' => $delete_id));
        set_message('CMS deleted successfully');
        redirect($this->moduleUrl);
    }

}

?>