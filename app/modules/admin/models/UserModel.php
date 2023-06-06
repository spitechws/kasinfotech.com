<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class UserModel extends MY_Model
{

   
    function __construct()
    {
        parent::__construct();
        parent::setTable('user');
        $this->spitechApi = new SpiTechApi(ENVIRONMENT);
    }

    function user_list($aWhere = array())
    {
        $str_select = 't1.*,t2.role';
        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . 'user as t1');
        $this->db->join(tbl_prefix() . 'user_role as t2', 't1.role_id=t2.role_id');
        if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
            $this->db->like('t1.name', $_GET['search_key']);
            $this->db->or_like('t1.mobile', $_GET['search_key']);
            $this->db->or_like('t1.email', $_GET['search_key']);
        }
        $offset = 0;
        $limit = config_item('record_limit');
        if ($this->uri->segment(3)) {
            $offset = $this->uri->segment(3);
        }
        $this->db->where("t1.role_id>", 1);
        $this->db->order_by("t1.sequence_no", 'asc');
        $this->db->limit($limit, $offset);
        $res = $this->db->get()->result();
        $res = parent::customPagination($res);
        //debug('qry');
        return $res;
    }

    function login()
    {
        $this->form_validation->set_rules('email', lang('Email'), 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $row = parent::getRecord('*', array('email' => $email));
            if (!empty($row)) {
                $apiResponse = $this->spitechApi->getAuth($email, $password);
                if (!empty($apiResponse->data->id)) {
                    if ($row->status == '1') {
                        $lastId = $row;
                    } else {
                        $lastId = 'Inactive';
                    }
                } else {
                    $lastId = 'Invalid';
                }
            } else {
                $lastId = 'Invalid';
            }
        } else {
            $lastId = validation_errors();
        }
        //debug('qry');     
        return $lastId;
    }

    function profile()
    {
        $editId = $this->input->post('user_id');
        $this->form_validation->set_rules('name', 'Name', 'required');
        if ($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $aInput = array(
                "name" => filterValue($name)
            );
            $_POST['rowId'] = $editId;
            $lastId = parent::save($this->tbl_name, $aInput, 'user_id', 1);
        } else {
            $lastId = validation_errors();
        }
        return $lastId;
    }

    function forgot_password()
    {
        $this->form_validation->set_rules('email', 'Email Id', 'required|valid_email');
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post('email', true);
            $row = get_row('user', array("email" => filterValue($email)));
            if (isset($row) && is_object($row) && !empty($row)) {
                if ($row->role_id == "0") {
                    $lastId = "Superadmin Password Reset Not Allowed";
                } else {
                    $password = random_string(8);
                    $aInput = array(
                        "password" => md5($password)
                    );
                    $_POST['rowId'] = $row->user_id;
                    $lastId = parent::save($this->tbl_name, $aInput, 'user_id');
                    //---------sending mail------------	                    
                    $template = get_message_template(1);
                    $subject = $template->subject;
                    $message = $template->message;
                    $message = str_replace('[[NAME]]', $row->name, $message);
                    $message = str_replace('[[LOGIN_URL]]', admin_url(), $message);
                    $message = str_replace('[[USERNAME]]', $row->email, $message);
                    $message = str_replace('[[PASSWORD]]', $password, $message);
                    $message = str_replace('[[SITENAME]]', config_item('site_name'), $message);

                    $arrParam = array(
                        'to' => $row->email,
                        'subject' => $subject,
                        'message' => $message
                    );
                    send_spitech_mail($arrParam);
                }
            } else {
                $lastId = "This email id is not registered with us.";
            }
        } else {
            $lastId = validation_errors();
        }
        return $lastId;
    }

    function changePass()
    {
        $editId = $_SESSION['aUser']->user_id;
        $this->form_validation->set_rules('password', 'Old Password', 'required');
        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('re_password', 'Re Password', 'required|matches[new_password]');
        if ($this->form_validation->run() == TRUE) {
            $password = $this->input->post('password', TRUE);
            $new_password = $this->input->post('new_password', TRUE);
            $re_password = $this->input->post('re_password', TRUE);
            parent::setTable('user');
            $row = parent::getRecord('password', array("user_id" => $editId, "password" => md5($password)));
            if (isset($row) && is_object($row) && !empty($row)) {
                $aInput = array(
                    "password" => md5(filterValue($re_password))
                );
                $_POST['rowId'] = $editId;
                $lastId = parent::save($this->tbl_name, $aInput, 'user_id');
            } else {
                $lastId = "Please enter correct old passowrd.";
            }
        } else {
            $lastId = validation_errors();
        }
        return $lastId;
    }

    function add()
    {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('user_id');
        if ($editId == 0) {
            $this->form_validation->set_rules('password', 'Password', 'required');
        }
        $this->form_validation->set_rules('role_id', 'Role', 'required');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', "required|valid_unique_mobile[user,mobile,user_id,$editId]");
        $this->form_validation->set_rules('email', 'Email', "required|valid_unique_email[user,email,user_id,$editId]");
        if ($this->form_validation->run() == TRUE) {
            $role_id = $this->input->post('role_id', TRUE);
            $name = $this->input->post('name', TRUE);
            $mobile = $this->input->post('mobile', TRUE);
            $email = $this->input->post('email', TRUE);
            $status = $this->input->post('status', TRUE);
            if ($role_id == '1') {
                $role_id = '2'; // default role id Secondary Admin
            }
            $aInput = array(
                "role_id" => filterValue($role_id),
                "name" => filterValue($name),
                "mobile" => filterValue($mobile),
                "email" => filterValue($email),
                "status" => filterValue($status)
            );
            $_POST['rowId'] = $editId;
            $lastId = parent::save($this->tbl_name, $aInput, 'user_id');
            if ($editId == 0) {
                $password = $this->input->post('password', TRUE);
               $this->spitechApi->createUser($name, $email, $password);                
            } else {
                $this->spitechApi->updateUser($name, $email);
            }
            $response['msg'] = $lastId;
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function getList($str_select = '*', $sort = 'user_id', $order = 'desc')
    {
        $limit = $_GET['limit'];
        $offset = $_GET['offset'];
        if (isset($_GET['sort'])) {
            $sort = $_GET['sort'];
        }
        if (isset($_GET['order'])) {
            $order = $_GET['order'];
        }
        $searchKey = $_GET['searchKey'];

        $this->db->from(tbl_prefix() . $this->tbl_name);
        $this->db->where('user_id !=', $_SESSION['aUser']->user_id);
        if ($searchKey != "") {
            $this->db->like('name', $searchKey);
            $this->db->or_like('mobile', $searchKey);
            $this->db->or_like('email', $searchKey);
        }
        $total = $this->db->count_all_results();

        $this->db->select($str_select);
        $this->db->from(tbl_prefix() . $this->tbl_name);
        $this->db->where('user_id !=', $_SESSION['aUser']->user_id);
        if ($searchKey != "") {
            $this->db->like('name', $searchKey);
            $this->db->or_like('mobile', $searchKey);
            $this->db->or_like('email', $searchKey);
        }
        $this->db->order_by($sort, $order);
        $this->db->limit($limit, $offset);
        $results = $this->db->get()->result();
        $data = array();
        $i = $offset + 1;
        foreach ($results as $row) {
            $status = 'Active';
            if ($row->status == '0') {
                $status = 'Inactive';
            }
            $nestedData = array();
            $nestedData['sn'] = $i;
            $nestedData['user_id'] = $row->user_id;
            $nestedData['name'] = $row->name;
            $nestedData['mobile'] = $row->mobile;
            $nestedData['email'] = $row->email;
            $nestedData['status'] = $status;
            $nestedData['permission_setting'] = '<a href="' . $this->moduleUrl . 'permission/' . $row->user_id . '"><i class="glyphicon glyphicon-edit" title="Set Access Permission"></i>Permission</a>';
            $nestedData['action_commands'] = '<a href="' . $this->moduleUrl . 'add/' . $row->user_id . '"><i class="glyphicon glyphicon-edit" title="Edit"></i></a>';
            $data[] = $nestedData;
            $i++;
        }
        $aResult = array(
            "total" => intval($total),
            "rows" => $data
        );
        return $aResult;
    }

    function export($aWhere = array(), $aFilter = array())
    {
        $aResult = parent::getExportList($this->tbl_name, '*', $aWhere, $aFilter);
        return $aResult;
    }

    function insert_permission($user_id)
    {

        $this->db->select('group_id,module_id');
        $this->db->from(tbl_prefix() . "modules");
        $res = $this->db->get()->result();

        foreach ($res as $data) {
            $input_array = array(
                "user_id" => $user_id,
                "module_id" => $data->module_id
            );
            parent::setTable('user_permission');
            $row = parent::getRecord('*', $input_array);
            if (empty($row)) {
                $this->db->insert(tbl_prefix() . 'user_permission', $input_array);
            }
        }
    }

    function get_permissions($user_id = 0)
    {
        $this->db->select('*');
        $this->db->from(tbl_prefix() . 'module_group');
        $qry = $this->db->get();
        $results = $qry->result();
        foreach ($results as $key => $value) {
            $this->db->select('*');
            $this->db->from(tbl_prefix() . 'modules');
            $this->db->where('group_id', $value->group_id);
            $this->db->where('status', '1');
            $qry = $this->db->get();
            $results[$key]->aModules = $qry->result();
        }
        return $results;
    }

    function set_user_permission($user_id)
    {
        $module_id = $this->input->post('module_id');
        //$str = '';
        for ($i = 0; $i < sizeof($module_id); $i++) {
            $export = 0;
            $add = 0;
            $edit = 0;
            $delete = 0;
            $view = 0;
            $export_permission = $this->input->post('export' . $i);
            $edit_permission = $this->input->post('edit' . $i);
            $delete_permission = $this->input->post('delete' . $i);
            $view_permission = $this->input->post('access' . $i);
            $add_permission = $this->input->post('add' . $i);
            if (isset($export_permission)) {
                $export = $export_permission;
            }
            if (isset($add_permission)) {
                $add = $add_permission;
            }
            if (isset($edit_permission)) {
                $edit = $edit_permission;
            }
            if (isset($delete_permission)) {
                $delete = $delete_permission;
            }
            if (isset($view_permission)) {
                $view = $view_permission;
            }
            $input_array = array(
                "export_permission" => $export,
                "add_permission" => $add,
                "edit_permission" => $edit,
                "delete_permission" => $delete,
                "view_permission" => $view
            );
            $this->db->where('module_id', $module_id[$i]);
            $this->db->where('user_id', $user_id);
            $this->db->update(tbl_prefix() . 'user_permission', $input_array);
            // $str=$this->db->last_query() . '<br/>';
        }
    }
}
