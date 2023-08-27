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
        $apiResponse = $this->spitechApi->getAuth('superadmin@pronero.in', 'Meta@190712');
        debug($apiResponse);
    }

    function index()
    {
        if (isset($_SESSION['aUser']) && $_SESSION['aUser']->user_id > 0) {
            redirect(base_url() . 'admin_dashboard/');
        }
        if (isset($_POST['submitform'])) {
            $lastId = $this->oMainModel->login();
            if (is_object($lastId) && !empty($lastId)) {
                $_SESSION['aUser'] = $lastId;
                update_config(array('language' => $language));
                redirect(base_url() . 'admin_dashboard/');
            } else {
                set_message($lastId, 'e');
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
            $apiResponse = $this->spitechApi->sendPassword($_POST['email']);
            set_message($apiResponse->message[0]);
            redirect(admin_url());
        }
        $data['title'] = lang('Password Reset');
        $this->load->view('login/forgot-password', $data);
        hide_message();
    }
}
