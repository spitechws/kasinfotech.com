<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    function academic_calendar_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'academic_calendar as t1');
        $this->db->where($aWhere);
        $this->db->order_by("calendar_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function admission_notification_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'admission_notification as t1');
        $this->db->where($aWhere);
        $this->db->order_by("admission_notification_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function sports_dept_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'sports as t1');
        $this->db->where($aWhere);
        $this->db->order_by("sport_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function alumni_register() {
        $response = array('status' => '1', 'message' => 'Success');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('contact', 'Mobile', "required|numeric|min_length[10]");
        $this->form_validation->set_rules('email', 'Email', "required|valid_email");
        $this->form_validation->set_rules('class', 'Class', "required");
        $this->form_validation->set_rules('year_of_passing', 'year_of_passing', "required");
        $this->form_validation->set_rules('dob', 'Date of Birth', "required");
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $contact = $this->input->post('contact', TRUE);
            $email = $this->input->post('email', TRUE);
            $class = $this->input->post('class', TRUE);
            $year_of_passing = $this->input->post('year_of_passing', TRUE);
            $dob = $this->input->post('dob', TRUE);
            $current_organization = $this->input->post('current_organization', TRUE);
            $current_designation = $this->input->post('current_designation', TRUE);
            $address = $this->input->post('address', TRUE);

            $aInput = array(
                "name" => filterValue($name),
                "mobile" => filterValue($contact),
                "email" => filterValue($email),
                "class" => filterValue($class),
                "year_of_passing" => filterValue($year_of_passing),
                "dob" => filterValue($dob),
                "current_organization" => filterValue($current_organization),
                "current_designation" => filterValue($current_designation),
                "address" => filterValue($address),
                'created_date' => date('Y-m-d h:i:s')
            );
            if ($response['status'] == "1") {
                $this->db->insert(tbl_prefix() . 'alumni', $aInput);
                $response['message'] = 'Alumni registered successfully.';
            }
        } else {
            $response['status'] = -1;
            $response['message'] = validation_errors();
        }
        return $response;
    }

    function latest_notification_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'notification as t1');
        $this->db->where($aWhere);
        $this->db->order_by("notification_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function admission() {
        $response = array('status' => '1', 'message' => 'Success');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', "required|numeric|min_length[10]");
        $this->form_validation->set_rules('email', 'Email', "required|valid_email");
        $this->form_validation->set_rules('course', 'Course', "required|numeric");
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $mobile = $this->input->post('mobile', TRUE);
            $email = $this->input->post('email', TRUE);
            $course = $this->input->post('course', TRUE);

            $aInput = array(
                "name" => filterValue($name),
                "mobile" => filterValue($mobile),
                "email" => filterValue($email),
                "course" => filterValue($course),
                'created_date' => date('Y-m-d h:i:s')
            );
            if ($response['status'] == "1") {
                $this->db->insert(tbl_prefix() . 'admission', $aInput);
                $response['message'] = 'Admission request submitted.';
            }
        } else {
            $response['status'] = -1;
            $response['message'] = validation_errors();
        }
        return $response;
    }

    function merit_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'merit as t1');
        $this->db->where($aWhere);
        $this->db->order_by("merit_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function ssr_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'ssr as t1');
        $this->db->where($aWhere);
        $this->db->order_by("ssr_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function admission_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'admission_list as t1');
        $this->db->where($aWhere);
        $this->db->order_by("list_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function events_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'events as t1');
        $this->db->where($aWhere);
        $this->db->order_by("event_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function feedback() {
        $response = array('status' => '1', 'message' => 'Success');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('contact', 'Mobile', "required|numeric|min_length[10]");
        $this->form_validation->set_rules('email', 'Email', "required|valid_email");
        $this->form_validation->set_rules('message', 'Message', "required");
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $contact = $this->input->post('contact', TRUE);
            $email = $this->input->post('email', TRUE);
            $message = $this->input->post('message', TRUE);

            $aInput = array(
                "name" => filterValue($name),
                "mobile" => filterValue($contact),
                "email" => filterValue($email),
                "message" => filterValue($message),
                'created_date' => date('Y-m-d h:i:s')
            );
            if ($response['status'] == "1") {
                $this->db->insert(tbl_prefix() . 'feedback', $aInput);
                $response['message'] = 'Feedback submitted successfully.';
            }
        } else {
            $response['status'] = -1;
            $response['message'] = validation_errors();
        }
        return $response;
    }

    function links_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'links as t1');
        $this->db->where($aWhere);
        $this->db->order_by("link_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function download_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'download as t1');
        $this->db->where($aWhere);
        $this->db->order_by("download_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function news_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'news as t1');
        $this->db->where($aWhere);
        $this->db->order_by("news_id", 'desc');
        $aResponse = $this->db->get()->result();
        return $aResponse;
    }

    function gallery_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'gallery as t1');
        $this->db->where($aWhere);
        //$this->db->order_by('title','asc');	
        $this->db->order_by('gallery_id', 'desc');
        $res = $this->db->get()->result();
        foreach ($res as $key => $value) {
            $this->db->select('image_id,image,title');
            $this->db->from(tbl_prefix() . 'gallery_image');
            $this->db->where('gallery_id', $value->gallery_id);
            $this->db->order_by('image_id', 'desc');
            $res[$key]->aImage = $this->db->get()->result();
        }
        return $res;
    }

   
    function course_list(){
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix().'course as t1');
        $res=$this->db->get()->result();
        return $res;
    }

    function testimonial_list(){
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix().'testimonial as t1');
        $res=$this->db->get()->result();
        return $res;
    }    

    function service_list(){
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix().'service as t1');
        $res=$this->db->get()->result();
        return $res;
    }

    function blog_list(){
        $aWhere=array();
        if(isset($_GET['cat_id']) && $_GET['cat_id']!=""){
           $aWhere['t1.category_id']=base64_decode($_GET['cat_id']);
        }
        $str_select = 't1.*,t2.title as category,t3.name as author_name,t3.photo as author_image,t3.quote';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix().'post as t1');
        $this->db->join(tbl_prefix().'post_category as t2','t1.category_id=t2.category_id');
        $this->db->join(tbl_prefix().'user as t3','t1.created_by=t3.user_id');
        $this->db->where($aWhere);
        $res=$this->db->get()->result();
        return $res;
    }

    function blog_details($aWhere=array()){
        $str_select = 't1.*,t2.title as category,t3.name as author_name,t3.photo as author_image,t3.quote';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix().'post as t1');
        $this->db->join(tbl_prefix().'post_category as t2','t1.category_id=t2.category_id');
        $this->db->join(tbl_prefix().'user as t3','t1.created_by=t3.user_id');
        $this->db->where($aWhere);
        $res=$this->db->get()->row();
        return $res;
    }

    function popular_blog_list(){
        $str_select = 't1.*,t2.title as category,t3.name as author_name,t3.photo as author_image,t3.quote';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix().'post as t1');
        $this->db->join(tbl_prefix().'post_category as t2','t1.category_id=t2.category_id');
        $this->db->join(tbl_prefix().'user as t3','t1.created_by=t3.user_id');
        $this->db->order_by('t1.view_count','desc');
//        $this->db->limit(0,5);
        $res=$this->db->get()->result();
        return $res;
    }

    function blog_category_list(){
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix().'post_category as t1');
        $res=$this->db->get()->result();
        foreach ($res as $key=>$value) {
            $count=get_count('post',array('category_id'=>$value->category_id));
            $res[$key]->count=$count;
        }
        return $res;
    }
  

    function save_subscriber() {
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

    function save_enquiry() {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile Number', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $mobile = $this->input->post('mobile', TRUE);
            $email = $this->input->post('email', TRUE);
            $message = $this->input->post('message', TRUE);
            $aInput = array(
                "name" => filterValue($name),
                "mobile" => filterValue($mobile),
                "email" => filterValue($email),
                "message" => filterValue($message),
                'created_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert(tbl_prefix() . 'enquiry', $aInput);
            $response['msg'] = $this->db->insert_id();
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function job_apply() {
        $response = array('status' => '1', 'message' => 'Success');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', "required");
        $this->form_validation->set_rules('email', 'Email', "required");
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $mobile = $this->input->post('mobile', TRUE);
            $email = $this->input->post('email', TRUE);
            $career_id = $this->input->post('career_id', TRUE);

            $resume = '';
            if (isset($_FILES['resume']['name']) && $_FILES['resume']['name'] != "") {
                $image = upload_media('resume', 'pdf', 'job_application');
                if (isset($image['error'])) {
                    $response['is_error'] = 1;
                    $response['message'] = $image['error'];
                    $resume = '';
                } else {
                    $resume = $image['file_name'];
                }
            } else {
                $response['status'] = -1;
                $response['message'] = 'Resume is required';
            }
            $aInput = array(
                "name" => filterValue($name),
                "mobile" => filterValue($mobile),
                "email" => filterValue($email),
                "career_id" => filterValue($career_id),
                "resume" => $resume,
                'created_date' => date('Y-m-d h:i:s')
            );
            if ($response['status'] == "1") {
                $this->db->insert(tbl_prefix() . 'job_application', $aInput);
                $response['message'] = 'Job applied successfully.';
            }
        } else {
            $response['status'] = -1;
            $response['message'] = validation_errors();
        }
        return $response;
    }

    function gallery_image_list($aWhere = array()) {
        $this->db->select('t1.*,t2.title,t2.status');
        $this->db->from(tbl_prefix() . 'gallery_image as t1');
        $this->db->join(tbl_prefix() . 'gallery as t2', 't1.gallery_id=t2.gallery_id');
        $this->db->where($aWhere);
        $this->db->order_by('t1.image_id', 'desc');
        $results = $this->db->get()->result();
        return $results;
    }

}
