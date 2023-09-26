<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Fasum extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->model('fasum/m_fasum');
    }

    public function index()
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Fasilitas Umum | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Fasilitas Umum Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "Fasilitas";
        $page_content["page"] = "fasum/fasum_view";

        $getKategori = guzzle_request('GET', 'fasum_category' . '?token=' . $token, []);

        $data['getKategori'] = $getKategori['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_fasum->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }

    public function detail_fasum($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Fasilitas Umum | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Fasilitas Umum Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "Fasilitas Umum";
        $page_content["page"] = "fasum/fasum_detail";

        $getDetail = guzzle_request('GET', 'fasum/' . $id . '?token=' . $token, []);

        $data['getDetails'] = $getDetail['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function edit_fasum($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Fasilitas Umum | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Fasilitas Umum Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "Fasilitas Umum";
        $page_content["page"] = "fasum/fasum_edit";

        $getDetail = guzzle_request('GET', 'fasum/' . $id . '?token=' . $token, []);
        $getKategori = guzzle_request('GET', 'fasum_category' . '?token=' . $token, []);

        $data['getDetails'] = $getDetail['data'];
        $data['getKategori'] = $getKategori['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function tambah()
    {
        $token = $this->session->userdata['token'];
        $input = $this->input->post();
        // var_dump($_FILES['image']['name']);
        // die;
        if ($_FILES['image']['name']) {
            $path = $_FILES['image']['tmp_name'];
            $filename = $_FILES['image']['name'];
            $formData = [
                [
                    'name' => 'image_fasum',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'name_fasum',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_fasum',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'latitude',
                    'contents' => $input['latitude'],
                ],
                [
                    'name' => 'longitude',
                    'contents' => $input['longitude'],
                ],
                [
                    'name' => 'open_time',
                    'contents' => $input['open'],
                ],
                [
                    'name' => 'close_time',
                    'contents' => $input['close'],
                ],
                [
                    'name' => 'contact_fasum',
                    'contents' => $input['kontak'],
                ],
            ];
        } else {
            $formData = [
                [
                    'name' => 'name_fasum',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_fasum',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'latitude',
                    'contents' => $input['latitude'],
                ],
                [
                    'name' => 'longitude',
                    'contents' => $input['longitude'],
                ],
                [
                    'name' => 'open_time',
                    'contents' => $input['open'],
                ],
                [
                    'name' => 'close_time',
                    'contents' => $input['close'],
                ],
                [
                    'name' => 'contact_fasum',
                    'contents' => $input['kontak'],
                ],
            ];
        }

        // var_dump($_FILES['image']['name']);
        // die;

        $data = guzzle_request('POST', 'fasum?token=' . $token, [
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
        // var_dump($_FILES);
        // die;
        if ($_FILES['image']['name']) {
            $path = $_FILES['image']['tmp_name'];
            $filename = $_FILES['image']['name'];
            $formData = [
                [
                    'name' => 'image_fasum',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'name_fasum',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_fasum',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'latitude',
                    'contents' => $input['latitude'],
                ],
                [
                    'name' => 'longitude',
                    'contents' => $input['longitude'],
                ],
                [
                    'name' => 'open_time',
                    'contents' => $input['open'],
                ],
                [
                    'name' => 'close_time',
                    'contents' => $input['close'],
                ],
                [
                    'name' => 'contact_fasum',
                    'contents' => $input['kontak'],
                ],
            ];
        } else {
            $formData = [
                [
                    'name' => 'name_fasum',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_fasum',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'address',
                    'contents' => $input['address'],
                ],
                [
                    'name' => 'latitude',
                    'contents' => $input['latitude'],
                ],
                [
                    'name' => 'longitude',
                    'contents' => $input['longitude'],
                ],
                [
                    'name' => 'open_time',
                    'contents' => $input['open'],
                ],
                [
                    'name' => 'close_time',
                    'contents' => $input['close'],
                ],
                [
                    'name' => 'contact_fasum',
                    'contents' => $input['kontak'],
                ],
            ];
        }

        $data = guzzle_request('POST', 'fasum/' . $input['id'] . '?token=' . $token, [
            'multipart' => $formData,
        ]);

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
        $id = $this->input->post('id_fasum');

        $getDetail = guzzle_request('GET', 'fasum/' . $id . '?token=' . $token, []);


        $getKategori = guzzle_request('GET', 'fasum_category' . '?token=' . $token, []);


        $data = [
            'getDetail' => $getDetail['data'],
            'getKategori' => $getKategori['data']
        ];

        // var_dump($data['getDetail']);
        // die;

        echo json_encode($data);
    }

    public function hapus()
    {
        $token = $this->session->userdata['token'];

        $id = $this->input->post('id_fasum');

        $data = guzzle_request('DELETE', 'fasum/' . $id . '?token=' . $token, []);

        if ($data['success'] == true) {
            $results = array(
                'status' => true,
                'message' => 'Berhasil hapus data.',
                'data' => $data
            );
        } else {
            $results = array(
                'status' => false,
                'message' => 'Gagal hapus data.',
                'data' => $data
            );
        }

        echo json_encode($results);

        // var_dump($data);
        // die;
    }
}
