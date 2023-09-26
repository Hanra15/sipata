<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('profil/m_profil');
    }

    public function index()
    {
        $token = $this->session->userdata['token'];
        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Administrator | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Administrator";
        $page_content["breadcrumb"] = "Profil";
        $page_content["page"] = "profil/profil_view";

        $getUser = guzzle_request('GET', 'user/1?token=' . $token, []);
        $data['get_user'] = $getUser['data'];

        // var_dump($data['get_user']);
        // die;

        $page_content["data"] = $data;

        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_profil->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }

    public function edit()
    {
        $token = $this->session->userdata['token'];
        $input = $this->input->post();
        $formData = [
            [
                'name' => 'name',
                'contents' => $input['name'],
            ],
            [
                'name' => 'new_email',
                'contents' => $input['email'],
            ],
            [
                'name' => 'username',
                'contents' => $input['user'],
            ],
            [
                'name' => 'password',
                'contents' => $input['old'],
            ],
            [
                'name' => 'new_password',
                'contents' => $input['new'],
            ],
        ];

        // var_dump($formData);
        // die;

        $data = guzzle_request('POST', 'user?token=' . $token, [
            'multipart' => $formData,
        ]);


        if ($data['code'] == 200) {
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
}
