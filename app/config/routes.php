<?php

defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$aAdmin = array(
    "admin", "admin_dashboard", "common",
    "admin_post", "admin_career",
    "admin_faculty", "superadmin", "admin_user", "admin_enquiry",
    "admin_cms", "admin_gallery",
    "admin_banner", "admin_client",
    "admin_job_application",
    "admin_media", "admin_component",
    "admin_notification", "admin_testimonial",
    "admin_product", "admin_service", 'admin_subscriber',
    "admin_video",
    "admin_services"
);

foreach ($aAdmin as $controller) {
    $route["$controller/(:any)"] = "admin/$controller/$1";
    $route["$controller"] = "admin/$controller/index/";
    $route["$controller/(:any)/(:any)"] = "admin/$controller/$1/$2";
    $route["$controller/(:any)/(:any)/(:any)"] = "admin/$controller/$1/$2/$3";
}

$route["home_ajax/(:any)"] = "home/Home_ajax/$1";
$route["home_ajax"] = "home/Home_ajax/index/";

//Home CMS
$aHome = [
    'about-us','privacy-policy','terms-and-conidtions'
];
foreach ($aHome as $method) {
    $route[$method] = "home/cms/" . $method;
}

//Home Methods
$route['contact-us'] = "home/contact";
$route["products/(:any)"] = "home/products/$1";
$route["services/(:any)"] = "home/services/$1";
$route["blog"] = "home/blog";
$route["blog/(:any)"] = "home/blog/$1";



$str_admin = implode("|", $aAdmin);
$route['^(?!' . $str_admin . ').*'] = "home/$0";
