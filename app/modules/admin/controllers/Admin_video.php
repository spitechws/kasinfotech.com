<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_video extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_video');
        $this->load->model('Video_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="Video  List";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Video List');
        load_admin_view('video/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Video saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('video', array("video_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Video Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_video' => 'video',""=>"Manage");
        load_admin_view('video/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("video_id" => $delete_id);
        $row = get_row('video', $aWhere);
        if (isset($row->video_id)) {
            $file_path = config_item('media_path') . 'video/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'video', $aWhere);
            set_message("Video deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}