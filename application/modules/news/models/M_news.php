<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_news extends CI_Model
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

        $result = guzzle_request('GET', 'news?token=' . $token, []);

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
            $row['Author']   = $field['author'];
            $row['Tanggal Berita']    = $field['date_news'];
            // $row['Sumber']    = $field['source'];
            $row['Aksi']  = '
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-gear"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <button type="button" class="btn btn-primary text-primary dropdown-item" id="btnDetail" data-bs-toggle="modal" onclick="detail(`' . $field['id'] . '`)" data-bs-target="#DetailModal">
                            <i class="bi bi-eye-fill"></i> Detail
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-success text-success dropdown-item" data-bs-toggle="modal" onclick="edit(`' . $field['id'] . '`)" data-bs-target="#EditModal">
                            <i class="bi bi-pencil-square"></i> Edit
                            </button>
                        </li>
                        <li>
                            <button type="button" class="btn btn-danger text-danger dropdown-item" id="HapusData" onclick="hapus(`' . $field['id'] . '`)">
                            <i class="bi bi-trash-fill"></i> Hapus
                            </button>
                        </li>
                    </ul>
                </div>
            ';

            $data[] = $row;
        }
        return $data;
        // var_dump($data);
        // die;
    }
}
