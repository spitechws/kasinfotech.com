<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Download_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('download');
    }

    function add() {
        //debug($_FILES);
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('download_id');
        $this->form_validation->set_rules('title', 'Title', "required");
        if ($this->form_validation->run() == TRUE) {
            $title = $this->input->post('title', TRUE);
            $attachment = '';
            $row = get_row('download', array("download_id" => $editId));
            if (isset($_FILES['attachment']['name']) && $_FILES['attachment']['name'] != "") {
                $attachment = upload_media('attachment', 'pdf', 'download');
                if (isset($attachment['error'])) {
                    $response['is_error'] = 1;
                    $response['msg'] = $attachment['error'];
                    $attachment = '';
                } else {
                    $attachment = $attachment['file_name'];
                    if (!empty($row) && trim($row->attachment) != "") {
                        remove_media($row->attachment, 'download');
                    }
                }
            } else {
                $attachment = $row->attachment;
            }
            if ($response['is_error'] == '0') {
                if ($attachment != "") {
                    $aInput = array(
                        "attachment" => $attachment,
                        "title" => filterValue($title)
                    );
                    $_POST['rowId'] = $editId;
                    $lastId = parent::save($this->tbl_name, $aInput, 'download_id');
                    $response['msg'] = $lastId;
                } else {
                    $response['is_error'] = 1;
                    $response['msg'] = 'Download File is required';
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
        $this->db->from(tbl_prefix() . 'download as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.title', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->where($aWhere);
        $this->db->order_by("t1.download_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

}
