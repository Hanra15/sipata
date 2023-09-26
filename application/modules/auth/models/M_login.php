<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_login extends CI_Model
{

    private $app_id = 'admin';
    private $passwd = '1legalitas!!';

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }
    public function auth($username, $password)
    {
        $authLogin = [
            [
                'name' => 'username',
                'contents' => $username,
            ],
            [
                'name' => 'password',
                'contents' => $password,
            ]
        ];
        $data = guzzle_request('POST', 'login', [
            'multipart' => $authLogin
        ]);
        $token = $data['result']['token'];

        $data['token'] = $token;
        return $data;
    }
}
