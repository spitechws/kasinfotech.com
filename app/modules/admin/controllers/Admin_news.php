<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_news extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_news');
        $this->load->model('News_model', 'oMainModel');
    }

    function index() {       
        $data['aGrid'] = $this->oMainModel->get_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] ="News List";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'News List');
        load_admin_view('news/index', $data);
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
        $aContentInfo = get_row('news', array("news_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "News List Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_news' => 'News',""=>"Manage");
        load_admin_view('news/form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array("news_id" => $delete_id);
        $row = get_row('news', $aWhere);
        if (isset($row->news_id)) {
            $file_path = config_item('media_path') . 'news/' . $row->attachment;
            @unlink($file_path);
            $this->db->delete(tbl_prefix() . 'news', $aWhere);
            set_message("News deleted succesffully");
            redirect($this->moduleUrl);
        }
    }

}