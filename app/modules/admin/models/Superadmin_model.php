<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Superadmin_model extends MY_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function factory_reset()
    {
        //-----clean database-----------
        if (isset($_POST['submitform_db']) && $_POST['submitform_db'] != "") {
            $aDbTables = db_tables_to_clean();
            foreach ($aDbTables as $table) {
                $this->db->truncate($table);
            }
            $this->response['status'] = 1;
            $this->response['message'] = "Database cleaned successfully";
        } else if (isset($_POST['submitform_media']) && $_POST['submitform_media'] != "") {
            clean_media();
            $this->response['status'] = 1;
            $this->response['message'] = "Media folder cleaned successfully";
        }
        return $this->response;
    }

    /* ----------------Modules------------ */

    function get_module_details($str_select = '', $aWhere = array())
    {
        if ($str_select == '') {
            $str_select = 't1.*,t2.title as group_name';
        }
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'modules as t1');
        $this->db->join(tbl_prefix() . 'module_group as t2', 't1.group_id=t2.group_id', 'LEFT');
        $this->db->where($aWhere);
        $res = $this->db->get()->row();
        return $res;
    }

    function get_module_list($str_select = '', $aWhere = array())
    {
        if ($str_select == '') {
            $str_select = 't1.*,t2.title as group_name';
        }
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'modules as t1');
        $this->db->join(tbl_prefix() . 'module_group as t2', 't1.group_id=t2.group_id', 'LEFT');
        $this->db->where($aWhere);
        if (isset($_GET['search'])) {
            if (isset($_GET['from_date']) && $_GET['from_date'] != '') {
                $this->db->where('DATE(t1.created_date) >=', date('Y-m-d', strtotime($_GET['from_date'])));
            }
            if (isset($_GET['to_date']) && $_GET['to_date'] != '') {
                $this->db->where('DATE(t1.created_date) <=', date('Y-m-d', strtotime($_GET['to_date'])));
            }
            $this->db->like('t1.title', $_GET['search_key']);
            $this->db->or_like('t1.url', $_GET['search_key']);
            $this->db->or_like('t2.title', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("group_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

    function modules_add()
    {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('module_id');
        $this->form_validation->set_rules('group_id', 'Module Group', 'required');
        $this->form_validation->set_rules('title', 'Module title', 'required');
        $this->form_validation->set_rules('url', 'Module URL', 'required');
        $this->form_validation->set_rules('icon', 'Module Icon', 'required');
        if ($this->form_validation->run() == TRUE) {
            $group_id = $this->input->post('group_id', TRUE);
            $title = $this->input->post('title', TRUE);
            $url = $this->input->post('url', TRUE);
            $icon = $this->input->post('icon', TRUE);
            $status = $this->input->post('status', TRUE);
            $is_module = $this->input->post('is_module', TRUE);
            $module_table = $this->input->post('module_table', TRUE);
            $module_table_pk = $this->input->post('module_table_pk', TRUE);
            $aInput = array(
                "icon" => filterValue($icon),
                "group_id" => filterValue($group_id),
                "title" => filterValue($title),
                "status" => filterValue($status),
                "url" => filterValue($url),
                "module_table" => filterValue($module_table),
                "module_table_pk" => filterValue($module_table_pk),
                "is_module" => $is_module
            );
            $_POST['rowId'] = $editId;
            parent::setTable('modules');
            $lastId = parent::save($this->tbl_name, $aInput, 'module_id');
            $this->response['msg'] = $lastId;
        } else {
            $this->response['is_error'] = 1;
            $this->response['msg'] = validation_errors();
        }
        return $response;
    }

    /* -----------Language---------------- */

    function get_language_list()
    {
        $this->db->select('t1.*');
        $this->db->from(tbl_prefix() . 'language as t1');
        $this->db->where('status', '1');
        $res = $this->db->get()->result();
        return $res;
    }

    /* ----------------Message Template------------ */

    function get_message_template_details($str_select = '', $aWhere = array())
    {
        if ($str_select == '') {
            $str_select = 't1.*';
        }
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'message_templates as t1');
        $this->db->where($aWhere);
        $res = $this->db->get()->row();
        return $res;
    }

    function get_message_template_list($aWhere = array())
    {
        $str_select = 't1.*';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'message_templates as t1');
        $this->db->where($aWhere);
        if (isset($_GET['search'])) {
            if (isset($_GET['from_date']) && $_GET['from_date'] != '') {
                $this->db->where('DATE(t1.created_date) >=', date('Y-m-d', strtotime($_GET['from_date'])));
            }
            if (isset($_GET['to_date']) && $_GET['to_date'] != '') {
                $this->db->where('DATE(t1.created_date) <=', date('Y-m-d', strtotime($_GET['to_date'])));
            }
            $this->db->like('t1.template', trim($_GET['search_key']));
            $this->db->or_like('t1.subject', trim($_GET['search_key']));
            $this->db->or_like('t1.from_name', trim($_GET['search_key']));
            $this->db->or_like('t1.from_email', trim($_GET['search_key']));
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->order_by("template_id", 'desc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        return $res;
    }

    function message_template_add()
    {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('template_id');
        $this->form_validation->set_rules('template', 'Template Name', 'required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        if ($this->form_validation->run() == TRUE) {
            $template = $this->input->post('template', TRUE);
            $subject = $this->input->post('subject', TRUE);
            $type = $this->input->post('type', TRUE);
            $message = $this->input->post('message');
            $aInput = array(
                "template" => filterValue($template),
                "subject" => filterValue($subject),
                "type" => filterValue($type),
                "message" => $message
            );
            $_POST['rowId'] = $editId;
            parent::setTable('message_templates');
            $lastId = parent::save($this->tbl_name, $aInput, 'template_id');
            $this->response['msg'] = $lastId;
        } else {
            $this->response['is_error'] = 1;
            $this->response['msg'] = validation_errors();
        }
        return $response;
    }

    /* ------------System Settings--------------- */

    function save_settings()
    {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');

        $aInput = array(
            'google_map' => $_POST['google_map'],
            "copyright_text" => $_POST['copyright_text'],
            "developed_by" => $_POST['developed_by'],
            "developed_by_url" => $_POST['developed_by_url'],
            "expiry_date" => $_POST['expiry_date'],
            "reg_date" => $_POST['reg_date'],
            "language" => $_POST['language'],
            "is_multilingual" => $_POST['is_multilingual'],
            "site_theme" => $_POST['site_theme'],
            "google_analytics_code" => $_POST['google_analytics_code'],
            "bulk_sms_url" => $_POST['bulk_sms_url'],
            "bulk_sms_sender_id" => $_POST['bulk_sms_sender_id'],
            "bulk_sms_username" => $_POST['bulk_sms_username'],
            "bulk_sms_pass" => $_POST['bulk_sms_pass'],
            "bulk_sms_param1" => $_POST['bulk_sms_param1'],
            "bulk_sms_param2" => $_POST['bulk_sms_param2'],
            "bulk_sms_param3" => $_POST['bulk_sms_param3'],
            "bulk_sms_param4" => $_POST['bulk_sms_param4'],
            "bulk_sms_param_value1" => $_POST['bulk_sms_param_value1'],
            "bulk_sms_param_value2" => $_POST['bulk_sms_param_value2'],
            "bulk_sms_param_value3" => $_POST['bulk_sms_param_value3'],
            "bulk_sms_param_value4" => $_POST['bulk_sms_param_value4'],
            "decimal_seperator" => $_POST['decimal_seperator'],
            "thousand_seperator" => $_POST['thousand_seperator'],
            "currency" => $_POST['currency'],
            "currency_placement" => $_POST['currency_placement'],
            "decimal_places" => $_POST['decimal_places'],
            "version" => $_POST['version'],
            "is_underconstruction" => $_POST['is_underconstruction'],
            "is_suspended" => $_POST['is_suspended']
        );
        foreach ($aInput as $key => $value) {
            $this->db->update(tbl_prefix() . 'config', array("value" => $value), array("name" => $key));
        }
        return $response;
    }
}
