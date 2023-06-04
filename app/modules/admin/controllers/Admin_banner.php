<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_banner extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_banner');
        $this->load->model('Banner_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Banner");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Banner');
        load_admin_view('banner/index', $data);
        hide_message();
    }

    function add($editId = 0) {

        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Banner saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $aContentInfo = get_row('banner', array("banner_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Banner");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Banner');
        load_admin_view('banner/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("banner_id" => $delete_id);
        $row = get_row('banner', $aWhere);
        if (isset($row->banner_id)) {
            $file_path = config_item('media_path') . 'banner/' . $row->image;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'banner', $aWhere);
            set_message("Banner deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}