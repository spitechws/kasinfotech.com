<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admission_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('admission');
    }

    function admission_list($aWhere = array()) {
        $str_select = 't1.*,t2.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'admission as t1');
        $this->db->join(tbl_prefix() . 'course as t2','t1.course=t2.course_id','LEFT');
        $this->db->where($aWhere);
        if (isset($_GET['from_date']) && $_GET['from_date'] != '') {
            $this->db->where('DATE(t1.created_date) >=', filterValue($_GET['from_date'], 'date'));
        }
        if (isset($_GET['to_date']) && $_GET['to_date'] != '') {
            $this->db->where('DATE(t1.created_date) <=', filterValue($_GET['to_date'], 'date'));
        }
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.name', $_GET['search_key']);
        }
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.email', $_GET['search_key']);
        }
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.mobile', $_GET['search_key']);
        }
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t2.caption', $_GET['search_key']);
        }

        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("t1.admission_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

    function admission_details($aWhere = array()) {
        $str_select = 't1.*,t2.caption';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'admission as t1');
         $this->db->join(tbl_prefix() . 'course as t2','t1.course=t2.course_id','LEFT');
        $this->db->where($aWhere);
        $res = $this->db->get()->row();
        return $res;
    }

}
