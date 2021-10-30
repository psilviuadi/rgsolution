<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllEmployees()
    {
        $url = "http://hiring.rewardgateway.net/list";
        $username = "hard";
        $password = "hard";
        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_USERPWD, "$username:$password");
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_ANY);

        $headers = array(
           "Accept: application/json",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);   //get status code
        curl_close($curl);
        return $resp;
    }
}
