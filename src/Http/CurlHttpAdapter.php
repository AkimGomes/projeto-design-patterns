<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Http\HttpAdapter;

class CurlHttpAdapter implements HttpAdapter
{
    public function post(string $url, array $data = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, $data);

        curl_exec($curl);
    }
}