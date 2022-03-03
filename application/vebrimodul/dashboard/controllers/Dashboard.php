<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        // model
        $this->load->model('M_Dashboard');

        //Cek Apakah Sudah Login?
        if ($this->session->userdata('is_login') == false) {
            redirect('login');
        }
    }

    public function index()
    {
        $data = array(
            'namamodule'     => "dashboard",
            'namafileview'     => "v_dashboard",
            'title'      => "Dashboard",
        );
        echo Modules::run('template/AdminTemplate', $data);
    }
}
