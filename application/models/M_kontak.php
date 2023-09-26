<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_kontak extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function get_datatables($postData = null)
    {

        $data = array();

        $result = guzzle_request('GET', 'open/polantas', []);

        // echo "<pre>";
        // var_dump($result);
        // echo "<pre>";
        // die;

        $no = 1;

        foreach ($result["data"] as $field) {
            // echo "<pre>";
            // var_dump($field);
            // echo "<pre>";
            // die;
            $row = array();
            // $row ['id']	=  $field['id']; 
            $row['No']      =  $no++;
            $row['Nama Polantas']    = $field['name_polantas'];
            $row['Alamat']    = $field['address'];
            $row['Kontak']    = '<a href="tel:' . $field['contact_polantas'] . '"><i class="bi bi-telephone-fill"></i> ' . $field['contact_polantas'] . '</a>';

            $data[] = $row;
        }
        return $data;
        // var_dump($data);
        // die;
    }
}
