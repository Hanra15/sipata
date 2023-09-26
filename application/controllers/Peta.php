<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peta extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->model('m_kontak');
    }

    public function index()
    {
        echo 'd';
        die;
        $data['title'] = "Peta Lalu Lintas | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $data['heading'] = "Peta Lalu Lintas Kota Bogor";
        $data['breadcrumb'] = "Peta";

        $getCCTV = guzzle_request('GET', 'open/cctv', []);
        $data['getCCTV'] = $getCCTV['data'];

        $getNews = guzzle_request('GET', 'open/newspagenation', []);
        $data['getNews'] = $getNews['data'];

        $getTrayek = guzzle_request('GET', 'open/trayek', []);
        $data['get_trayek'] = $getTrayek['data'];

        // echo '<pre>';
        // var_dump($data['getTrayek']);

        // die;

        $this->template->load('templates/template', 'peta', $data);
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
    public function getCCTV()
    {
        $url = 'open/cctv';
        $getCCTV = guzzle_request('GET', $url, []);

        $getCCTV = $getCCTV['data'];

        $data = $getCCTV;


        echo json_encode($data);
    }
    public function getPolantas()
    {
        $url = 'open/polantas';
        $getPolantas = guzzle_request('GET', $url, []);

        $getPolantas = $getPolantas['data'];

        $data = $getPolantas;


        echo json_encode($data);
    }
    public function getFasum()
    {
        $url = 'open/fasum';
        $getFasum = guzzle_request('GET', $url, []);

        $getFasum = $getFasum['data'];

        $data = $getFasum;


        echo json_encode($data);
    }
    public function getTrayek()
    {
        $url = 'open/trayek';
        $getTrayek = guzzle_request('GET', $url, []);

        $getTrayek = $getTrayek['data'];

        $data = $getTrayek;


        echo json_encode($data);
    }
}
