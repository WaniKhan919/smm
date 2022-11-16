<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        //$this->getCountriesInfo();
    }

    protected function getCountryByIpAddress()
    {
        $ip = $this->getIpAddress();
        $query = json_decode(file_get_contents('http://ip-api.com/json/' . $ip), true);
        if ($query && $query['status'] == 'success') {
            $country = $query['country'];
            return $country;
        } else {
            return false;
        }
    }

    protected function getIpAddress()
    {
        if (isset($_SERVER[' HTTP_CLIENT_IP'])) {
            return $_SERVER[' HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
        }
    }

    protected function getCountriesInfo()
    {
        $curl = curl_init();
        set_time_limit(0);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);

        curl_setopt_array($curl, [
            CURLOPT_URL => "https://ajayakv-rest-countries-v1.p.rapidapi.com/rest/v1/all",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "X-RapidAPI-Host: ajayakv-rest-countries-v1.p.rapidapi.com",
                "X-RapidAPI-Key: 5d874c8dfcmsh7f6592acd1df02ap1cb434jsnbfd669590248"
            ],
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            dd("cURL Error #:" . $err);
        } else {
            dd($response);
        }
    }
}
