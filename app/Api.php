<?php

namespace App;

use Illuminate\Support\Facades\Http;

class Api
{
    const TOKEN = '55fedf9e3353be4859a2f4cefb5636bd';

    public static function getData(array $params)
    {
        $params['token'] = self::TOKEN;

        $url = env('APP_ENV') == 'local' ? 'http://192.168.80.254/prices/hs/SiteAPI' : 'http://87.249.39.222:89/prices/hs/SiteAPI';

        return Http::withBasicAuth('maks','123maks123')->get($url, $params)->json();
    }

    public static function getRequest(array $params)
    {

    }
    //http://192.168.80.254/prices/hs/SiteAPI?method=getapplicability&applicability_id=20dc67ab-18c5-11e9-8101-c4e984030b0d&token=55fedf9e3353be4859a2f4cefb5636bd

}
