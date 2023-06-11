<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_project extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_project');
        $this->load->model('Project_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Project';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Project');
        load_admin_view('project/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Project saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('project', array("id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = 'Project';
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Project');
        load_admin_view('project/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("id" => $delete_id);
        $row = get_row('project', $aWhere);
        if (isset($row->id)) {
            $file_path = config_item('media_path') . 'project/' . $row->image;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'banner', $aWhere);
            set_message("Project deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}