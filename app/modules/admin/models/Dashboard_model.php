<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard_model extends MY_Model {

    function __construct() {
        parent::__construct();
        parent::setTable('user');
    }

    function dashboard_counters() {
        $temp = new stdClass();
        $count = get_count('services');
        $temp->course_count = $count;
        $count = get_count('enquiry');
        $temp->enquiry_count = $count;
        $count = get_count('job_application');
        $temp->job_application_count = $count;
        $count = get_count('career');
        $temp->career_count = $count;
        return $temp;
    }

    function profile() {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
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
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    function company_details() {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');
        $editId = $this->input->post('company_details_id');
        $this->form_validation->set_rules('population', 'Total Population', 'required');
        $this->form_validation->set_rules('ward', 'Number of wards', 'required');
        $this->form_validation->set_rules('nagar_nigam', 'Total Municipal Corporation in CG', 'required');
        $this->form_validation->set_rules('nagar_palika', 'CG Municipal Council', 'required');
        $this->form_validation->set_rules('nagar_panchayat', 'CG Total Nagar Panchayat', 'required');

        if ($this->form_validation->run() == TRUE) {
            $population = $this->input->post('population', TRUE);
            $ward = $this->input->post('ward', TRUE);
            $nagar_nigam = $this->input->post('nagar_nigam', TRUE);
            $nagar_palika = $this->input->post('nagar_palika', TRUE);
            $nagar_panchayat = $this->input->post('nagar_panchayat', TRUE);

            $aInput = array(
                "population" => filterValue($population),
                "ward" => filterValue($ward),
                "nagar_nigam" => filterValue($nagar_nigam),
                "nagar_palika" => filterValue($nagar_palika),
                "nagar_panchayat" => filterValue($nagar_panchayat)
            );

            $_POST['rowId'] = $editId;

            $lastId = parent::save('company_details', $aInput, 'company_details_id', 0, 0);
            /*
              $response['msg']=$lastId;
              //debug('qry'); */
        } else {
            $response['is_error'] = 1;
            $response['msg'] = validation_errors();
        }
        return $response;
    }

    

    /* ------------System Settings--------------- */

    function save_settings() {
        $response = array('is_error' => '0', 'class' => 'text-success', 'msg' => '');

        $site_logo = '';
        if (isset($_FILES['site_logo']['name']) && $_FILES['site_logo']['name'] != "") {
            $site_logo = upload_media('site_logo', 'jpg|jpeg|png|gif|bmp', 'site_settings');
            if (isset($site_logo['error'])) {
                $response['is_error'] = 1;
                $response['msg'] = $site_logo['error'];
                $site_logo = '';
            } else {
                $site_logo = $site_logo['file_name'];
            }
            //======(Checking Image)========================
            if (isset($_POST['old_site_logo']) && $_POST['old_site_logo'] != '') {
                remove_media($_POST['old_site_logo'], 'site_settings');
            }
        } else {
            $site_logo = $_POST['old_site_logo'];
        }

        $site_favicon = '';
        if (isset($_FILES['site_favicon']['name']) && $_FILES['site_favicon']['name'] != "") {
            $site_favicon = upload_media('site_favicon', 'jpg|jpeg|png|gif|bmp', 'site_settings');
            if (isset($site_favicon['error'])) {
                $response['is_error'] = 1;
                $response['msg'] = $site_favicon['error'];
                $site_favicon = '';
            } else {
                $site_favicon = $site_favicon['file_name'];
            }
            //======(Checking Image)========================
            if (isset($_POST['old_site_favicon']) && $_POST['old_site_favicon'] != '') {
                remove_media($_POST['old_site_favicon'], 'site_settings');
            }
        } else {
            $site_favicon = $_POST['old_site_favicon'];
        }

        $cbsc_mandate = '';
        if (isset($_FILES['cbsc_mandate']['name']) && $_FILES['cbsc_mandate']['name'] != "") {
            $cbsc_mandate = upload_media('cbsc_mandate', 'pdf', 'site_settings');
            if (isset($cbsc_mandate['error'])) {
                $response['is_error'] = 1;
                $response['msg'] = $cbsc_mandate['error'];
                $cbsc_mandate = '';
            } else {
                $cbsc_mandate = $cbsc_mandate['file_name'];
            }
            //======(Checking Image)========================
            if (isset($_POST['old_cbsc_mandate']) && $_POST['old_cbsc_mandate'] != '') {
                remove_media($_POST['old_cbsc_mandate'], 'site_settings');
            }
        } else {
            $cbsc_mandate = $_POST['old_site_favicon'];
        }
        $committee = '';
        if (isset($_FILES['committee']['name']) && $_FILES['committee']['name'] != "") {
            $committee = upload_media('committee', 'pdf', 'site_settings');
            if (isset($committee['error'])) {
                $response['is_error'] = 1;
                $response['msg'] = $committee['error'];
                $committee = '';
            } else {
                $committee = $committee['file_name'];
            }
            //======(Checking Image)========================
            if (isset($_POST['old_committee']) && $_POST['old_committee'] != '') {
                remove_media($_POST['old_committee'], 'site_settings');
            }
        } else {
            $committee = $_POST['old_committee'];
        }
        $aInput = array(
            "cbsc_mandate" => $cbsc_mandate,
            "committee" => $committee,
            "logo_width" => $_POST['logo_width'],
            "logo_height" => $_POST['logo_height'],
            "datetime_format" => $_POST['datetime_format'],
            "date_format" => $_POST['date_format'],
            "record_limit" => $_POST['record_limit'],
            "site_name" => $_POST['site_name'],
            "site_email" => $_POST['site_email'],
            "site_address" => $_POST['site_address'],
            "site_contact" => $_POST['site_contact'],
            "site_logo" => $site_logo,
            "site_favicon" => $site_favicon,
            "facebook" => $_POST['facebook'],
            "twitter" => $_POST['twitter'],
            "instagram" => $_POST['instagram'],
            "linkedin" => $_POST['linkedin'],
            "youtube" => $_POST['youtube']
        );
        foreach ($aInput as $key => $value) {
            $this->db->update(tbl_prefix() . 'config', array("value" => $value), array("name" => $key));
        }
        return $response;
    }

}

?>