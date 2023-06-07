<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Content_model extends MY_Model
{
    public $id;
    public $title;
    public $module_id;
    public $slug;
    public $featured_image;
    public $long_content;
    public $short_content;
    public $category_id;
    public $created_date;
    public $edited_date;
    public $created_by;
    public $edited_by;

    function __construct()
    {
        parent::__construct();
        parent::setTable('content');
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
}
