<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content_meta_model extends MY_Model
{

    public $id;
    public $content_id;
    public $content1;
    public $content2;
    public $content3;
    public $content4;
    public $content5;
    public $content6;
    public $content7;
    public $content8;
    public $content9;
    public $content10;
    public $content11;
    public $content12;

    function __construct()
    {
        parent::__construct();
        parent::setTable('content_meta');
    }

    public function findByPk($id)
    {
        return $this->db->select('*')
            ->from(tbl_prefix() . $this->tbl_name)
            ->where('id', $id)
            ->row();
    }

    public function find($aWhere)
    {
        return $this->db->select('*')
            ->from(tbl_prefix() . $this->tbl_name)
            ->where($aWhere)
            ->row();
    }

    public function contentDetails($aWhere, $select = '')
    {
        if (empty($select)) {
            $select = 't1.*,t2.content1,t2,content2';
        }
        return $this->db->select($select)
            ->from(tbl_prefix() . $this->tbl_name . ' as t1')
            ->leftJoin(tbl_prefix() . 'content_meta as t2', 't1.id=t2.content_id')
            ->where($aWhere)
            ->row();
    }
}
