<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    public  $pronero;
    public  $moduleUrl = '', $moduleId = '0';
    function __construct()
    {
        parent::__construct();
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $this->pronero = Pronero::getInstance();
        $apiResult = $this->pronero->projectInfo();
        if (empty($apiResult->data->id)) {
            echo '<h1>' . $apiResult->message[0] . '<h1/>';exit;
        }
    }

    function setModuleUrl($arg)
    {
        $this->moduleUrl = base_url() . $arg . '/';
    }

    function getModuleUrl()
    {
        return $this->moduleUrl;
    }

    function setModuleId($arg)
    {
        $this->moduleId = $arg;
    }

    function getModuleId()
    {
        return $this->moduleId;
    }


    function setTable($tbl_name)
    {
        $this->oMainModel->setTable($tbl_name);
    }

    function media_download($folder = "")
    {
        if (isset($_GET['file_name']) && $_GET['file_name'] != "") {
            $file_name = $_GET['file_name'];
            $this->load->helper('download');
            $path = config_item('media_path');
            if ($folder != "") {
                $path .= $folder . '/' . $file_name;
            } else {
                $path .= $file_name;
            }
            force_download($path, NULL);
        }
    }

    function checkTheme()
    {
        $theme_folder = config_item('theme_path') . config_item('site_theme');
        if (!file_exists($theme_folder)) {
            debug("Theme Folder not exit, please check or change the site theme from admin > System Settings");
        }
    }

    protected function curlCall($end_point, $param=[], $method = 'GET')
    {
        $curl = curl_init();
        $baseUrl = "https://pronero.in/api/";
        curl_setopt_array($curl, array(
            CURLOPT_URL => $baseUrl . $end_point,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode($param),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        if ($response === false) {
            debug(curl_error($curl));
        }
        curl_close($curl);
        return json_decode($response);
    }
}

