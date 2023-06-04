<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('tbl_prefix')) {

    function tbl_prefix()
    {
        return get_instance()->config->item('tbl_prefix');
    }
}

function db_tables()
{
    $ci = &get_instance();
    $tables = $ci->db->list_tables();
    $data=[];
    foreach ($tables as $table) {
        $data[$table]=$table;
    }
    return $data;
}

function system_log($action)
{
    $ci = &get_instance();
    $aData = array(
        "user_id" => $_SESSION['aUser']->user_id,
        "action" => $action,
        "datetime" => date('Y-m-d H:i:s')
    );
    $ci->db->insert(tbl_prefix() . 'log', $aData);
}

function get_count($tbl_name, $aWhere = array())
{
    $ci = &get_instance();
    $ci->db->select('count(*) as count');
    $ci->db->from(tbl_prefix() . $tbl_name);
    $ci->db->where($aWhere);
    $res = $ci->db->get()->row();
    if (isset($res->count)) {
        return $res->count;
    } else {
        return 0;
    }
    return $res;
}

function get_row($tbl_name, $aWhere = array())
{

    $ci = &get_instance();
    $ci->db->select('*');
    $ci->db->from(tbl_prefix() . $tbl_name);
    $ci->db->where($aWhere);
    $res = $ci->db->get()->row();
    return $res;
}

function get_rows($tbl_name, $aWhere = array(), $str_select = '*')
{

    $ci = &get_instance();
    $ci->db->select($str_select);
    $ci->db->from(tbl_prefix() . $tbl_name);
    $ci->db->where($aWhere);
    $res = $ci->db->get()->result();
    return $res;
}

function get_sum($tbl_name, $column_name, $aWhere = array())
{
    $ci = &get_instance();
    $ci->db->select("sum($column_name) as total");
    $ci->db->from(tbl_prefix() . $tbl_name);
    $ci->db->where($aWhere);
    $res = $ci->db->get()->row();
    if (isset($res->total)) {
        return $res->total;
    } else {
        return 0;
    }
}
