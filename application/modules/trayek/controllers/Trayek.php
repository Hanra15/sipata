<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trayek extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->model('trayek/m_trayek');
    }

    public function index()
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Trayek Angkutan Umum | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Trayek Angkutan Umum Kota Bogor";
        $page_content["breadcrumb"] = "Trayek";
        $page_content["page"] = "trayek/trayek_view";

        $getKategori = guzzle_request('GET', 'trayek_category' . '?token=' . $token, []);

        $data['getKategori'] = $getKategori['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_trayek->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }

    public function detail_trayek($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Trayek Angkutan Umum | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Trayek Angkutan Umum Kota Bogor";
        $page_content["breadcrumb"] = "Trayek";
        $page_content["page"] = "trayek/trayek_detail";

        $getDetail = guzzle_request('GET', 'trayek/' . $id . '?token=' . $token, []);

        $data['getDetails'] = $getDetail['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function edit_trayek($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Trayek Angkutan Umum | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Trayek Angkutan Umum Kota Bogor";
        $page_content["breadcrumb"] = "Trayek";
        $page_content["page"] = "trayek/trayek_edit";

        $getDetail = guzzle_request('GET', 'trayek/' . $id . '?token=' . $token, []);
        $getKategori = guzzle_request('GET', 'trayek_category' . '?token=' . $token, []);

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
                    'name' => 'image_trayek',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'name_trayek',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_trayek',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'option',
                    'contents' => $input['routeUtama'],
                ],
                [
                    'name' => 'region',
                    'contents' => $input['wilayah'],
                ],
                [
                    'name' => 'route',
                    'contents' => $input['rute'],
                ],

            ];
        } else {
            $formData = [
                [
                    'name' => 'name_trayek',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_trayek',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'option',
                    'contents' => $input['routeUtama'],
                ],
                [
                    'name' => 'region',
                    'contents' => $input['wilayah'],
                ],
                [
                    'name' => 'route',
                    'contents' => $input['rute'],
                ],
            ];
        }

        $data = guzzle_request('POST', 'trayek?token=' . $token, [
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
                    'name' => 'image_trayek',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
                [
                    'name' => 'name_trayek',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_trayek',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'option',
                    'contents' => $input['routeUtama'],
                ],
                [
                    'name' => 'region',
                    'contents' => $input['wilayah'],
                ],
                [
                    'name' => 'route',
                    'contents' => $input['rute'],
                ],

            ];
        } else {
            $formData = [
                [
                    'name' => 'name_trayek',
                    'contents' => $input['nama'],
                ],
                [
                    'name' => 'category_trayek',
                    'contents' => $input['kategori'],
                ],
                [
                    'name' => 'option',
                    'contents' => $input['routeUtama'],
                ],
                [
                    'name' => 'region',
                    'contents' => $input['wilayah'],
                ],
                [
                    'name' => 'route',
                    'contents' => $input['rute'],
                ],
            ];
        }

        $data = guzzle_request('POST', 'trayek/' . $input['id'] . '?token=' . $token, [
            'multipart' => $formData,
        ]);

        // var_dump($data);
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

        $getDetail = guzzle_request('GET', 'trayek/' . $id . '?token=' . $token, []);


        $getKategori = guzzle_request('GET', 'trayek_category' . '?token=' . $token, []);


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

        $id = $this->input->post('id_trayek');

        $data = guzzle_request('DELETE', 'trayek/' . $id . '?token=' . $token, []);

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
