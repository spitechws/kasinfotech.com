<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Home_ajax extends MY_Controller {

    function __construct() {
        parent::__construct();
        parent::setModuleUrl('home_ajax');
        $this->load->model('HomeModel', 'oMainModel');
        $this->load->model('admin/Common_model');
    }
    
    function save_subscriber() {
        $response = $this->oMainModel->save_subscriber();
        if ($response['is_error'] == 0) {
            $response['msg'] = 'Thank You for contacting us. We will assist you shortly';
        }       
        echo json_encode($response);
    }     
   
}