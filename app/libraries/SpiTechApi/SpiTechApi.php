<?php

class SpiTechApi
{
    private $project_key;
    private $apiBaseUrl;

    function __construct($env = 'production')
    {
        $this->project_key = '709b5bb8c40dcf98512fb159ae95af8c';
        $this->apiBaseUrl = 'http://billing.pronero.in/api/';
        if ($env != 'production') {
            $this->apiBaseUrl = 'http://127.0.0.1:8000/api/';
        }
    }

    private function apiCall($end_point, $param, $method = 'POST')
    {
        $curl = curl_init();

        $param['project_key'] = $this->project_key;
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this->apiBaseUrl . $end_point,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_POSTFIELDS => json_encode($param),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));
        $response = curl_exec($curl);
        if ($response === false) {
            debug(curl_error($curl));
        }
        curl_close($curl);
        return json_decode($response);
    }

    public function getAuth($email, $password)
    {
        $param = [
            "email" => $email,
            "password" => $password
        ];
        return $this->apiCall('project/login', $param);
    }

    public function userAdd($email, $password)
    {
        $param = [
            "email" => $email,
            "password" => $password
        ];
        return $this->apiCall('project/user-add', $param);
    }

    public function userUpdate($email, $status)
    {
        $status = ($status == 1) ? 'Active' : 'Inactive';
        $param = [
            "email" => $email,
            "status" => $status,
        ];
        return $this->apiCall('project/user-update', $param);
    }

    public function sendPassword($email)
    {
        $param = [
            "email" => $email
        ];
        return $this->apiCall('project/send-password', $param);
    }
}
