<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_media extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_media');
        $this->load->model('Media_model', 'oMainModel');
    }

    function index() {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            set_message($response['message']);
            redirect($this->moduleUrl);
        }
        if (isset($_GET['image_details']) && $_GET['image_details'] != "") {
            $file = $_GET['image_details'];
            $temp = new stdClass();
            $temp->file_url = media_url($file, "media");
            $temp->file_name = $file;
            $data['aImageDetails'] = $temp;
        }
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Media";
        $data['menu'] = 'media';
        $data['breadcrumb'] = array('' => "Media Files");
        load_admin_view('media/form', $data);
        hide_message();
    }

    function deleteImg() {
        $image_id = $_POST['rowId'];
        $row = get_row('media_image', array('image_id' => $image_id));
        if (isset($row->image) && !empty($row->image)) {
            $path = config_item('media_path') . 'gallery/' . $row->image;
            @unlink($path);
            $this->oMainModel->delete('media_image', array('image_id' => $image_id));
        }
    }

}

?>