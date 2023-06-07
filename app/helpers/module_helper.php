<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');


function get_message_template($template_id) {
    $row = get_row('message_templates', array('template_id' => $template_id));
    return $row;
}

/*
 * @param : $section values are ('header','body','sidebar','footer')
 */

function get_page_component($section, $name) {
    $row = get_row('page_component', array('section' => $section, 'name' => $name));
    if (isset($row->content)) {
        return $row->content;
    }
}

function get_site_themes() {
    $aTheme = array();
    $scan = scandir(config_item('site_root') . 'theme/');
    $aExclude = array('.', '..', 'index.html');
    foreach ($scan as $file) {
        if (!in_array($file, $aExclude)) {
            $aTheme[$file] = $file;
        }
    }
    return $aTheme;
}

function media_scan() {
    $aData = array();
    $path = config_item('media_path');
    $scan = scandir($path);
    $aExclude = array('.', '..', '.feed');
    foreach ($scan as $file) {
        if (!in_array($file, $aExclude)) {
            $dir = $path . DIRECTORY_SEPARATOR . $file;
            if (is_dir($dir)) {
                $temp = new stdClass();
                $temp->folder_name = $file;
                $files2 = scandir($dir);
                $file_count = count($files2) - 3;
                $temp->file_count = $file_count;
                $temp->dir_path = $dir;
                $aData[] = $temp;
            }
        }
    }
    return $aData;
}

function clean_media() {
    $aFolders = media_folders_to_clean();
    foreach ($aFolders as $folder) {
        $folder_path = config_item('media_path') . $folder;
        $scan = scandir($folder_path);
        $aExclude = array('.', '..', 'index.html', '.feed');
        foreach ($scan as $file) {
            if (!in_array($file, $aExclude)) {
                $file_path = $folder_path . DIRECTORY_SEPARATOR . $file;
                @unlink($file_path);
            }
        }
    }
}

function db_scan() {
    $aData = array();
    $aDbTables = factory_reset_tables();
    foreach ($aDbTables as $table) {
        $temp = new stdClass();
        $temp->table_name = $table;
        $temp->row_count = get_count($table);
        $aData[] = $temp;
    }
    return $aData;
}

function is_superadmin() {
    return $_SESSION['aUser']->role_id == "0";
}

function is_admin() {
    return $_SESSION['aUser']->role_id == "1";
}

function load_admin_view($view_name, $data) {
    $ci = & get_instance();
    $data['view_name'] = $view_name . ".php";
    $ci->load->view('../views/layouts/index', $data);
}

function load_home_view($view_name, $data) {
    $ci = & get_instance();
    $theme = config_item('site_theme');
    if ($theme == "") {
        $theme = "theme1";
    }
    $view_name = '../../theme/' . $theme . "/views/" . $view_name . ".php";
    $ci->load->view($view_name, $data);
}

function update_config($aData) {
    $ci = & get_instance();
    //debug($aData);
    foreach ($aData as $key => $value) {
        if (trim($value) != '' && $value != 'null') {
            $ci->db->update(tbl_prefix() . 'config', array('value' => $value), array('name' => $key));
        }
    }
}

function suspended() {
    $ci = & get_instance();
    $data['title'] = "Account Suspended";
    $data['menu'] = "home";
    $ci->load->view('suspended', $data);
}

function page_not_found() {
    $ci = & get_instance();
    $data['title'] = "Page Not Found";
    $data['menu'] = "home";
    load_home_view('404', $data);
}

function underconstruction() {
    $ci = & get_instance();
    $data['title'] = "Under Construction";
    $ci->load->view('under_construction', $data);
}

function load_language($language = '') {
    $ci = & get_instance();
    if ($language == '') {
        $language = config_item('language');
    } else {
        $ci->session->set_userdata('active_language', $language);
        $language = $ci->session->userdata('active_language');
    }
    $ci->lang->load($language, $language);  // file,folder
}

function get_menu() {
    $ci = & get_instance();
    $ci->db->select('*');
    $ci->db->from(tbl_prefix() . 'module_group');
    $ci->db->order_by('group_id', 'asc');
    $qry = $ci->db->get();
    $results = $qry->result();
    foreach ($results as $key => $value) {
        $ci->db->select('t1.*');
        $ci->db->from(tbl_prefix() . 'modules as t1');
        if (isset($_SESSION['aUser']->role_id) && $_SESSION['aUser']->role_id > 1) {
            $ci->db->join(tbl_prefix() . 'user_permission as t2', 't1.module_id=t2.module_id', 'LEFT');
            $ci->db->where('t2.user_id', $_SESSION['aUser']->user_id);
            $ci->db->where('t2.view_permission', '1');
        }
        $ci->db->where('t1.group_id', $value->group_id);
        $ci->db->where('t1.status', '1');
        $ci->db->where('t1.is_module', '1');
        $ci->db->order_by('t1.sequence_no', 'asc');
        $qry = $ci->db->get();
        $results[$key]->aModules = $qry->result();
    }
    return $results;
}

/*
 * How to use
 * 1)  check_permission(7, 'view', 1);
 *  or
 * 2)if(check_permission(7, 'view')){
 * do something
 * }
 */

function check_permission($module_id = 0, $permission, $is_redirect = 0) {
    $isAllowed = 0;
    if (isset($_SESSION["aUser"]) && !empty($_SESSION["aUser"])) {
        $isAllowed = 1;
    } else if ($_SESSION["aUser"]->user_id > 1) {
        $row = get_row('user_permission', array('module_id' => $module_id, 'user_id' => $_SESSION["aUser"]->user_id));
        $isAllowed = $row[$permission . '_permission'];
    }
    if ($is_redirect && $isAllowed == 0) {
        if (isset($_SESSION['aUser'])) {
            redirect(base_url() . 'login/logout/');
        } else {
            redirect(base_url());
        }
    } else {
        return $isAllowed;
    }
}

function access_denied() {
    redirect(base_url());
}

function get_reviews() {
    $ci = & get_instance();
    $str_select = 't1.*,t2.name';
    $ci->db->select($str_select);
    $ci->db->from(tbl_prefix() . 'review as t1');
    $ci->db->join(tbl_prefix() . 'customer as t2', 't1.customer_id=t2.customer_id');
    $ci->db->where('t1.status', '1');
    $res = $ci->db->get()->result();
    return $res;
}

function get_review_total() {
    $temp = new stdClass();
    $temp->total = get_count('review', array("status" => "1"));
    $temp->total_rating = get_sum('review', 'rating', array("status" => "1"));
    $temp->avg_rating = @number_format($temp->total_rating / $temp->total, 1);
    return $temp;
}




function config_date($date) {      
    $response = '';
    if ($date != '' && $date != '0000-00-00') {
        $response = date(config_item('date_format'), strtotime($date));
    }
    return $response;
}

function config_datetime($date) {     
    $response = '';
    if ($date != '' && $date != '0000-00-00') {
        $response = date(config_item('datetime_format'), strtotime($date));
    }
    return $response;
}

function config_money($amount) {
    $response = '0';
    if ($amount != '' && $amount > 0) {
        $place = 2;
        if (config_item('decimal_places') > 0) {
            $place = config_item('decimal_places');
        }
        $response = @number_format($amount, $place, config_item('decimal_seperator'), config_item('thousand_seperator')) or die('Decimal Places, Decimal seperator, Thousand seperator is not configured in app settings.');
    }
    $currency = config_item('currency');
    if ($currency == 'Rs.') {
        $currency = '<i class="fa fa-rupee black"></i>';
    }
    if (config_item('currency_placement') == 'before') {
        $response = $currency . ' ' . $response;
    } else if (config_item('currency_placement') == 'after') {
        $response = $response . ' ' . $currency;
    }
    return $response;
}
