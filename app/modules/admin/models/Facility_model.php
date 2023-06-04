<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Facility_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('facility');
    }

    function add() {
        //debug($_FILES);
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('facility_id');
        $this->form_validation->set_rules('title', "Title", "required");
        $this->form_validation->set_rules('description', "Description", "required");
        if ($this->form_validation->run() == TRUE) {
            $title = $this->input->post('title', TRUE);
            $description = $this->input->post('description', TRUE);
            $image = '';
            $row = parent::getRecord('*', array("facility_id" => $editId));
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $image = upload_media('image', 'jpg|jpeg|png|gif|bmp', 'facility');
                if (isset($image['error'])) {
                    $response['is_error'] = 1;
                    $response['msg'] = $image['error'];
                    $image = '';
                } else {
                    $image = $image['file_name'];
                }
                //======(Checking Image)========================
                if (!empty($row) && trim($row->image) != "") {
                    remove_media($row->image, 'facility');
                }
            } else {
                if (!empty($row) && trim($row->image) != "") {
                    $image = $row->image;
                }
            }

            if ($response['is_error'] == 0) {
                if ($image != '') {
                    $aInput = array(
                        "image" => $image,
                        "title" => filterValue($title),
                        "description" => filterValue($description)
                    );
                    $_POST['rowId'] = $editId;
                    $lastId = parent::save($this->tbl_name, $aInput, 'facility_id');
                    $response['msg'] = $lastId;
                } else {
                    $response['is_error'] = 1;
                    $response['msg'] = 'Facility Photo is required';
                }
            }
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function get_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'facility as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.title', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("t1.facility_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

}
