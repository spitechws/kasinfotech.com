<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_alumni extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_alumni');
        $this->load->model('Alumni_model', 'oMainModel');
    }

    function index() {
        $data['aGrid'] = $this->oMainModel->alumni_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Registerd Alumni";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Registerd Alumni');
        load_admin_view('alumni/index', $data);
        hide_message();
    }

    function view($editId = 0) {       
        $aContentInfo = $this->oMainModel->alumni_details(array("t1.alumni_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Registerd Alumni Details";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_alumni' => 'Registerd Alumni Details',);
        load_admin_view('alumni/view', $data);
    }

}

?>