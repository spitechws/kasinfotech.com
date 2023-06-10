<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Service_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
        parent::setTable('service');
    }

    function add()
    {

        $editId = $this->input->post('id');
        $this->form_validation->set_rules('title', 'Service Name', "required");
        if ($this->form_validation->run() == TRUE) {
            $title = $this->input->post('title', TRUE);
            $demo_url = $this->input->post('demo_url', TRUE);
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);
            $description = $this->input->post('description', TRUE);
            $slug = $this->input->post('slug', TRUE);

            $image = '';
            $row = parent::getRecord('*', array("id" => $editId));
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $image = upload_media('image', '*', 'service');
                if (isset($image['error'])) {
                    $response['is_error'] = 1;
                    $response['msg'] = $image['error'];
                    $image = '';
                } else {
                    $image = $image['file_name'];
                }
                //======(Checking Image)========================
                if (!empty($row) && trim($row->image) != "") {
                    remove_media($row->image, 'service');
                }
            } else {
                if (!empty($row) && trim($row->image) != "") {
                    $image = $row->image;
                }
            }

            if ($response['is_error'] == 0) {
                $aInput = array(
                    "title" => filterValue($title),
                    "slug" => filterValue($slug),
                    "demo_url" => filterValue($demo_url),
                    "username" => filterValue($username),
                    "password" => filterValue($password),
                    "description" => filterValue($description),
                    "image" => $image
                );
                $_POST['rowId'] = $editId;
                $lastId = parent::save($this->tbl_name, $aInput, 'id');
                $response['msg'] = $lastId;
            }
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function get_list($str_select = '*', $aWhere = array())
    {

        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . $this->tbl_name . ' as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('title', $_GET['search_key']);
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

    function find_by_pk($id)
    {
        return $this->db->select('*')
            ->from(tbl_prefix() . $this->tbl_name . ' as t1')
            ->where('id', $id)
            ->get()->row();
    }
}
