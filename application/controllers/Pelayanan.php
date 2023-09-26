<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan extends MX_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->helper('tanggal_helper');
    }

    public function peta()
    {
        $data['title'] = "Peta Lalu Lintas | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $data['heading'] = "Peta Lalu Lintas Kota Bogor";
        $data['breadcrumb'] = "Peta";

        $getTrayek = guzzle_request('GET', 'open/trayek', []);
        $data['get_trayek'] = $getTrayek['data'];

        // echo '<pre>';
        // var_dump($data['get_trayek']);
        // die;

        $this->load->view('peta', $data);
    }

    public function cctv()
    {
        $data['title'] = "CCTV | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $data['heading'] = "CCTV Lalu Lintas Kota Bogor";
        $data['breadcrumb'] = "CCTV";

        $getCCTV = guzzle_request('GET', 'open/cctv', []);
        $data['getCCTV'] = $getCCTV['data'];

        $this->load->view('cctv_fullscreen', $data);

        // $this->template->load('templates/template', 'cctv', $data);
    }

    public function getCCTV()
    {
        $url = 'open/cctv';
        $getCCTV = guzzle_request('GET', $url, []);

        $getCCTV = $getCCTV['data'];

        $data = $getCCTV;


        echo json_encode($data);
    }
}
