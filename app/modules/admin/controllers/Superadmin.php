<?php

//if (!defined('BASEPATH')) exit('No direct script access allowed');

class Superadmin extends MY_Controller {

    function __construct() {
        parent::__construct();
        checkAdminLogin();
        parent::setModuleUrl('superadmin');
        $this->load->model('Superadmin_model', 'oMainModel');
    }

    /* -------------General Settings-------------- */

    function index() {
        if (isset($_POST['submitform'])) {
            $reesponse = $this->oMainModel->save_settings();
            if ($reesponse['is_error'] == 0) {
                set_message('App settings saved successfully');
            } else {
                set_message($reesponse['msg'], 'e');
            }
            redirect($this->moduleUrl);
        }
        $data['aLangugae'] = $this->oMainModel->get_language_list();
        $data['aContentInfo'] = (object) get_config();      
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Application Settings");
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('' => 'System Settings');
        load_admin_view('superadmin/system-settings', $data);
        hide_message();
    }

    //-----factory reset-----------
    function factory_reset() {
        if (isset($_POST) && !empty($_POST)) {
            $reesponse = $this->oMainModel->factory_reset();
            if ($reesponse['status'] == 1) {
                set_message($reesponse['message']);
            } else {
                set_message($reesponse['message'], 'e');
            }
            redirect($this->moduleUrl.'factory_reset/');
        }
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = "Factory Reset";
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('superadmin' => 'System Settings',''=>'Factory Reset');
        load_admin_view('superadmin/factory-reset', $data);
        hide_message();
    }

    //-------language and label------------
    function update_label() {
        $label_id = $_POST['label_id'];
        $label = $_POST['label'];
        $this->db->update(tbl_prefix() . 'label', array('label' => $label), array('label_id' => $label_id));
    }

    function set_default_language() {
        $language = $_POST['language'];
        update_config(array('language' => $language));
        hide_message();
    }

    function label() {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add_label();
            if ($response['is_error'] == 0) {
                set_message('Language saved successfully');
                redirect($this->moduleUrl);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        parent::setTable('label');
        $data['aGrid'] = $this->oMainModel->get_label_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Label");
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('admin_language' => 'Language', '' => 'Label');
        load_admin_view('superadmin/label-form', $data);
        hide_message();
    }

    function label_add($language_id) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->add();
            if ($response['is_error'] == 0) {
                set_message('Language saved successfully');
                redirect($this->moduleUrl . 'add/' . $language_id);
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['aGrid'] = $this->oMainModel->get_list(array("language_id" => $language_id));
        $data['language_id'] = $language_id;
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Label Value");
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('admin_language' => 'Language', '' => 'Label Value');
        load_admin_view('superadmin/label-value-form', $data);
        hide_message();
    }

    /* -------------Modules-------------- */

    function modules() {
        parent::setTable('modules');
        $data['aGrid'] = $this->oMainModel->get_module_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Modules");
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('' => 'Modules');
        load_admin_view('superadmin/modules-index', $data);
        hide_message();
    }

    function modules_add($edit_id = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->modules_add();
            if ($response['is_error'] == 0) {
                set_message('Modules saved successfully');
                redirect($this->moduleUrl . 'modules/');
            } else {
                set_message($response['msg'], 'e');
            }
        }
        $data['aContentInfo'] = $this->oMainModel->get_module_details('', array('t1.module_id' => $edit_id));
        parent::setTable('module_group');
        $data['aModuleGroup'] = $this->oMainModel->getRecords('t1.*');

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Modules");
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('superadmin/modules/' => 'Modules', '' => 'Manage');
        load_admin_view('superadmin/modules-form', $data);
        hide_message();
    }

    /* -------------Message Template-------------- */

    function message_template() {
        parent::setTable('message_templates');
        $data['aGrid'] = $this->oMainModel->get_message_template_list();
        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Message Templates");
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('' => 'Message Templates');
        load_admin_view('superadmin/message-template-index', $data);
        hide_message();
    }

    function message_template_add($edit_id = 0) {
        if (isset($_POST['submitform'])) {
            $response = $this->oMainModel->message_template_add();
            if ($response['is_error'] == 0) {
                set_message('Message Template saved successfully');
                redirect($this->moduleUrl . 'message_template/');
            } else {
                set_message($response['msg'], 'e');
            }
        }
        parent::setTable('message_templates');
        $data['aContentInfo'] = $this->oMainModel->get_message_template_details('', array('t1.template_id' => $edit_id));

        $data['moduleUrl'] = $this->moduleUrl;
        $data['title'] = lang("Message Templates");
        $data['menu'] = 'config';
        $data['breadcrumb'] = array('superadmin/message_template/' => 'Message Templates', '' => 'Manage');
        load_admin_view('superadmin/message-template-form', $data);
        hide_message();
    }

}

?>