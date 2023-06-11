<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function testimonial_list()
    {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'testimonial as t1');
        $res = $this->db->get()->result();
        return $res;
    }

    function service_list()
    {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'service as t1');
        $res = $this->db->get()->result();
        return $res;
    }

    function blog_list()
    {
        $aWhere = array();
        if (isset($_GET['cat_id']) && $_GET['cat_id'] != "") {
            $aWhere['t1.category_id'] = base64_decode($_GET['cat_id']);
        }
        $str_select = 't1.*,t2.title as category,t3.name as author_name,t3.photo as author_image,t3.quote';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'post as t1');
        $this->db->join(tbl_prefix() . 'post_category as t2', 't1.category_id=t2.category_id');
        $this->db->join(tbl_prefix() . 'user as t3', 't1.created_by=t3.user_id');
        $this->db->where($aWhere);
        $res = $this->db->get()->result();
        return $res;
    }

    function blog_details($aWhere = array())
    {
        $str_select = 't1.*,t2.title as category,t3.name as author_name,t3.photo as author_image,t3.quote';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'post as t1');
        $this->db->join(tbl_prefix() . 'post_category as t2', 't1.category_id=t2.category_id');
        $this->db->join(tbl_prefix() . 'user as t3', 't1.created_by=t3.user_id');
        $this->db->where($aWhere);
        $res = $this->db->get()->row();
        return $res;
    }

    function popular_blog_list()
    {
        $str_select = 't1.*,t2.title as category,t3.name as author_name,t3.photo as author_image,t3.quote';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'post as t1');
        $this->db->join(tbl_prefix() . 'post_category as t2', 't1.category_id=t2.category_id');
        $this->db->join(tbl_prefix() . 'user as t3', 't1.created_by=t3.user_id');
        $this->db->order_by('t1.view_count', 'desc');
        //        $this->db->limit(0,5);
        $res = $this->db->get()->result();
        return $res;
    }

    function blog_category_list()
    {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'post_category as t1');
        $res = $this->db->get()->result();
        foreach ($res as $key => $value) {
            $count = get_count('post', array('category_id' => $value->category_id));
            $res[$key]->count = $count;
        }
        return $res;
    }


    function save_subscriber()
    {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email', TRUE);
            $aInput = array(
                "email" => filterValue($email),
                'created_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert(tbl_prefix() . 'subscriber', $aInput);
            $response['msg'] = $this->db->insert_id();
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function save_enquiry()
    {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $mobile = $this->input->post('mobile', TRUE);
            $email = $this->input->post('email', TRUE);
            $service_id = $this->input->post('service_id', TRUE);
            $aInput = array(
                "name" => filterValue($name),
                "mobile" => filterValue($mobile),
                "email" => filterValue($email),
                "service_id" => filterValue($service_id),
                'created_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert(tbl_prefix() . 'enquiry', $aInput);
            $response['msg'] = "Enqyiry submitted successfully";
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }
    
}
