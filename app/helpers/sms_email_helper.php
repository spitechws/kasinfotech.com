<?php

//$arrParam = array(
//    "to" => "",   // Email address of the recipient(s). Example: "Bob <bob@host.com>". You can use commas to separate multiple recipients.
//    "subject" => "",
//    "message" => "",    
//    "cc" => "",
//    "bcc" => "",
//    "attachment" => ""  // physical path of file
//);
// param help : https://documentation.mailgun.com/en/latest/api-sending.html#sending
function send_mailgun_mail($arrParam = array()) {
    $mail = new MailgunMail();
    $response = $mail->sendMail($arrParam);
    return $response;
}

//$arrParam = array(
//    "to" => "",   // Example: "Bob <bob@host.com>". You can use commas to separate multiple recipients.
//    "subject" => "",
//    "message" => "",    
//    "cc" => "",
//    "bcc" => "",
//    "attachment" => ""  // physical path of file
//);
function send_spitech_mail($aParam) {
    if (isset($aParam['attachment']) && !empty($aParam['attachment'])) {
        $file = __DIR__ . "\\" . $aParam['attachment'];
        $mime = mime_content_type($file);
        $info = pathinfo($file);
        $name = $info['basename'];
        $output = new CURLFile($file, $mime, $name);
        $aParam["file"] = $output;
    }
    $url = 'http://spitech.in/';
    $url .= 'global_api/send_email';
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $aParam);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: multipart/form-data"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    if ($response == true) {
        return "Success";
    } else {
        return "Send Mail Error:" . curl_error($ch);
    }
}