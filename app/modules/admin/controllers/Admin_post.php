<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_post extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_post');
        $this->load->model('Post_model', 'oMainModel');
    }

    function index() {
        $data['aGrid'] = $this->oMainModel->post_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Post List";
        $data['menu'] = 'post';
        $data['breadcrumb'] = array('' => 'Post List');
        load_admin_view('post/index', $data);
        hide_message();
    }

    function add($editId = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('CMS saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['aContentInfo'] = get_row('post', array("post_id" => $editId));
        $data['aCategory'] = get_rows('post_category');
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Post Manage";
        $data['menu'] = 'post';
        $data['breadcrumb'] = array('admin_post' => 'Post List', "Post Manage");
        load_admin_view('post/form', $data);
        hide_message();
    }

    function delete($delete_id = 0) {
        $this->db->delete(tbl_prefix() . 'post', array('post_id' => $delete_id));
        set_message('Post deleted successfully');
        redirect($this->moduleUrl);
    }

    function category() {
        $data['aCategory'] = $this->oMainModel->category_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Post Category";
        $data['menu'] = 'post';
        $data['breadcrumb'] = array('admin_post' => 'Post List', '' => 'Post Category');
        load_admin_view('post/category-index', $data);
        hide_message();
    }

    function category_add($editId = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->category_add();
            if ($response['is_error'] == 0) {
                set_message('Post Category saved successfully');
                redirect($this->moduleUrl . 'category/');
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['aContentInfo'] = get_row('post_category', array("category_id" => $editId));
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Post Category Manage";
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_post/category' => 'Post Category List', "" => "Manage");
        load_admin_view('post/category-form', $data);
        hide_message();
    }

    function category_delete($delete_id = 0) {
        $this->db->delete(tbl_prefix() . 'post_category', array('category_id' => $delete_id));
        $this->db->delete(tbl_prefix() . 'post', array('category_id' => $delete_id));
        set_message('Post category deleted successfully');
        redirect($this->moduleUrl . 'category/');
    }

}