<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_job_application extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_job_application');
        $this->load->model('Career_model', 'oMainModel');
    }

    function index() {
        $data['aGrid'] = $this->oMainModel->application_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Job Application";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Job Application');
        load_admin_view('career/job-application-index', $data);
        hide_message();
    }

    function view($editId = 0) {       
        $aContentInfo = $this->oMainModel->application_details(array("t1.application_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Job Application";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_job_application' => 'Job Application',);
        load_admin_view('career/job-application-view', $data);
    }

}

?>