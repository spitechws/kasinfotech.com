<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_component extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_component');
        $this->load->model('Component_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Page Component";
        $data['menu'] = 'page_component';
        $data['breadcrumb'] = array('' => 'Page Component');
        load_admin_view('page_component/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Page Component saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }

        $data['aContentInfo'] = get_row('page_component', array("id" => $editId));
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Page Component';
        $data['menu'] = 'page_component';
        $data['breadcrumb'] = array('admin_component' => 'Page Component List',""=>"Page Component");
        load_admin_view('page_component/form', $data);
    }

}

?>