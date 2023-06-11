<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Project_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
        parent::setTable('project');
    }

    function add()
    {              
        $editId = $this->input->post('id');
        $this->form_validation->set_rules('name', "Project Name", "required");
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);

            $image = '';
            $row = get_row($this->tbl_name, array("id" => $editId));
            if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
                $image = upload_media('image', 'jpg|jpeg|png|gif|bmp', 'project');
                if (isset($image['error'])) {
                    $this->response['is_error'] = 1;
                    $this->response['msg'] = $image['error'];
                    $image = '';
                } else {
                    $image = $image['file_name'];
                }
                //======(Checking Image)========================
                if (!empty($row) && trim($row->image) != "") {
                    remove_media($row->image, 'project');
                }
            } else {
                if (!empty($row) && trim($row->image) != "") {
                    $image = $row->image;
                }
            }
            if ($image != '') {
                $aInput = array(
                    "image" => $image,
                    "name" => filterValue($name)
                );
                $_POST['rowId'] = $editId;
                $lastId = parent::save($this->tbl_name, $aInput, 'id');
                $this->response['msg'] = $lastId;
            } else {
                $this->response['is_error'] = 1;
                $this->response['msg'] = 'Project Image is required';
            }
        } else {
            $this->response['is_error'] = 1;
            $this->response['msg'] = validation_errors();
        }
        return $this->response;
    }

    function get_list($str_select = '*', $aWhere = array())
    {

        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'project as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('caption', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }
}
