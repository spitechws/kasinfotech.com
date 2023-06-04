<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_download extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_download');
        $this->load->model('Download_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Download";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Download');
        load_admin_view('download/index', $data);
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
        $aContentInfo = get_row('download', array("download_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Download Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_download' => 'Download List',""=>"Manage");
        load_admin_view('download/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("download_id" => $delete_id);
        $row = get_row('download', $aWhere);
        if (isset($row->download_id)) {
            $file_path = config_item('media_path') . 'download/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'download', $aWhere);
            set_message("Attachment deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}