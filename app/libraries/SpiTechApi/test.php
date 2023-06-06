<?php

function apiResult($result)
{
    echo "<pre>";
    print_r($result);
    echo "</pre>";
}


require_once __DIR__ . '/SpiTechApi.php';

$client = new SpiTechApi('local');

//Login
//$result = $client->getAuth('spitechtesting@gmail.com', 'b1znn9y0');

// refresh token
$result = $client->refreshToken();

//Create User
// $params = [
//     'name' => 'demo1',
//     'email' => 'spsoni.acc101@gmail.com',
//     'password' => 'Meta@190712'
// ];
// $result = $client->createUser($params);

//-----------Update User------------/
// $params = [
//     'name' => 'demo16',
//     'email' => 'spsoni.acc101@gmail.com',    
// ];
// $result = $client->updateUser(16,$params);


//-----------Change Password------------/
//$result = $client->changePassword('htpnghxg','NewPassword@123');

//--send new password/rest password--
//$result = $client->sendPassword('spitechtesting@gmail.com');

// forgot password
//$result = $client->forgotPassword('spitechtesting@gmail.com');



apiResult($result);
