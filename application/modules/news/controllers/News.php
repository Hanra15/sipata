<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->model('news/m_news');
    }

    public function index()
    {
        $token = $this->session->userdata['token'];

        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Berita | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Berita Lalu Lintas Kota Bogor";
        $page_content["breadcrumb"] = "Berita";
        $page_content["page"] = "news/news_view";

        $page_content["data"] = "";

        $this->templates->loadTemplate($page_content);
    }

    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_news->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }

    public function tambah()
    {
        $token = $this->session->userdata['token'];
        $author = $this->session->userdata['user'];
        $input = $this->input->post();
        // var_dump($input);
        // die;
        $path = $_FILES['news_image']['tmp_name'];
        $filename = $_FILES['news_image']['name'];
        $formData = [
            [
                'name' => 'news_image',
                'contents' => fopen($path, 'r'),
                'filename' => $filename,
            ],
            [
                'name' => 'title',
                'contents' => $input['title'],
            ],
            [
                'name' => 'date_news',
                'contents' => $input['date_news'],
            ],
            [
                'name' => 'source',
                'contents' => $input['source'],
            ],
            [
                'name' => 'content',
                'contents' => $input['content'],
            ],
            [
                'name' => 'author',
                'contents' => $author,
            ],
        ];

        $data = guzzle_request('POST', 'news?token=' . $token, [
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
        $author = $this->session->userdata['user'];
        $input = $this->input->post();
        if ($_FILES['news_image']['name']) {
            $path = $_FILES['news_image']['tmp_name'];
            $filename = $_FILES['news_image']['name'];
            $formData = [
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'date_news',
                    'contents' => $input['date_news'],
                ],
                [
                    'name' => 'source',
                    'contents' => $input['source'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $author,
                ],
                [
                    'name' => 'news_image',
                    'contents' => fopen($path, 'r'),
                    'filename' => $filename,
                ],
            ];
        } else {
            $formData = [
                [
                    'name' => 'title',
                    'contents' => $input['title'],
                ],
                [
                    'name' => 'date_news',
                    'contents' => $input['date_news'],
                ],
                [
                    'name' => 'source',
                    'contents' => $input['source'],
                ],
                [
                    'name' => 'content',
                    'contents' => $input['content'],
                ],
                [
                    'name' => 'author',
                    'contents' => $author,
                ],
            ];
        }

        $data = guzzle_request('POST', 'news/' . $input['id'] . '?token=' . $token, [
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
        $id = $this->input->post('id_berita');

        $getDetail = guzzle_request('GET', 'news/' . $id . '?token=' . $token, []);
        $data['getDetail'] = $getDetail['data'][0];

        // var_dump($data['getDetail']);
        // die;

        echo json_encode($data['getDetail']);
    }

    public function hapus()
    {
        $token = $this->session->userdata['token'];

        $id = $this->input->post('id_berita');

        $data = guzzle_request('DELETE', 'news/' . $id . '?token=' . $token, []);

        if ($data['status'] == "success") {
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
