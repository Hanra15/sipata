<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->helper('tanggal_helper');
        $this->load->model('m_kontak');
    }

    public function index()
    {
        // $token = $this->session->userdata['token'];

        $data['title'] = "Beranda | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";

        $getNews = guzzle_request('GET', 'open/newspagenation', []);
        $data['get_berita'] = $getNews['data'];

        $getCount = guzzle_request('GET', 'open/count_pelayanan', []);
        $data['get_count'] = $getCount['data'];

        $getPolantas = guzzle_request('GET', 'open/polantas', []);
        $data['get_polantas'] = $getPolantas['data'];

        $this->template->load('templates/template', 'home', $data);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_kontak->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }
}
