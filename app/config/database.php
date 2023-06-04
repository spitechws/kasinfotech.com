<?php

defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
    'hostname' => APP_DB_HOST,
    'username' => APP_DB_USER,
    'password' => APP_DB_PASS,
    'database' => APP_DB_NAME,
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'dsn' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
