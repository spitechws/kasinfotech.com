<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tc_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('tc');
    }

    function add() {
        //debug($_FILES);
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('tc_id');
        $this->form_validation->set_rules('admission_no', 'Admission Number', "required|numeric|check_unique[tc,admission_no,tc_id,".$editId."]");
        $this->form_validation->set_rules('tc_no', 'TC Number', "required|numeric|check_unique[tc,tc_no,tc_id,".$editId."]");
        if ($this->form_validation->run() == TRUE) {
            $admission_no = $this->input->post('admission_no', TRUE);
            $tc_no = $this->input->post('tc_no', TRUE);
            $attachment = '';
            $row = get_row('tc', array("tc_id" => $editId));
            if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
                $attachment = upload_media('attachment', 'pdf', 'tc');
                if (isset($attachment['error'])) {
                    $response['is_error'] = 1;
                    $response['msg'] = $attachment['error'];
                    $attachment = '';
                } else {
                    $attachment = $attachment['file_name'];
                    if (!empty($row) && trim($row->attachment) != "") {
                        remove_media($row->attachment, 'tc');
                    }
                }
            } else {
                $attachment = $row->attachment;
            }
            if ($response['is_error'] == '0') {
                if ($attachment != "") {
                    $aInput = array(
                        "attachment" => $attachment,
                        "admission_no" => $admission_no,
                        "tc_no" => $tc_no
                    );
                    $_POST['rowId'] = $editId;
                    parent::save($this->tbl_name, $aInput, 'tc_id');
                    $response['msg'] = "TC saved successfully";
                } else {
                    $response['is_error'] = 1;
                    $response['msg'] = 'TC File is required';
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
        $this->db->from(tbl_prefix() . 'tc as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->where('t1.admission_no', $_GET['search_key']);
            $this->db->or_where('t1.tc_no', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->where($aWhere);
        $this->db->order_by("t1.tc_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

}
