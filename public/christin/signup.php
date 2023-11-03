<?php
session_start();
if( isset($_SERVER['HTTPS']) ) :
    define('HTTP_PROTOCOL', 'https');
else :
    define('HTTP_PROTOCOL', 'http');
endif;

define('SITE_URL', HTTP_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].'/');
$url = HTTP_PROTOCOL.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$api_token = '4dZkpCjJWT9rWyPJWc9rPzR7j0JZ';
$offer_id = $_POST['offer_id'] ?? 866;
$design_id = 101348;
/*if ($offer_id == 866){
    if (strtoupper($_POST['gender']) == "M") {
        $design_id = 101349;
    }
    if (strtoupper($_POST['device']) != "DESKTOP"){
        $design_id = 101349;
    }
}*/

$test = false;
$user_agent = $_SERVER['HTTP_USER_AGENT'] ?? null;
$astrologist = "christin";
$timezone = date_default_timezone_get();

if(isset($_POST['coreg'])){
    $coreg = $_POST['coreg'];

}else{
    $coreg = 'false';
}

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = '127.0.0.1';
    return $ipaddress;
}

$response = '{"success":false}';

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $day = $_POST['day'] ?? null;
    $month = $_POST['month'] ?? null;
    $year = $_POST['year'] ?? null;
    $birthday = $year.'-'.$month.'-'.$day;

    $accepted = 1;
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => SITE_URL.'insertleadV2.php',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array(
            'email' => $_POST['email'],
            'api_token'=>$api_token,
            'offer_id' =>$offer_id,
            'offer' =>$offer_id,
            'design_id' => $design_id,
            'key' => $_POST['binom_click_id'] ?? null,
            'binom_click_id' => $_POST['binom_click_id'] ?? null,
            'placement' => $_POST['placement'] ?? null, //optional
            'gclid' => $_POST['gclid'] ?? null, //optional
            'queryString' => $_POST['queryString'] ?? null, //optional
            'first_name' => $_POST['fname'] ?? null, //optional
            'last_name' => $_POST['lname'] ?? null,  //optional
            'gender' => $_POST['gender'] ?? null, //optional
            'birthday' => $birthday, //optional
            'country' => $_POST['country'] ?? null,
            'language' => $_POST['language'] ?? null, //optional
            'user_agent' => $user_agent,
            'ip' => get_client_ip(),
            'test'=>$test, //optional
            'sign_id' => $_POST['astro'] ?? null, //optional
            'landingpageurl' => $url,
            'city' => $_POST['city'],
            'msisdn' => null,
            'timezone' => $timezone,
            'tobhr' => $_POST['tobhr'] ?? null, //optional
            'tobmin' => $_POST['tobmin'] ?? null, //optional
            'concerns' => $_POST['concerns'] ?? null, //optional
            'astrologist' => $astrologist,
            'coreg' => $coreg,
            'uuid' => $_POST['uuid'] ?? null,
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        if (!empty(curl_error($curl))) {
            $response = '{"success":false,"reason":' . curl_error($curl) . ',"error_no":' . curl_errno($curl) . '}';
        } else {
            $response = '{"success":false,"reason":"API error","error_no":' . curl_errno($curl) . '}';
        }
        echo $response;
        exit;
    }

    curl_close($curl);

    echo $response;
    exit;

} else {
    $response = '{"success":false}';
    echo $response;
    exit;
}

