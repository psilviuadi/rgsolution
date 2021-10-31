<?php

namespace App\Services;

class RewardGatewayService
{
    // Response Code from the Reward Gateway Request
    private $rgResponseCode;

    private $rgResponse;

    public function getEmployeesList()
    {
        $this->getRGListData();
        if ($this->rgResponseCode === 200) {
            return array_slice($this->rgResponse, 0, 10);
        }
        return null;
    }

    private function getRGListData()
    {
        $url = env("REWARD_GATEWAY_REQUEST_URL");
        $username = env("REWARD_GATEWAY_REQUEST_USER");
        $password = env("REWARD_GATEWAY_REQUEST_PASSWORD");
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

        $this->rgResponse = curl_exec($curl);
        $this->rgResponse = json_decode($this->rgResponse, true);
        $this->rgResponseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
        return $this->rgResponse;
    }
}
