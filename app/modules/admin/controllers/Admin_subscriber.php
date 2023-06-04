<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_subscriber extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_subscriber');
        parent::setModuleId(24);
        $this->load->model('Subscriber_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Subscriber List";
        $data['menu'] = 'modules';
        $data['moduleId'] = $this->moduleId;
        $data['breadcrumb'] = array('' => 'Subscriber List');
        load_admin_view('subscriber/index', $data);
        hide_message();
    }

    function delete($delete_id = 0) {
        $aWhere = array("subscriber_id" => $delete_id);
        $this->db->delete(tbl_prefix() . 'subscriber', $aWhere);
        set_message("Subscriber deleted succesffully");
        redirect($this->moduleUrl);
    }

}
