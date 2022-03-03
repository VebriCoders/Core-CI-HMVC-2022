<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Data_crud extends CI_Model
{
    private $_table = "tbl_data_crud";

    function tampilData()
    {
        $this->db->select('tbl_data_crud.*, ')
            ->from('tbl_data_crud')
            ->order_by('tbl_data_crud.id', 'DESC');
        return $this->db->get();
    }

    function Tambah()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'email' => $this->input->post('email'),
            'nomor_telp' => $this->input->post('nomor_telp'),
            'alamat' => $this->input->post('alamat'),
            'status' => $this->input->post('status'),
            'created_on' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert($this->_table, $data);
    }

    function Edit()
    {
        $data = [
            'nama_lengkap' => $this->input->post('nama_lengkap'),
            'email' => $this->input->post('email'),
            'nomor_telp' => $this->input->post('nomor_telp'),
            'alamat' => $this->input->post('alamat'),
            'status' => $this->input->post('status'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->where('id', $this->input->post('query_id'))->update($this->_table, $data);
    }

    function Hapus($id)
    {
        $this->db->where('id', $id)->delete($this->_table);
    }
}
