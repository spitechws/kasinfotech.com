<?php

/*
  This helper file will contain data set needed for selection and choice pupose. These will be hardcoded.
 */

function job_type() {
    $data = array('1' => "Full Time", '2' => "Part Time");
    return $data;
}

function work_mode() {
    $data = array('1' => "Work From Office", '2' => "Work From Home");
    return $data;
}

function review_status() {
    $status = array('1' => "Approved", '0' => "Pending");
    return $status;
}

function status() {
    $status = array('1' => 'Active', '0' => 'Inactive');
    return $status;
}

function factory_reset_tables() {
    $aDbTables = array(
        "banner", "career", "service", "enquiry", "gallery",
        "gallery_image", "job_application","subscriber", "post_category", "post",
        "page_component", "testimonial", "user_permission"
    );
    return $aDbTables;
}

function media_folders_to_clean() {
    $data = array(
        "banner", "job_application", "site_settings",
        "press_release", "gallery",
        "service", "faculty", "toppers","facility"
    );
    return $data;
}

function message_type() {
    $status = array('SMS' => "SMS", 'EMAIL' => 'EMAIL');
    return $status;
}

function salary() {
    $data = array(
        '1' => "5000 to 10,000",
        '2' => "10,000 to 15,000",
        '3' => "15,000 to 20,000",
        '4' => "20,000 to 25,000",
        '5' => "25,000 to 30,000",
        '6' => "30,000 to 35,000",
        '7' => "35,000+",
    );
    return $data;
}

function course_level() {
    $level = array('Under Graduation (UG)' => "Under Graduation (UG)", 'Post Graduation (PG)' => 'Post Graduation (PG)', 'Degree' => 'Degree');
    return $level;
}

function get_datetime_format() {
    $status = array(
        '' => lang('Select Date Format'),
        'd/M/Y g:i A' => date('d/M/Y h:i:s A'),
        'm/d/Y H:i A' => date('m/d/Y h:i:s A')
    );
    return $status;
}

function get_timezones() {
    $data = array(
        '' => "Select",
        'Asia/Kolkata' => 'Asia/Kolkata'
    );
    return $data;
}

function get_date_format() {
    $status = array(
        '' => lang('Select Date Format'),
        'm/d/Y' => date('m/d/Y'),
        'Y/M/d' => date('Y/M/d'),
        'd/m/Y' => date('d/m/Y'),
        'd-m-Y' => date('d-m-Y'),
        'd-M-Y' => date('d-M-Y')
    );
    return $status;
}

function get_room_category() {
    $ci = & get_instance();
    $ci->db->select('t1.*');
    $ci->db->from(tbl_prefix() . 'room_category as t1');
    $ci->db->where('t1.status', 1);
    $aCategory = $ci->db->get()->result();
    $aOption = array();
    if (isset($aCategory) && is_array($aCategory) && !empty($aCategory)) {
        foreach ($aCategory as $row) {
            $aOption[$row->category_id] = $row->category;
        }
    }
    return $aOption;
}

function get_name_title() {
    $data = array(
        '1' => lang('Mr'),
        '2' => lang('Miss'),
        '3' => lang('Mrs')
    );
    return $data;
}

function get_id_proof() {
    $data = array(
        '1' => lang('Arm License'),
        '2' => lang('Driving License'),
        '3' => lang('Adhaar(UID)'),
        '4' => lang('Election Commission ID Card'),
        '5' => lang('Driving License'),
        '6' => lang('Arms Licence'),
        '7' => lang('Ration Card with Photo, for the person whose photo is affixed')
    );
    return $data;
}

function get_address_proof() {
    $data = array(
        '1' => lang('Arm License'),
        '2' => lang('Driving License'),
        '3' => lang('Adhaar(UID)'),
        '4' => lang('Election Commission ID Card'),
        '5' => lang('Driving License'),
        '6' => lang('Arms Licence'),
        '7' => lang('Ration Card with address'),
        '8' => lang('Electricity Bill ( not older than last three months)'),
        '9' => lang('Water Bill (not older than last three months)'),
        '10' => lang('Telephone Bill of Fixed line (not order than last three months)')
    );
    return $data;
}

function get_floors() {
    $data = array();
    for ($i = 1; $i <= 10; $i++) {
        $data[$i] = lang('Floor') . '-' . $i;
    }
    return $data;
}

function get_financial_year() {
    $data = array("" => lang("Select Financial Year"));
    for ($i = date('Y'); $i >= 2012; $i--) {
        $from = '01-Apr-' . $i;
        $to = '31-Mar-' . ($i + 1);
        $value = $from . '|' . $to;
        $display = $from . ' TO ' . $to;
        $data[$value] = $display;
    }
    return $data;
}

function get_session_year() {
    $data = array("" => lang("Select Session"));
    for ($i = date('Y'); $i >= 2000; $i--) {
        $from = $i;
        $to = ($i + 1);
        $value = $from . ' - ' . $to;
        $display = $from . ' - ' . $to;
        $data[$value] = $display;
    }
    return $data;
}
