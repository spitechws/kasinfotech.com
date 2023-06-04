<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class SpiTechApi
{
    public const API_KEY = '0bd266XP6087wm1axyikgBsro3J5Ec';
    //pass = 'ziemy0r7'
    public function getAuth($email, $password)
    {
        $curl = curl_init();
        $base_url ='http://api.spitech.in/api/auth';
        $param = array('email' => $email, 'password' => $password, 'api_key' => self::API_KEY);
        $api_url = $base_url.'?' . http_build_query($param);
        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET'
        ));

        $response = curl_exec($curl);
        if (curl_exec($curl) === false) {
            debug(curl_error($curl));
        } else {
            curl_close($curl);
        }
        return json_decode($response);
    }
}

