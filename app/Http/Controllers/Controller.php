<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        // Get user language code and inject to views
        if (!isset($this->isAdmin) || $this->isAdmin === false)
            View::share('userLangCode', $this->getUserLanguageCode());
    }

    protected function getUserLanguageCode()
    {
        $location = $this->getCountryByIpAddress();
        if ($location !== false)
            return $this->getLanguage($location['countryCode']);
        return 'en';
    }

    protected function getCountryByIpAddress()
    {
        $ip = $this->getIpAddress();
        $query = json_decode(file_get_contents('http://ip-api.com/json/' . $ip), true);
        if ($query && $query['status'] == 'success') {
            $country = $query['country'];
            $countryCode = $query['countryCode'];
            return compact('country', 'countryCode');
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

    protected function getLanguage($country)
    {
        $subtags = \ResourceBundle::create('likelySubtags', 'ICUDATA', false);
        $country = \Locale::canonicalize('und_'.$country);
        $locale = $subtags->get($country) ?: $subtags->get('und');
        return \Locale::getPrimaryLanguage($locale);
    }
}
