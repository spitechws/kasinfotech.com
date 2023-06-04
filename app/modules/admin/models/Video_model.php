<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Video_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('video');
    }

    function add() {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('video_id');
        $this->form_validation->set_rules('title', 'Title', "required");
        $this->form_validation->set_rules('link', 'Link/Url', "required");
        if ($this->form_validation->run() == TRUE) {
            $title = $this->input->post('title', TRUE);
            $link = $this->input->post('link', TRUE);
            if ($response['is_error'] == '0') {
                $aInput = array(
                        "link" => $link,
                        "title" => filterValue($title)
                    );
                    $_POST['rowId'] = $editId;
                    $lastId = parent::save($this->tbl_name, $aInput, 'video_id');
                    $response['msg'] = $lastId;
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
        $this->db->from(tbl_prefix() . 'video as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.title', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->where($aWhere);
        $this->db->order_by("t1.video_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

}
