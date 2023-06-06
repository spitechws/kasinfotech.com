<?php

class SpiTechApi
{
    private $serviceApiKey;
    private $apiBaseUrl;

    function __construct($env = 'production')
    {
        $this->serviceApiKey = '0bd266XP6087wm1axyikgBsro3J5Ec';
        if ($env == 'production') {
            $this->apiBaseUrl = 'http://api.spitech.in/api/';
        } else {
            $this->apiBaseUrl = 'http://localhost/html/inhouse/spitech.in/api.spitech.in/api/';
        }
    }

    private function callApi($api_end_point, $param=[], $method = 'GET')
    {
        $param['api_key'] = $this->serviceApiKey;
        $base_url = $this->apiBaseUrl . $api_end_point;

        $base_url .= '?' . http_build_query($param);

        //reading cookies
        $cookie = $this->getUserCookie();
        $header = array(           
            'Content-Type: application/x-www-form-urlencoded'
        );
        if (!empty($cookie->refresh_token)) {
            array_push($header,"Cookie: refresh_token=" . $cookie->refresh_token);     
                          
        }
        if (!empty($cookie->token)) {
            array_push($header,'Authorization: Bearer ' . $cookie->token);                    
        }

        $curl_options = array(
            CURLOPT_URL => $base_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER=>$header
        );

        
       
        $curl = curl_init();
        curl_setopt_array($curl, $curl_options);
        $response = curl_exec($curl);
        if (curl_exec($curl) === false) {
            debug(curl_error($curl));
        } else {
            curl_close($curl);
        }
        return json_decode($response);
    }

    // Login Api
    public function getAuth($email, $password)
    {
        $param = array('email' => $email, 'password' => $password);
        $response = $this->callApi('auth', $param);
        if (!empty($response->data->token)) {
            $this->setUserCookie($response);
        }
        return $response;
    }

    // Forgot Password Api
    public function forgotPassword($email)
    {
        $param = array('email' => $email);
        return $this->callApi('auth/forgotPassword', $param);
    }

    // create user
    public function createUser($name,$email,$password)
    {
        $params = [
            'name' => $name,
            'email' => $email,
            'password' => $password
        ];
        $response = $this->callApi('serviceUser', $params, 'POST');
        return $response;
    }


    // update user
    public function updateUser($name,$email)
    {
        $params = [
            'name' => $name,
            'email' => $email,           
        ];
        $response = $this->callApi('serviceUser', $params, 'PUT');
        return $response;
    }

    // Change Logged in User Password
    public function changePassword($old_password, $new_password)
    {
        $params = [
            'old_password' => $old_password,
            'new_password' => $new_password
        ];
        $response = $this->callApi('serviceUser/changePassword', $params, 'PUT');
        return $response;
    }

    // Reset/Send new password to user's email
    public function sendPassword($email)
    {
        $params = [
            'email' => $email,
        ];
        $response = $this->callApi('serviceUser/sendPassword', $params, 'GET');
        return $response;
    }

    // Reset/Send new password to user's email
    public function refreshToken()
    {       
        $response = $this->callApi('auth/refreshtoken');
        if (!empty($response->data->token)) {
            $this->setUserCookie($response);
        }
        return $response;
    }




    //****************************************************************
    //setting cookies
    //****************************************************************


    private function setUserCookie($user)
    {
        $domain = $_SERVER['HTTP_HOST'];
        $avaialble_path = '/';
        $expiry_time = time() + 24 * 3600;  // expires ater 24 hr
        setcookie("refresh_token", json_encode($user->data->refresh_token), $expiry_time, $avaialble_path, $domain, false, true);
        setcookie("spitech_api_token", json_encode($user->data->token), $expiry_time, $avaialble_path, $domain, false, true);
        setcookie("spitech_api_user", json_encode($user->data), $expiry_time, $avaialble_path, $domain, false, true);
    }

    public function getUserCookie()
    {
        $temp = new stdClass();
        if (!empty($_COOKIE["spitech_api_token"])) {
            $temp->token = str_replace('"', '', $_COOKIE["spitech_api_token"]);
        }

        if (!empty($_COOKIE["refresh_token"])) {
            $temp->refresh_token = str_replace('"', '', $_COOKIE["refresh_token"]);
        }

        if (!empty($_COOKIE["spitech_api_user"])) {
            $user = json_decode($_COOKIE["spitech_api_user"]);
            $temp->email = $user->email;
            $temp->user_id = $user->id;
        }
        return $temp;
    }

    public function destroyUserCookie()
    {
        $domain = $_SERVER['HTTP_HOST'];
        $avaialble_path = '/';
        unset($_COOKIE['spitech_api_token']);
        unset($_COOKIE['spitech_api_user']);
        unset($_COOKIE['refresh_token']);
        $expiry_time = time() - 3600; // destroying by setting back datetime
        setcookie("refresh_token", '', $expiry_time, $avaialble_path, $domain, false, true);
        setcookie("spitech_api_token", '', $expiry_time, $avaialble_path, $domain, false, true);
        setcookie("spitech_api_user", '', $expiry_time, $avaialble_path, $domain, false, true);
    }
}
