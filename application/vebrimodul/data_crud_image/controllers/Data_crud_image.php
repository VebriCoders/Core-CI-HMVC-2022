<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_crud_image extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_Data_crud_image');

        //Cek Apakah Sudah Login?
        if ($this->session->userdata('is_login') == false) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = array(
            'namamodule'        => "data_crud_image",
            'namafileview'      => "v_data_crud_image",
            'title'             => "Data CRUD Image",
            'tampilData'        => $this->M_Data_crud_image->tampilData(),
        );
        echo Modules::run('template/AdminTemplate', $data);
    }

    public function Tambah()
    {
        $this->M_Data_crud_image->Tambah();
        // $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('data_crud_image');
    }

    public function Edit()
    {
        $this->M_Data_crud_image->Edit();
        // $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('data_crud_image');
    }

    public function Hapus($id)
    {
        $this->M_Data_crud_image->Hapus($id);
        // $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('data_crud_image');
    }
}
