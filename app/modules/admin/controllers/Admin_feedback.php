<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_feedback extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_feedback');
        $this->load->model('Feedback_model', 'oMainModel');
    }

    function index() {
        $data['aGrid'] = $this->oMainModel->feedback_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Feedback";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Feedback');
        load_admin_view('feedback/index', $data);
        hide_message();
    }

    function view($editId = 0) {       
        $aContentInfo = $this->oMainModel->feedback_details(array("t1.feedback_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Feedback Details";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_feedback' => 'Feedback',);
        load_admin_view('feedback/view', $data);
    }

}

?>