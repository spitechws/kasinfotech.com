<?php

defined('BASEPATH') or exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array(
    'database', 'session', 'form_validation',
    'AppSecurity', 'SpiTechApi/SpiTechApi', 'encryption', 'MY_Form_validation'
);

$autoload['drivers'] = array();

$autoload['helper'] = array(
    'url', 'app', 'html', 'db', 'form', 'app_export', 'common',
    'ckeditor', 'module', 'language', 'file', 'dataset',
    'sms_email', 'theme'
);

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('admin/common_model');
