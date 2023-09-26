<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_cctv extends CI_Model
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

        $result = guzzle_request('GET', 'cctv?token=' . $token, []);

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
            $row['CCTV']    = $field['name_cctv'];
            $row['Alamat CCTV']   = $field['address_cctv'];
            $row['Latitude']    = $field['lat_cctv'];
            $row['Longitude']    = $field['lng_cctv'];
            $row['aksi'] = '
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-gear"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item text-primary" href="' . base_url() . 'cctv/Cctv/detail_cctv/' . $field['id'] . '"><i class="bi bi-eye-fill"></i> Detail</a></li>
                    <li><a class="dropdown-item text-success" href="' . base_url() . 'cctv/Cctv/edit_cctv/' . $field['id'] . '"><i class="bi bi-pencil-square"></i> Edit</a></li>
                    <li><button type="button" id="btnHapus" class="btn btn-danger text-danger dropdown-item" onclick="hapus(' . $field['id'] . ')"><i class="bi bi-trash-fill"></i> Hapus</button></li>
                </ul>
            </div>
            ';
            // $row['Aksi']  = '
            // <button type="button" class="btn btn-primary mt-3 mb-3 btn-sm" id="btnDetail" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target="#DetailModal">
            // <i class="bi bi-eye-fill"></i>
            // </button>
            // <button type="button" class="btn btn-warning mt-3 mb-3 btn-sm" data-bs-toggle="modal" onclick="edit(`' . $field['id'] . '`)" data-bs-target="#EditModal">
            // <i class="bi bi-pencil-square"></i>
            // </button>
            // <button type="button" class="btn btn-danger mt-3 mb-3 btn-sm" id="HapusData" onclick="hapus(`' . $field['id'] . '`)">
            // <i class="bi bi-trash"></i>
            // </button>
            // ';

            $data[] = $row;
        }
        return $data;
        // var_dump($data);
        // die;
    }
}
