<?php

defined('BASEPATH') or exit('No direct script access allowed');


class M_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('guzzle_request_helper');
    }

    public function get_datatables($postData = null)
    {
        $data = array();

        $result = guzzle_request('GET', 'user');

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
            $row['Nama']    = $field['name'];
            $row['Email']   = $field['email'];
            $row['Username']    = $field['username'];
            $row['Password']    = $field['password'];
            $row['Aksi']  = '
                <button type="button" class="btn btn-warning mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#EditModal">
                <i class="bi bi-pencil-square"></i>
                </button>
                <button type="button" class="btn btn-danger mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#HapusModal">
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
