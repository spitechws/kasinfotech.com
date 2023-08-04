<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Product_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
        parent::setTable('product');
    }

    function add()
    {
        $editId = $this->input->post('id');
        $this->form_validation->set_rules('name', "Product Name", "required");
        $this->form_validation->set_rules('slug', "Product Slug", "required");
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $slug = $this->input->post('slug', TRUE);
            $demo_url = $this->input->post('demo_url', TRUE);
            $details = $this->input->post('details', TRUE);

            $row = get_row($this->tbl_name, array("id" => $editId));

            //--- image1
            $image1 = '';
            if (isset($_FILES['image1']['name']) && $_FILES['image1']['name'] != "") {
                $image1 = upload_media('image1', 'jpg|jpeg|png|gif|bmp', 'product');
                if (isset($image1['error'])) {
                    $this->response['is_error'] = 1;
                    $this->response['msg'] = $image1['error'];
                    $image1 = '';
                } else {
                    $image1 = $image1['file_name'];
                }
                if (!empty($row) && trim($row->image1) != "") {
                    remove_media($row->image1, 'product');
                }
            } else {
                if (!empty($row) && trim($row->image1) != "") {
                    $image1 = $row->image1;
                }
            }
            //--- image2
            $image2 = '';
            if (isset($_FILES['image2']['name']) && $_FILES['image2']['name'] != "") {
                $image2 = upload_media('image2', 'jpg|jpeg|png|gif|bmp', 'product');
                if (isset($image2['error'])) {
                    $this->response['is_error'] = 1;
                    $this->response['msg'] = $image2['error'];
                    $image2 = '';
                } else {
                    $image2 = $image2['file_name'];
                }
                if (!empty($row) && trim($row->image2) != "") {
                    remove_media($row->image2, 'product');
                }
            } else {
                if (!empty($row) && trim($row->image2) != "") {
                    $image2 = $row->image2;
                }
            }

            //--- image3
            $image3 = '';
            if (isset($_FILES['image3']['name']) && $_FILES['image3']['name'] != "") {
                $image3 = upload_media('image3', 'jpg|jpeg|png|gif|bmp', 'product');
                if (isset($image3['error'])) {
                    $this->response['is_error'] = 1;
                    $this->response['msg'] = $image3['error'];
                    $image3 = '';
                } else {
                    $image3 = $image3['file_name'];
                }
                if (!empty($row) && trim($row->image3) != "") {
                    remove_media($row->image3, 'product');
                }
            } else {
                if (!empty($row) && trim($row->image3) != "") {
                    $image3 = $row->image3;
                }
            }

            //--- image4
            $image4 = '';
            if (isset($_FILES['image4']['name']) && $_FILES['image4']['name'] != "") {
                $image4 = upload_media('image4', 'jpg|jpeg|png|gif|bmp', 'product');
                if (isset($image4['error'])) {
                    $this->response['is_error'] = 1;
                    $this->response['msg'] = $image4['error'];
                    $image4 = '';
                } else {
                    $image4 = $image4['file_name'];
                }
                if (!empty($row) && trim($row->image4) != "") {
                    remove_media($row->image4, 'product');
                }
            } else {
                if (!empty($row) && trim($row->image4) != "") {
                    $image4 = $row->image4;
                }
            }

            $aInput = array(
                "image1" => $image1,
                "image2" => $image2,
                "image3" => $image3,
                "image4" => $image4,
                "demo_url" => filterValue($demo_url),
                "slug" => filterValue($slug),
                "name" => filterValue($name),
                "details" => filterValue($details)
            );
            $_POST['rowId'] = $editId;
            $lastId = parent::save($this->tbl_name, $aInput, 'id');
            $this->response['msg'] = $lastId;
        } else {
            $this->response['is_error'] = 1;
            $this->response['msg'] = validation_errors();
        }
        return $this->response;
    }

    function get_list($str_select = '*', $aWhere = array())
    {

        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'product as t1');
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
