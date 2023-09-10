<?php

class Pronero
{
    private $project_key;
    private $apiBaseUrl;
    private static $instance;

    /**
     * __construct
     *
     * @return void
     */
    private function __construct()
    {
        $this->project_key = '709b5bb8c40dcf98512fb159ae95af8c';
        $this->apiBaseUrl = 'https://billing.pronero.in/api/';
    }
    
    /**
     * getInstance
     *
     * @return Pronero
     */
    static function getInstance(): Pronero
    {
        if (self::$instance == null) {
            return new self;
        } else {
            return self::$instance;
        }
    }
    
    /**
     * projectInfo
     *
     * @return void
     */
    public function projectInfo()
    {
        return $this->apiCall('project',[],'GET');
    }

    /**
     * apiCall
     *
     * @param  mixed $end_point
     * @param  mixed $param
     * @param  mixed $method
     * @return void
     */
    private function apiCall($end_point, $param=[], $method = 'POST')
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
            $this->debug(curl_error($curl));
        }
        curl_close($curl);
        return json_decode($response);
    }

    /**
     * login
     *
     * @param  mixed $email
     * @param  mixed $password
     * @return void
     */
    function login($email, $password)
    {
        $param = [
            "email" => $email,
            "password" => $password
        ];
        return $this->apiCall('project/login', $param);
    }

    function isUserActive($data): bool
    {
        if (!empty($data->status)) {
            return strtolower($data->status) == strtolower('Active');
        } else {
            return false;
        }
    }

    /**
     * userAdd
     *
     * @param  mixed $email
     * @param  mixed $password
     * @return void
     */
    public function register($email, $password)
    {
        $param = [
            "email" => $email,
            "password" => $password
        ];
        return $this->apiCall('project/user-add', $param);
    }

    /**
     * userUpdate
     *
     * @param  mixed $email
     * @param  mixed $status
     * @return void
     */
    public function update($email, $status)
    {
        $status = ($status == 1) ? 'Active' : 'Inactive';
        $param = [
            "email" => $email,
            "status" => $status,
        ];
        return $this->apiCall('project/user-update', $param);
    }

    /**
     * sendPassword
     *
     * @param  mixed $email
     * @return void
     */
    public function sendPassword($email)
    {
        $param = [
            "email" => $email
        ];
        return $this->apiCall('project/send-password', $param);
    }

    /**
     * changePassword
     *
     * @param  mixed $email
     * @param  mixed $old_password
     * @param  mixed $password
     * @param  mixed $password_confirmation
     * @return void
     */
    public function changePassword($email, $old_password, $password, $password_confirmation)
    {
        $param = [
            "email" => $email,
            "old_password" => $old_password,
            "password" => $password,
            "password_confirmation" => $password_confirmation
        ];
        return $this->apiCall('project/change-password', $param);
    }

    /**
     * debug
     *
     * @param  mixed $arg
     * @param  mixed $is_die
     * @return void
     */
    function debug($arg, $is_die = 1)
    {
        echo '<pre>';
        if (is_array($arg) || is_object($arg)) {
            print_r($arg);
        } else {
            echo $arg;
        }
        echo '</pre>';
        if ($is_die == '1') {
            exit;
        }
    }

    /**
     * sendEmail
     *
     * @param  mixed $to_email
     * @param  mixed $subject
     * @param  mixed $message
     * @return void
     */
    public function sendEmail($to_email, $subject, $message)
    {
        $param = [
            "to_email" => $to_email,
            'subject' => $subject,
            'message' => $message
        ];
        return $this->apiCall('project/send-email', $param);
    }


   
}
