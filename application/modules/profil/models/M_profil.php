<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_profil extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function get_datatables($postData = null)
    {
        $token = $this->session->userdata['token'];
        $data = array();

        $result = guzzle_request('GET', 'newspagenation?token=' . $token, []);

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
            $row['Judul Berita']    = $field['title'];
            $row['Sumber Berita']   = $field['source'];
            $row['Tanggal Berita']    = $field['date_news'];
            // $row['Sumber']    = $field['source'];
            $row['Aksi']  = '
                <button type="button" class="btn btn-primary mt-3 mb-3 btn-sm" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target="#DetailModal">
                <i class="bi bi-eye-fill"></i>
                </button>
                <button type="button" class="btn btn-warning mt-3 mb-3 btn-sm" data-bs-toggle="modal" onclick="edit(`' . $field['id'] . '`)" data-bs-target="#EditModal">
                <i class="bi bi-pencil-square"></i>
                </button>
                <button type="button" class="btn btn-danger mt-3 mb-3 btn-sm" id="HapusData" onclick="hapus(`' . $field['id'] . '`)">
                <i class="bi bi-trash"></i>
                </button>
            ';

            $data[] = $row;
        }
        return $data;
        // var_dump($data);
        // die;
    }
}
