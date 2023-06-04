<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$aAdmin = array(
      "admin", "admin_dashboard", "common",
    "admin_post", "admin_career",
    "admin_faculty", "superadmin", "admin_user", "admin_enquiry",
    "admin_cms", "admin_gallery",
    "admin_banner", "admin_language",
    "admin_job_application",
    "admin_media","admin_component",
    "admin_notification","admin_testimonial",
    "admin_topper", "admin_course",'admin_subscriber',
    "admin_facility", "admin_download", "admin_academic_calendar",
    "admin_admission_notification", "admin_sports",
    "admin_alumni", "admin_merit", "admin_ssr",
    "admin_admission_list", "admin_news",
    "admin_links", "admin_events", "admin_feedback",
    "admin_admission", "admin_event_gallery", "admin_video",
    "admin_tc"
);

foreach ($aAdmin as $controller) {
    $route["$controller/(:any)"] = "admin/$controller/$1";
    $route["$controller"] = "admin/$controller/index/";
    $route["$controller/(:any)/(:any)"] = "admin/$controller/$1/$2";
    $route["$controller/(:any)/(:any)/(:any)"] = "admin/$controller/$1/$2/$3";
}

$route["home_ajax/(:any)"] = "home/Home_ajax/$1";
$route["home_ajax"] = "home/Home_ajax/index/";

$str_admin = implode("|", $aAdmin);
$route['^(?!' . $str_admin . ').*'] = "home/$0";
