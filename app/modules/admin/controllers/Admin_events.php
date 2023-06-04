<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_events extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_events');
        $this->load->model('Events_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Events List";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Events');
        load_admin_view('events/index', $data);
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
        $aContentInfo = get_row('events', array("event_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Events List Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_events' => 'Events',""=>"Manage");
        load_admin_view('events/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("event_id" => $delete_id);
        $row = get_row('events', $aWhere);
        if (isset($row->event_id)) {
            $file_path = config_item('media_path') . 'events/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'events', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}