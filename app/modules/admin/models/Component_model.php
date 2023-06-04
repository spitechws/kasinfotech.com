<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Component_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('page_component');
    }

    function add() {
        //debug($_FILES);
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('id');
        $this->form_validation->set_rules('section', "Section", "required");
        $this->form_validation->set_rules('name', "Name", "required");
        $this->form_validation->set_rules('content', "Content", "required");
        if ($this->form_validation->run() == TRUE) {
            $section = $this->input->post('section', TRUE);
            $name = $this->input->post('name', TRUE);
            $content = $this->input->post('content', TRUE);
            $aInput = array(
                "section" => $section,
                "name" => filterValue($name),
                "content" => filterValue($content)
            );
            $_POST['rowId'] = $editId;
            $lastId = parent::save($this->tbl_name, $aInput, 'id');
            $response['msg'] = $lastId;
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function get_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'page_component as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.name', $_GET['search_key']);
            $this->db->or_like('t1.section', $_GET['search_key']);
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

}
