<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Data_crud_image extends CI_Model
{
    private $_table = "tbl_data_crud_image";

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    function tampilData()
    {
        $this->db->select('tbl_data_crud_image.*, ')
            ->from('tbl_data_crud_image')
            ->order_by('tbl_data_crud_image.id', 'DESC');
        return $this->db->get();
    }

    function Tambah()
    {
        if (!empty($_FILES["images"]["name"])) {
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('email'),
                'nomor_telp' => $this->input->post('nomor_telp'),
                'alamat' => $this->input->post('alamat'),
                'images' => $this->_uploadImage(),
                'status' => $this->input->post('status'),
                'created_on' => date('Y-m-d H:i:s'),
            ];
        } else {
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('email'),
                'nomor_telp' => $this->input->post('nomor_telp'),
                'alamat' => $this->input->post('alamat'),
                'status' => $this->input->post('status'),
                'created_on' => date('Y-m-d H:i:s'),
            ];
        }
        $this->db->insert($this->_table, $data);
    }

    function Edit()
    {
        if (!empty($_FILES["images"]["name"])) {

            $nm_images = $this->input->post('images_lama');
            $this->_deleteImageLama($nm_images);

            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('email'),
                'nomor_telp' => $this->input->post('nomor_telp'),
                'alamat' => $this->input->post('alamat'),
                'images' => $this->_uploadImage(),
                'status' => $this->input->post('status'),
                'update_at' => date('Y-m-d H:i:s'),
            ];
        } else {
            $data = [
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'email' => $this->input->post('email'),
                'nomor_telp' => $this->input->post('nomor_telp'),
                'alamat' => $this->input->post('alamat'),
                'status' => $this->input->post('status'),
                'update_at' => date('Y-m-d H:i:s'),
            ];
        }
        $this->db->where('id', $this->input->post('query_id'))->update($this->_table, $data);
    }

    function Hapus($id)
    {
        $this->_deleteImage($id);
        $this->db->where('id', $id)->delete($this->_table);
    }

    private function _uploadImage()
    {
        $config['upload_path']          = 'assets/upload/images/data_crud_image/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = "PHOTO_" . time();
        $config['overwrite']            = true;
        $config['max_size']             = 5120; // 5MB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('images')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }

    private function _deleteImageLama($nm_images)
    {
        if ($nm_images != "default.jpg") {
            $filename = explode(".", $nm_images)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/images/data_crud_image/$filename.*"));
        }
    }

    private function _deleteImage($id)
    {
        $data_foto = $this->getById($id);
        if ($data_foto->images != "default.jpg") {
            $filename = explode(".", $data_foto->images)[0];
            return array_map('unlink', glob(FCPATH . "assets/upload/images/data_crud_image/$filename.*"));
        }
    }
}
