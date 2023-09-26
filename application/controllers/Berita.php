<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->helper('tanggal_helper');
    }

    public function index()
    {
        $data['title'] = "Berita | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $data['heading'] = "Berita Terkini";
        $data['breadcrumb'] = "Berita";

        $getNews = guzzle_request('GET', 'open/newspagenation', []);
        $data['get_berita'] = $getNews['data'];

        // var_dump($data['get_berita']);
        // die;

        $this->template->load('templates/template', 'berita', $data);
    }

    public function detail($id)
    {
        $data['title'] = "Berita | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $data['heading'] = "Berita Terkini";
        $data['breadcrumb'] = "Detail";

        $getNews = guzzle_request('GET', 'open/news/' . $id, []);
        $data['detail_berita'] = $getNews['data'][0];

        $getallNews = guzzle_request('GET', 'open/newspagenation', []);
        $data['all_berita'] = $getallNews['data'];

        // var_dump($data['all_berita']);
        // die;

        $this->template->load('templates/template', 'detail-berita', $data);
    }
}
