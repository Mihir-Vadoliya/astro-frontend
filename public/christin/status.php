<?php

session_start();
isset($_SERVER['HTTPS']) ? define('HTTP_PROTOCOL', 'https') : define('HTTP_PROTOCOL', 'http');


define('SITE_URL', HTTP_PROTOCOL . '://' . $_SERVER['HTTP_HOST'] . '/');
$url       = HTTP_PROTOCOL . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$api_token = '4dZkpCjJWT9rWyPJWc9rPzR7j0JZ';

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL            => SITE_URL . 'christin/checkStatus.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING       => '',
    CURLOPT_MAXREDIRS      => 10,
    CURLOPT_TIMEOUT        => 0,
    CURLOPT_SSL_VERIFYHOST => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST  => 'POST',
    CURLOPT_POSTFIELDS     => [
        'customerId' => $_POST['customerId'],
    ],
));

$response = curl_exec($curl);

if (curl_errno($curl)) {
    if (! empty(curl_error($curl))) {
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
