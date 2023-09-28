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
        $data['title'] = "Peta Wisata | SIPATA - Sistem Informasi Kabupaten Tanggerang";
        $data['heading'] = "Peta Wisata Kab. Tanggerang";
        $data['breadcrumb'] = "Peta";
        $data['page'] = "peta";

        $datapost = $this->input->post();

        if (isset($datapost['cari'])) {
            $data['cari'] = '1';
            $data['latitude'] = $datapost['latitude'];
            $data['longitude'] = $datapost['longitude'];
            $data['budget'] = $datapost['budget'];

            $data['datalist'] = guzzle_request('GET', 'open/sloc?latitude=' . $data['latitude'] . '&longitude=' . $data['longitude'] . '&budget=' . $data['budget'] . '', []);
        } else {
            $data['cari'] = '0';
            $data['latitude'] = '';
            $data['longitude'] = '';
            $data['budget'] = '';
        }

        $this->load->view('peta', $data);
    }

    public function pariwisata()
    {
        $data['title'] = "Destinasi Wisata | SIPATA - Sistem Informasi Kabupaten Tanggerang";
        $data['heading'] = "Destinasi Wisata Kab. Tanggerang";
        $data['breadcrumb'] = "Pariwisata";
        $data['page'] = "pariwisata";

        $getFasum = guzzle_request('GET', 'open/fasum', []);
        $data['getFasum'] = $getFasum['data'];

        $this->template->load('templates/template', 'pariwisata', $data);
    }

    public function detail($id)
    {
        $data['title'] = "Detail Fasum | SIPATA - Sistem Informasi Kabupaten Tanggerang";
        $data['heading'] = "Destinasi Wisata Kab. Tanggerang";
        $data['breadcrumb'] = "Detail";
        $data['page'] = "pariwisata";

        $getFasum = guzzle_request('GET', 'open/fasum', []);
        $data['getFasum'] = $getFasum['data'];

        $detail = guzzle_request('GET', 'open/fasum/' . $id, []);
        $data['detail'] = $detail['data'];

        // var_dump($data['all_berita']);
        // die;

        $this->template->load('templates/template', 'detail-fasum', $data);
    }

    public function cctv()
    {
        $data['title'] = "CCTV | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $data['heading'] = "CCTV Lalu Lintas Kota Bogor";
        $data['breadcrumb'] = "CCTV";
        $data['page'] = "cctv";

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
