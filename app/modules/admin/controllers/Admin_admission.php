<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_admission extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_admission');
        $this->load->model('Admission_model', 'oMainModel');
    }

    function index() {
        $data['aGrid'] = $this->oMainModel->admission_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Admission Enquiry";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Admission Enquiry');
        load_admin_view('admission/index', $data);
        hide_message();
    }

    function view($editId = 0) {       
        $aContentInfo = $this->oMainModel->admission_details(array("t1.admission_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Admission Enquiry Details";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_admission' => 'Admission Enquiry Details',);
        load_admin_view('admission/view', $data);
    }

}

?>