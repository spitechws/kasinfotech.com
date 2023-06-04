<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_notification extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_notification');
        $this->load->model('Notification_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Notification";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Notification');
        load_admin_view('notification/index', $data);
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
        $aContentInfo = get_row('notification', array("notification_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Notification Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_notification' => 'Notification List',""=>"Manage");
        load_admin_view('notification/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("notification_id" => $delete_id);
        $row = get_row('notification', $aWhere);
        if (isset($row->notification_id)) {
            $file_path = config_item('media_path') . 'notification/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'notification', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}