<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Subscriber_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('subscriber');
    }

    function get_list($aWhere = array()) {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'subscriber as t1');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.name', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("t1.subscriber_id", 'asc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

}
