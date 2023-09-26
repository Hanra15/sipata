<?php
/* Parent Controller for our moduler based Controllers */
require APPPATH . "third_party/MX/Controller.php";
class MY_Controller extends MX_Controller
{
    public $_headers;
    public function __construct()
    {
        parent::__construct();
        $this->load->module("templates");
        date_default_timezone_set('Asia/Jakarta');
    }
}
