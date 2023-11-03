<?php

class leadgenBackendV2
{
    private $ApiKey='4dZkpCjJWT9rWyPJWc9rPzR7j0JZ';
    private $apiURL="https://admin.lydia-astro.com/api";

    function postLeadData($requestData){
        // maybe some validation here..
        //

        $requestData->api_token = $this->ApiKey;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->apiURL."/landingpageLeads");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        if(!empty($requestData)){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_decode(json_encode($requestData),true));
        }

        $result = curl_exec( $ch );
        curl_close( $ch );
      //  var_dump(json_decode($result,true));
        if(!$result=json_decode($result,true)){
            $result['status']='error';
            $result['error']='Incorrect call';
        }
        return json_encode($result);
    }

    /**
     * @param int $customerId
     *
     * @return false|string
     */
    public function checkLeadStatus(int $customerId){
        $checkStatusUrl = $this->apiURL."/customer/{$customerId}/status";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_POST, false);
        curl_setopt($ch, CURLOPT_URL, $checkStatusUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec( $ch );
        curl_close( $ch );

        if(!$result=json_decode($result,true)){
            $result['status']='error';
            $result['error']='Incorrect call';
        }
        return json_encode($result);
    }

}