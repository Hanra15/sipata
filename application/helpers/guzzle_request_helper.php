<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;
use GuzzleHttp\Psr7;

if (!function_exists('guzzle_request')) {
    /**
     * function request
     * @param method    string
     * @param uri       string
     * @param header    array
     * 
     * return array data
     */
    function guzzle_request($method, $uri, $body)
    {
        try {
            $client = new Client();
            $request = $client->request($method, 'https://api.skripsijoss.my.id/' . $uri, $body);
            $response = $request->getBody()->getContents();
            $data = json_decode($response, true);

            return $data;
        } catch (Exception $e) {
            return redirect(base_url('login?' . $uri . ''));
            // echo $e;
            // return location.reload();
        }
    }

    function url_api()
    {
        return 'https://api.skripsijoss.my.id/' . 'public/upload/';
    }
}
