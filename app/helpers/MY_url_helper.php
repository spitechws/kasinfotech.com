<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('assets')) {

    function assets()
    {
        echo config_item('assets');
    }
}

if (!function_exists('media_path')) {

    function media_path()
    {
        echo config_item('media_path');
    }
}

if (!function_exists('media_url')) {

    function media_url($file_name = "", $folder_name = "")
    {
        $url = config_item('media_url');
        if ($folder_name != "") {
            $url .= $folder_name . '/';
        }
        if ($file_name != "") {
            $url .= $file_name;
        }
        return $url;
    }
}
if (!function_exists('admin_url')) {

    function admin_url()
    {
        return base_url() . 'admin/';
    }
}
if (!function_exists('site_assets')) {

    function site_assets($file_url = '')
    {
        $url = 'theme/' . config_item('site_theme') . '/assets/';
        if (!empty($file_url)) {
            $url .= $file_url;
        }
        return base_url($url);
    }
}

if (!function_exists('theme_url')) {

    function theme_url()
    {
        return base_url('theme/' . config_item('site_theme') . '/');
    }
}

function module_path($module_name, $module_directory = 'views')
{
    $path = config_item('root_path') . 'app/modules/' . $module_name . '/';
    if ($module_directory != '') {
        $path = config_item('root_path') . 'app/modules/' . $module_name . '/' . $module_directory . '/';
    }
    return $path;
}

function media_download_url($file_name, $folder_name = "")
{
    if ($folder_name != "") {
        $url = base_url() . 'admin/media_download/' . $folder_name . '/?file_name=' . $file_name;
    } else {
        $url = base_url() . 'admin/media_download/?file_name=' . $file_name;
    }
    return $url;
}

function get_current_url()
{
    $url = current_url() . '?' . $_SERVER['QUERY_STRING'];
    return $url;
}
