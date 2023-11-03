<?php
require "../leadgenBackendV2.php";
$requestData = json_decode(json_encode($_POST));
// maybe some validation here
$leadGen = new leadgenBackendV2();
header('Content-Type: application/json; charset=utf-8');
echo $leadGen->checkLeadStatus($requestData->customerId);
