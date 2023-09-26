<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Templates extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
        $this->load->helper('tanggal_helper');
    }

    public function loadTemplate($page_content)
    {
        $data["page_content"] = $page_content["page"];
        $data["css"] = $page_content["css"];
        $data["js"] = $page_content["js"];
        $data["title"] = $page_content["title"];
        $data["head"] = $page_content["head"];
        $data["breadcrumb"] = $page_content["breadcrumb"];
        $data["data"] = $page_content["data"];

        $data['admin'] = $this->session->userdata['name'];

        $this->load->view("templates/template_admin", $data);
    }
}
