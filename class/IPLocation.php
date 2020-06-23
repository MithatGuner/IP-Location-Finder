<?php


class IPLocation
{
    public $ip;
    public function __construct()
    {
        $this->ip = $this->getClientIP();
    }

    public function freeGeoIP(){
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://freegeoip.app/json/{$this->ip}",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "accept: application/json",
                "content-type: application/json"
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            return "error";
        } else {
            return json_decode($response);
        }
    }

    private function getClientIP(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){$ip = $_SERVER['HTTP_CLIENT_IP'];}
        elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];}
        else{$ip = $_SERVER['REMOTE_ADDR'];}
        return $ip;
    }
}