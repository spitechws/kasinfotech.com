<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel', 'oMainModel');
    }

    function auth()
    {
        $apiResponse = $this->pronero->login('superadmin@pronero.in', 'Meta@190712');
        debug($apiResponse);
    }

    function index()
    {
        if (isset($_SESSION['aUser']) && $_SESSION['aUser']->user_id > 0) {
            redirect(base_url() . 'admin_dashboard/');
        }
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->login();
            if ($response['is_error'] == 0) {
                $_SESSION['aUser'] = $response['msg'];              
                redirect(base_url('admin_dashboard/'));
            } else {
                set_message($response['msg'], 'e');
                redirect(admin_url());
            }
        }
        $data['title'] = lang("Log in");
        $this->load->view('login/login', $data);
        hide_message();
    }

    function logout()
    {
        session_destroy();
        header('location:' . admin_url());
    }

    function forgot_password()
    {
        if (isset($_SESSION['aUser']) && $_SESSION['aUser']->user_id > 0) {
            redirect(base_url() . 'admin_dashboard/');
        }
        if (isset($_POST['submitform'])) {
            $apiResponse = $this->pronero->sendPassword($_POST['email']);
            set_message($apiResponse->message[0]);
            redirect(admin_url());
        }
        $data['title'] = lang('Password Reset');
        $this->load->view('login/forgot-password', $data);
        hide_message();
    }
}
