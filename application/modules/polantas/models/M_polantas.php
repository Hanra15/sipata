<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_polantas extends CI_Model
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

        $result = guzzle_request('GET', 'polantas?token=' . $token, []);

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
            $row['Kategori Polantas']   = $field['category_polantas']['name_category'];
            $row['Alamat']    = $field['address'];
            $row['Kontak']    = $field['contact_polantas'];
            $row['aksi'] = '
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item text-primary" href="' . base_url() . 'polantas/Polantas/detail_polantas/' . $field['id'] . '"><i class="bi bi-eye-fill"></i> Detail</a></li>
                        <li><a class="dropdown-item text-success" href="' . base_url() . 'polantas/Polantas/edit_polantas/' . $field['id'] . '"><i class="bi bi-pencil-square"></i> Edit</a></li>
                        <li><button type="button" id="btnHapus" class="btn btn-danger text-danger dropdown-item" onclick="hapus(' . $field['id'] . ')"><i class="bi bi-trash-fill"></i> Hapus</button></li>
                    </ul>
                </div>
            ';
            // $row['aksi'] = '
            //     <button type="button" class="btn btn-primary mt-3 mb-3 btn-sm" id="btnDetail" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target="#DetailModal">
            //     <i class="bi bi-eye-fill"></i>
            //     </button>
            //     <button type="button" class="btn btn-warning mt-3 mb-3 btn-sm" data-bs-toggle="modal" onclick="edit(`' . $field['id'] . '`)" data-bs-target="#EditModal">
            //     <i class="bi bi-pencil-square"></i>
            //     </button>
            //     <button type="button" class="btn btn-danger mt-3 mb-3 btn-sm" id="HapusData" onclick="hapus(`' . $field['id'] . '`)">
            //     <i class="bi bi-trash"></i>
            //     </button>
            // ';

            $data[] = $row;
        }
        return $data;
        // var_dump($data);
        // die;
    }
}
