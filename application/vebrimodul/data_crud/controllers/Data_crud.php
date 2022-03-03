<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_crud extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_Data_crud');

        //Cek Apakah Sudah Login?
        if ($this->session->userdata('is_login') == false) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = array(
            'namamodule'        => "data_crud",
            'namafileview'      => "v_data_crud",
            'title'             => "Data CRUD",
            'tampilData'        => $this->M_Data_crud->tampilData(),
        );
        echo Modules::run('template/AdminTemplate', $data);
    }

    public function Tambah()
    {
        $this->M_Data_crud->Tambah();
        // $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('data_crud');
    }

    public function Edit()
    {
        $this->M_Data_crud->Edit();
        // $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('data_crud');
    }

    public function Hapus($id)
    {
        $this->M_Data_crud->Hapus($id);
        // $this->session->set_flashdata('simpan-data', 'simpan_data();');

        redirect('data_crud');
    }
}
