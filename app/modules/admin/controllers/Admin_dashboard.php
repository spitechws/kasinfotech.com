<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_dashboard extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_dashboard');
        parent::setModuleId(20);
        $this->load->model('Dashboard_model', 'oMainModel');
        $this->load->model('UserModel');
    }

    function index()
    {     

        $data['aCounter'] = $this->oMainModel->dashboard_counters();
        $data['title'] = "Dashboard";
        $data['menu'] = 'dashboard';
        $data['breadcrumb'] = array('' => 'Dashboard');
        load_admin_view('dashboard/index', $data);
        hide_message();
    }

    //--------OTHER METHODS-------------
    function profile($editId = 0)
    {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->profile();
            if ($response['is_error'] == 0) {
                set_message('Profile saved successfully');
                redirect($this->moduleUrl . 'profile/');
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $editId = $_SESSION['aUser']->user_id;
        $data['aContentInfo'] = $this->oMainModel->getRecord('*', array("user_id" => $editId));
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Profile";
        $data['menu'] = 'dashboard';
        $data['breadcrumb'] = array('' => 'Profile');
        load_admin_view('dashboard/profile', $data);
        hide_message();
    }

    function company_details($editId = 0)
    {
        //$response=$this->oMainModel->company_details();
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->company_details();
            if ($response['is_error'] == 0) {
                set_message('Company details saved successfully');
                redirect($this->moduleUrl . 'company_details/');
            } else {
                set_message($response['msg'], 'e');
            }
        }

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Company Details";
        $data['menu'] = 'company_details';
        $data['breadcrumb'] = array('' => 'Company deails');
        load_admin_view('dashboard/company-details', $data);
        hide_message();
    }

    function change_password($editId = 0)
    {
        if (isset($_POST['submitform'])) {
            $response = $this->UserModel->change_password();
            if ($response['is_error'] == 0) {
                set_message('Password Changed successfully');
                redirect(base_url('admin/logout'));
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Password";
        $data['menu'] = 'dashboard';
        $data['breadcrumb'] = array('' => 'Change Password');
        load_admin_view('dashboard/change-password', $data);
        hide_message();
    }

    function app_settings()
    {
        if (isset($_POST['submitform'])) {
            $reesponse = $this->oMainModel->save_settings();
            if ($reesponse['is_error'] == 0) {
                set_message('App settings saved successfully');
            } else {
                set_message($reesponse['msg'], 'e');
            }
            redirect($this->moduleUrl . 'app_settings');
        }
        $data['aContentInfo'] = (object) get_config();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "App Settings";
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('' => 'App Settings');
        load_admin_view('dashboard/app-settings', $data);
        hide_message();
    }
}
