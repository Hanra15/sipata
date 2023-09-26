<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->model('trayek/m_kategori');
    }

    public function index()
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Kategori Trayek | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Trayek Angkutan Umum Kota Bogor";
        $page_content["breadcrumb"] = "Kategori";
        $page_content["page"] = "trayek/kategori_view";

        $getKategori = guzzle_request('GET', 'trayek_category' . '?token=' . $token, []);

        $data['getKategori'] = $getKategori['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_kategori->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }

    public function tambah()
    {
        $token = $this->session->userdata['token'];
        $input = $this->input->post();
        $formData = [
            [
                'name' => 'name_category',
                'contents' => $input['kategori'],
            ],

        ];

        $data = guzzle_request('POST', 'trayek_category?token=' . $token, [
            'multipart' => $formData,
        ]);

        // var_dump($data);
        // die;


        if ($data['success'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil tambah data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal tambah data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function edit()
    {
        $token = $this->session->userdata['token'];
        $input = $this->input->post();
        $kategori = $input['kategori'];


        $data = guzzle_request('PUT', 'trayek_category/' . $input['id'] . '?token=' . $token . '&name_category=' . $kategori, []);

        // var_dump($data);
        // echo json_encode($data);
        // die;

        if ($data['success'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil edit data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal edit data.',
                'data' => $data
            );
        }

        echo json_encode($res);
    }

    public function detail()
    {
        $token = $this->session->userdata['token'];
        $id = $this->input->post('id_trayek');

        $getDetail = guzzle_request('GET', 'trayek_category/' . $id . '?token=' . $token, []);
        $data = $getDetail['data'];
        // var_dump($data['getDetail']);
        // die;

        echo json_encode($data);
    }

    public function hapus()
    {
        $token = $this->session->userdata['token'];

        $id = $this->input->post('id_kategori');

        $data = guzzle_request('DELETE', 'trayek_category/' . $id . '?token=' . $token, []);

        if ($data['success'] == true) {
            $res = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $res = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($res);

        // var_dump($data);
        // die;
    }
}
