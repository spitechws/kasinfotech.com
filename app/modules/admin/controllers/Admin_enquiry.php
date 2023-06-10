<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_enquiry extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_enquiry');
        $this->load->model('Enquiry_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*,t2.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Enquiry';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Enquiry');
        load_admin_view('enquiry/index', $data);
        hide_message();
    }

    function add($editId = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Enquiry saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['aContentInfo'] = $this->oMainModel->getRecord('*', array("id" => $editId));
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Enquiry';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_enquiry' => 'Enquiry', '' => 'Manage Enquiry');
        load_admin_view('enquiry/form', $data);
    }

    function delete($delete_id) {
        if ($delete_id > 0) {
            $this->oMainModel->delete('enquiry', array("id" => $delete_id));
            set_message('Enquiry deleted successfully');
        }
        redirect($this->moduleUrl);
    }

}