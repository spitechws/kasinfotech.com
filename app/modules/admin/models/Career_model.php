<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Career_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('career');
    }

    function add() {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('career_id');
        $this->form_validation->set_rules('job_title', lang('Job Title'), "required");
        $this->form_validation->set_rules('posts', lang('Posts'), "required");
        if ($this->form_validation->run() == TRUE) {
            $job_title = $this->input->post('job_title', TRUE);
            $job_description = $this->input->post('job_description', TRUE);
            $status = $this->input->post('status', TRUE);
            $posts = $this->input->post('posts', TRUE);
            $salary = $this->input->post('salary', TRUE);
            $location = $this->input->post('location', TRUE);
            $job_type = $this->input->post('job_type', TRUE);
            $work_mode = $this->input->post('work_mode', TRUE);
            $hr_contact = $this->input->post('hr_contact', TRUE);

            $aInput = array(
                "hr_contact"=>$hr_contact,
                "work_mode" => $work_mode,
                "job_type" => $job_type,
                "location" => $location,
                "posts" => filterValue($posts),
                "job_title" => filterValue($job_title),
                "job_description" => filterValue($job_description),
                "status" => filterValue($status),
                "salary" => filterValue($salary)
            );
            $_POST['rowId'] = $editId;
            $lastId = parent::save($this->tbl_name, $aInput, 'career_id');
            $this->response['msg'] = $lastId;
        } else {
            $this->response['is_error'] = 1;
            $this->response['msg'] = validation_errors();
        }
        return $response;
    }

    function get_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'career as t1');
        $this->db->where($aWhere);
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('job_title', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("career_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

    function application_list($aWhere = array()) {
        $str_select = 't1.*,t2.job_title';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'job_application as t1');
        $this->db->join(tbl_prefix() . 'career as t2', 't1.career_id=t2.career_id');
        $this->db->where($aWhere);
        if (isset($_GET['from_date']) && $_GET['from_date'] != '') {
            $this->db->where('DATE(t2.created_date) >=', filterValue($_GET['from_date'], 'date'));
        }
        if (isset($_GET['to_date']) && $_GET['to_date'] != '') {
            $this->db->where('DATE(t2.created_date) <=', filterValue($_GET['to_date'], 'date'));
        }
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t2.job_title', $_GET['search_key']);
        }

        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("t1.application_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

    function application_details($aWhere = array()) {
        $str_select = 't1.*,t2.job_title';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'job_application as t1');
        $this->db->join(tbl_prefix() . 'career as t2', 't1.career_id=t2.career_id');
        $this->db->where($aWhere);
        $res = $this->db->get()->row();
        return $res;
    }

}
