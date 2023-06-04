<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Media_model extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    function add() {
        if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
            $image = upload_media('image', 'jpg|jpeg|png|gif|bmp', 'ckediter');
            if (isset($image['error'])) {
                $response['message'] = $image['error'];
                $image = '';
            } else {
                $image = $image['file_name'];
                $this->response['status'] = 1;
                $this->response['message'] = "File uploaded successfully";
            }
        } else {
            $this->response['message'] = "File is requried";
        }
        return $response;
    }

}
