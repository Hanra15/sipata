<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cctv extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('cctv/m_cctv');
    }

    public function index()
    {
        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "CCTV | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "CCTV Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "CCTV";
        $page_content["page"] = "cctv/cctv_view";

        $page_content["data"] = "";

        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_cctv->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }

    public function detail_cctv($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "CCTV | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "CCTV Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "CCTV";
        $page_content["page"] = "cctv/cctv_detail";

        $getDetail = guzzle_request('GET', 'cctv/' . $id . '?token=' . $token, []);

        $data['getDetails'] = $getDetail['data'][0];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function edit_cctv($id)
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "CCTV | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "CCTV Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "CCTV";
        $page_content["page"] = "cctv/cctv_edit";

        $getDetail = guzzle_request('GET', 'cctv/' . $id . '?token=' . $token, []);

        $data['getDetails'] = $getDetail['data'][0];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function thumbnail()
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "CCTV | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "CCTV Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "CCTV";
        $page_content["page"] = "cctv/cctv_thumbnail";

        $getCctv = guzzle_request('GET', 'cctv/' . '?token=' . $token, []);

        $data['getCCTV'] = $getCctv['data'];

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function fullscreen()
    {
        $token = $this->session->userdata['token'];
        $data['admin'] = $this->session->userdata['name'];

        $data['title'] = "CCTV | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "CCTV Lalu Lintas Kota Bogor";
        $data['breadcrumb'] = "CCTV";

        $getCctv = guzzle_request('GET', 'cctv/' . '?token=' . $token, []);

        $data['getCCTV'] = $getCctv['data'];

        $this->load->view('cctv/cctv_fullscreen', $data);
    }

    public function tambah()
    {
        $token = $this->session->userdata['token'];
        $input = $this->input->post();
        $formData = [
            [
                'name' => 'name_cctv',
                'contents' => $input['name'],
            ],
            [
                'name' => 'address_cctv',
                'contents' => $input['address'],
            ],
            [
                'name' => 'lat_cctv',
                'contents' => $input['latitude'],
            ],
            [
                'name' => 'lng_cctv',
                'contents' => $input['longitude'],
            ],
            [
                'name' => 'ip_cctv',
                'contents' => $input['ip'],
            ],
            [
                'name' => 'link_cctv',
                'contents' => $input['link'],
            ],
        ];

        $data = guzzle_request('POST', 'cctv?token=' . $token, [
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
        $formData = [
            [
                'name' => 'name_cctv',
                'contents' => $input['name_cctv'],
            ],
            [
                'name' => 'address_cctv',
                'contents' => $input['address_cctv'],
            ],
            [
                'name' => 'lat_cctv',
                'contents' => $input['latitude'],
            ],
            [
                'name' => 'lng_cctv',
                'contents' => $input['longitude'],
            ],
            [
                'name' => 'ip_cctv',
                'contents' => $input['ip_cctv'],
            ],
            [
                'name' => 'link_cctv',
                'contents' => $input['link_cctv'],
            ],
        ];

        $data = guzzle_request('POST', 'cctv/' . $input['id'] . '?token=' . $token, [
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
        $id = $this->input->post('id_cctv');

        $getDetail = guzzle_request('GET', 'cctv/' . $id . '?token=' . $token, []);
        $data['getDetail'] = $getDetail['data'][0];

        // var_dump($data['getDetail']);
        // die;

        echo json_encode($data['getDetail']);
    }



    public function hapus()
    {
        $token = $this->session->userdata['token'];

        $id = $this->input->post('id_cctv');

        $data = guzzle_request('DELETE', 'cctv/' . $id . '?token=' . $token, []);

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
