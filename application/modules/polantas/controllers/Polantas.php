<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Polantas extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->model('polantas/m_polantas');
    }

    public function index()
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Polantas | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Polisi Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "Polantas";
        $page_content["page"] = "polantas/polantas_view";

        $getKategori = guzzle_request('GET', 'polantas_category' . '?token=' . $token, []);

        $data['getKategori'] = $getKategori['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_polantas->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }

    public function detail_polantas($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Polantas | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Polisi Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "Polantas";
        $page_content["page"] = "polantas/polantas_detail";

        $getDetail = guzzle_request('GET', 'polantas/' . $id . '?token=' . $token, []);

        $data['getDetails'] = $getDetail['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function edit_polantas($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Polantas | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Polisi Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "Polantas";
        $page_content["page"] = "polantas/polantas_edit";

        $getDetail = guzzle_request('GET', 'polantas/' . $id . '?token=' . $token, []);
        $getKategori = guzzle_request('GET', 'polantas_category' . '?token=' . $token, []);

        $data['getDetails'] = $getDetail['data'];
        $data['getKategori'] = $getKategori['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function tambah()
    {
        $token = $this->session->userdata['token'];
        $input = $this->input->post();
        if ($_FILES['image']['name']) {
            $path = $_FILES['image']['tmp_name'];
            $filename = $_FILES['image']['name'];
            $formData = [
                [
                    'name' => 'image_polantas',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'name_polantas',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_polantas',
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
                    'name' => 'contact_polantas',
                    'contents' => $input['kontak'],
                ],

            ];
        } else {
            $formData = [
                [
                    'name' => 'name_polantas',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_polantas',
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
                    'name' => 'contact_polantas',
                    'contents' => $input['kontak'],
                ],

            ];
        }

        $data = guzzle_request('POST', 'polantas?token=' . $token, [
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
        if ($_FILES['image']['name']) {
            $path = $_FILES['image']['tmp_name'];
            $filename = $_FILES['image']['name'];
            $formData = [
                [
                    'name' => 'image_polantas',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'name_polantas',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_polantas',
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
                    'name' => 'contact_polantas',
                    'contents' => $input['kontak'],
                ],
            ];
        } else {
            $formData = [
                [
                    'name' => 'name_polantas',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_polantas',
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
                    'name' => 'contact_polantas',
                    'contents' => $input['kontak'],
                ],
            ];
        }

        $data = guzzle_request('POST', 'polantas/' . $input['id'] . '?token=' . $token, [
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
        $id = $this->input->post('id_polantas');

        $getDetail = guzzle_request('GET', 'polantas/' . $id . '?token=' . $token, []);


        $getKategori = guzzle_request('GET', 'polantas_category' . '?token=' . $token, []);


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

        $id = $this->input->post('id_polantas');

        $data = guzzle_request('DELETE', 'polantas/' . $id . '?token=' . $token, []);

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
