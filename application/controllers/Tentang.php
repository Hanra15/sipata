<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->helper('tanggal_helper');
    }

    public function index()
    {
        $data['title'] = "Tentang Aplikasi | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $data['heading'] = "Tentang SIJAB";
        $data['breadcrumb'] = "Tentang";

        $getCount = guzzle_request('GET', 'open/count_pelayanan', []);
        $data['get_count'] = $getCount['data'];

        $this->template->load('templates/template', 'tentang', $data);
    }
}
