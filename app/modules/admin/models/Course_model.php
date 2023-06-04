<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Course_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('course');
    }

    function add() {
        //debug($_FILES);
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('course_id');
        $this->form_validation->set_rules('caption', lang('Course Title'), "required");
        $this->form_validation->set_rules('description', lang('Course Description'), "required");
        $this->form_validation->set_rules('short_description', lang('Short Description'), "required|max_length[200]");
        if ($this->form_validation->run() == TRUE) {
            $caption = $this->input->post('caption', TRUE);
            $short_description = $this->input->post('short_description', TRUE);
            $description = $this->input->post('description', TRUE);

            $image = '';
            $row = parent::getRecord('*', array("course_id" => $editId));
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $image = upload_media('image', 'jpg|jpeg|png|gif|bmp', 'course');
                if (isset($image['error'])) {
                    $response['is_error'] = 1;
                    $response['msg'] = $image['error'];
                    $image = '';
                } else {
                    $image = $image['file_name'];
                }
                //======(Checking Image)========================
                if (!empty($row) && trim($row->image) != "") {
                    remove_media($row->image, 'course');
                }
            } else {
                if (!empty($row) && trim($row->image) != "") {
                    $image = $row->image;
                }
            }

            if ($response['is_error'] == 0) {
                $aInput = array(
                        "caption" => filterValue($caption),
                        "short_description" => filterValue($short_description),
                        "description" => filterValue($description),
                        "image" => $image
                    );
                    $_POST['rowId'] = $editId;
                    $lastId = parent::save($this->tbl_name, $aInput, 'course_id');
                    $response['msg'] = $lastId;
            }
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function get_list($str_select = '*', $aWhere = array()) {

        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'course as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('caption', $_GET['search_key']);
        }
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('level', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("sequence_no", 'asc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }
}