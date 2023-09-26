<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user/m_user');
    }

    public function index()
    {
        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "Admin | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["head"] = "Administrator";
        $page_content["breadcrumb"] = "Admin";
        $page_content["page"] = "user/user_view";

        $page_content["data"] = "";

        $this->templates->loadTemplate($page_content);
    }
    public function serverSideTable()
    {
        $postData = $this->input->post();
        $data = $this->m_user->get_datatables($postData);
        // echo '<pre>';
        // var_dump($data);
        // die;
        // echo '</pre>';
        echo json_encode($data);
    }


    public function userAlt()
    {
        $page_content["css"] = "";
        $page_content["js"] = "";
        $page_content["title"] = "User | SIJAB - Sistem Informasi Jalan Raya Kota Bogor";
        $page_content["breadcrumb"] = "User";
        $page_content["page"] = "user/user_view_alt";

        $page_content["data"] = "";

        $this->templates->loadTemplate($page_content);
    }
}
