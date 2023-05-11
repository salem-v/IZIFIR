<?php

namespace Nicedo\Core;

use Bitrix\Main\Web\HttpClient;

class Bitrix24
{
    const webHookUrl = 'https://shurup.bitrix24.ru/rest/2484/iy4akio1vd74aozw/';

    public static function send($method, $data)
    {
        $httpClient = new HttpClient();
        $url = self::webHookUrl . $method;
        $httpClient->post($url, $data);
    }
}