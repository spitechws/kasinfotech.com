<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_event_gallery extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('admin_event_gallery');
        $this->load->model('Event_gallery_model', 'oMainModel');
    }

    function index() {
        $str_select = 't1.*';
        $data['aGrid'] = $this->oMainModel->get_list($str_select);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Event Gallery");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('' => 'Event Gallery');
        load_admin_view('event_gallery/index', $data);
        hide_message();
    }

    function add($editId = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Gallery saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $this->oMainModel->setTable('event_gallery');
        $aContentInfo = $this->oMainModel->getRecord('t1.*', array("gallery_id" => $editId));
        $data['aContentInfo'] = $aContentInfo;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Event Gallery");
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_event_gallery' => 'Event Gallery', "" => "Manage Event Gallery");
        load_admin_view('event_gallery/form', $data);
    }

    function add_image($gallery_id = 0) {
        $aContentInfo = get_row('event_gallery', array("gallery_id" => $gallery_id));
        if (!isset($aContentInfo->gallery_id)) {
            set_message('Selected event gallery does not exist.','e');
            redirect($this->moduleUrl);
        }
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add_image();
            if ($response['is_error'] == 0) {
                set_message('Gallery image saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['aContentInfo'] = $aContentInfo;
        // debug($data['aContentInfo']);
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Add Image : " . $aContentInfo->title;
        $data['menu'] = 'modules';
        $data['breadcrumb'] = array('admin_event_gallery' => 'Event Gallery', "" => "Add Images to Gallery");
        load_admin_view('event_gallery/image-form', $data);
    }

    function delete($delete_id = 0) {
        $aWhere = array('gallery_id' => $delete_id);
        $row = get_row('event_gallery', $aWhere);
        if (isset($row->gallery_id)) {
            $aGalleryImages = get_rows('event_gallery_image', $aWhere);
            foreach ($aGalleryImages as $row) {
                if (isset($row->image) && !empty($row->image)) {
                    $path = config_item('media_path') . 'event_gallery/' . $row->image;
                    @unlink($path);
                }
            }
            $this->oMainModel->delete('event_gallery_image', $aWhere);
            $this->oMainModel->delete('event_gallery', $aWhere);
            set_message('Event Gallery deleted successfully');
            redirect($this->moduleUrl);
        }
    }

    //------------Ajax Methods----------

    function deleteImg() {
        $image_id = $_POST['rowId'];
        $row = get_row('event_gallery_image', array('image_id' => $image_id));
        if (isset($row->image) && !empty($row->image)) {
            $path = config_item('media_path') . 'event_gallery/' . $row->image;
            @unlink($path);
            $this->oMainModel->delete('event_gallery_image', array('image_id' => $image_id));
        }
    }

}

?>