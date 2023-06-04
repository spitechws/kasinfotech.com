<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('UserModel', 'oMainModel');
    }

    function auth(){
        $spitechApi=new SpiTechApi();
        $response=$spitechApi->getAuth('spitechsoft@gmail.com','ziemy0r7');
        debug($response);
    }

    function index() {
        if (isset($_SESSION['aUser']) && $_SESSION['aUser']->user_id > 0) {
            redirect(base_url() . 'admin_dashboard/');
        }
        if (isset($_POST['submitform'])) {
            $lastId = $this->oMainModel->login();
            if (is_object($lastId) && !empty($lastId)) {
                $_SESSION['aUser'] = $lastId;               
                update_config(array('language' => $language));
                redirect(base_url() . 'admin_dashboard/');
            } else if ($lastId == "Invalid") {
                set_message('Invalid login details', 'e');
                redirect(admin_url());
            } else if ($lastId == "Inactive") {
                set_message(lang('Your account is not active. Please contact administrator'), 'e');
                redirect(admin_url());
            } else {
                set_message($lastId, 'e');
                redirect(admin_url());
            }
        }
        $data['title'] = lang("Log in");
        $this->load->view('login/login', $data);
        hide_message();
    }

    function logout() {
        session_destroy();
        header('location:' . admin_url());
    }

    function forgot_password() {
        if (isset($_SESSION['aUser']) && $_SESSION['aUser']->user_id > 0) {
            redirect(base_url() . 'admin_dashboard/');
        }
        if (isset($_POST['submitform'])) {
            $lastId = $this->oMainModel->forgot_password();
            if ($lastId > 0) {
                set_message("Your new password is sent to your email id");
                redirect(admin_url());
            } else {
                set_message($lastId, 'e');
            }
        }
        $data['title'] = lang('Password Reset');
        $this->load->view('login/forgot-password', $data);
        hide_message();
    }

}
