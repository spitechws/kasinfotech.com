<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Enquiry_model extends MY_Model
{

	function __construct()
	{
		parent::__construct();
		parent::setTable('enquiry');
	}


	function add()
	{
		$response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
		$editId = $this->input->post('id');

		$this->form_validation->set_rules('message', 'Message', 'required');
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');

		if ($this->form_validation->run() == TRUE) {
			$name = $this->input->post('name', TRUE);
			$mobile = $this->input->post('mobile', TRUE);
			$email = $this->input->post('email', TRUE);
			$message = $this->input->post('message', TRUE);
			$service_id = $this->input->post('service_id', TRUE);
			$aInput = array(
				"name" => filterValue($name),
				"mobile" => filterValue($mobile),
				"email" => filterValue($email),
				"service_id" => filterValue($service_id),
				"message" => filterValue($message)
			);
			$_POST['rowId'] = $editId;
			$lastId = parent::save($this->tbl_name, $aInput, 'id');
			$this->response['msg'] = $lastId;
		} else {
			$this->response['is_error'] = 1;
			$this->response['msg'] = validation_errors();
		}
		return $this->response;
	}

	function get_list($str_select = '', $aWhere = array())
	{

		if ($str_select == '') {
			$str_select = 't1.*,t2.name as service_name';
		}
		$this->db->select($str_select);
		$this->db->from(tbl_prefix() . 'enquiry as t1');
		$this->db->join(tbl_prefix() . 'service as t2', 't1.service_id=t2.id', 'LEFT');
		$this->db->where($aWhere);
		if (isset($_GET['search_key']) && $_GET['search_key'] != '') {
			$this->db->like('t1.name', $_GET['search_key']);
			$this->db->or_like('t1.mobile', $_GET['search_key']);
			$this->db->or_like('t1.email', $_GET['search_key']);
			$this->db->or_like('t2.name', $_GET['search_key']);
		}
		if (isset($_GET['from_date']) && $_GET['from_date'] != '') {
			$this->db->where('DATE(t1.created_date) >=', $_GET['from_date']);
		}
		if (isset($_GET['to_date']) && $_GET['to_date'] != '') {
			$this->db->where('DATE(t1.created_date) <=', $_GET['to_date']);
		}
		$offset = 0;
		$limit = config_item('record_limit');
		if ($this->uri->segment(3)) {
			$offset = $this->uri->segment(3);
		}
		$this->db->order_by("t1.id", 'desc');
		$this->db->limit($limit, $offset);
		$res = $this->db->get()->result();
		$res = parent::customPagination($res);
		return $res;
	}
}
