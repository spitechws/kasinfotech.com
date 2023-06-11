<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Post_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('post');
    }

    function add() {               
        $editId = $this->input->post('id');
        $this->form_validation->set_rules('slug', 'Post Slug', 'required');
        $this->form_validation->set_rules('title', 'Post Title', 'required');
        $this->form_validation->set_rules('category_id', 'Category', 'required');
        if ($this->form_validation->run() == TRUE) {
            $slug = $this->input->post('slug', TRUE);
            $title = $this->input->post('title', TRUE);
            $content = $this->input->post('content', TRUE);
            $short_description = $this->input->post('short_description', TRUE);
            $category_id = $this->input->post('category_id', TRUE);
            $tag = $this->input->post('tag', TRUE);
            $featured_image = '';
            $row = get_row('post', array("id" => $editId));
            if (isset($_FILES['featured_image']['name']) && $_FILES['featured_image']['name'] != "") {
                $featured_image = upload_media('featured_image', 'jpg|jpeg|png', 'post');
                if (isset($featured_image['error'])) {
                    $this->response['is_error'] = 1;
                    $this->response['msg'] = $featured_image['error'];
                    $featured_image = '';
                } else {
                    $featured_image = $featured_image['file_name'];
                }
                //======(Checking Image)========================
                if (!empty($row) && trim($row->featured_image) != "") {
                    remove_media($row->featured_image, 'post');
                }
            } else {
                if (!empty($row) && trim($row->featured_image) != "") {
                    $featured_image = $row->featured_image;
                }
            }

            if ($this->response['is_error'] == 0) {
                $aInput = array(
                    "featured_image" => $featured_image,
                    "slug" => filterValue($slug),
                    "title" => filterValue(ucwords($title)),
                    "content" => filterValue($content),
                    "short_description" => filterValue($short_description),
                    "tag" => filterValue($tag),
                    "category_id" => filterValue($category_id)
                );
                $_POST['rowId'] = $editId;
                $lastId = parent::save('post', $aInput, 'id');
                $this->response['msg'] = $lastId;
            }
        } else {
            $this->response['is_error'] = 1;
            $this->response['msg'] = validation_errors();
        }
        return $this->response;
    }

    function post_list($aWhere = array()) {
        $str_select = 't1.*,t2.name as author_name';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'post as t1');
        $this->db->join(tbl_prefix() . 'user as t2', 't1.created_by=t2.user_id');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.title', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("t1.id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();          
        $res = parent::customPagination($res);
        return $res;
    }

    function category_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'post_category as t1');
        $this->db->where($aWhere);
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.title', $_GET['search_key']);
        }        
        $this->db->order_by("t1.category_id", 'desc');
        $res = $this->db->get()->result();
        return $res;
    }

    function category_add() {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('category_id');
        $this->form_validation->set_rules('title', 'Post Title', 'required');
        if ($this->form_validation->run() == TRUE) {
            $title = $this->input->post('title', TRUE);
            $aInput = array(
                "title" => filterValue($title)
            );
            $_POST['rowId'] = $editId;
            $lastId = parent::save('post_category', $aInput, 'category_id');
            $this->response['msg'] = $lastId;
        } else {
            $this->response['is_error'] = 1;
            $this->response['msg'] = validation_errors();
        }
        return $this->response;
    }

}
