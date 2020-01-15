<?php

class mPegawai extends CI_model
{
    public function getAllPegawai($limit, $start)
    {
        return $this->db->get('tbiodata', $limit, $start)->result_array();
    }

    public function countAllPegawai()
    {
        return $this->db->get('tbiodata')->num_rows();
    }

    public function tambahDataPegawai()
    {
        $data = [
            "NAMA" => $this->input->post('NAMA', true),
            "NIP" => $this->input->post('NIP', true),
            "TTL" => $this->input->post('TTL', true),
            "JK" => $this->input->post('JK', true),
            "ALAMAT" => $this->input->post('ALAMAT', true),
            "GRADE" => $this->input->post('GRADE', true),
            "FOTO" => $this->_uploadImage()
        ];

        $this->db->insert('tbiodata', $data);
    }

    public function hapusDataPegawai($ID)
    {
        $this->db->delete('tbiodata', ['ID' => $ID]);
    }

    public function getPegawaiByNama($ID)
    {
        return $this->db->get_where('tbiodata', ['ID' => $ID])->row_array();
    }

    public function ubahDataPegawai()
    {
        $data = [
            "NAMA" => $this->input->post('NAMA', true),
            "NIP" => $this->input->post('NIP', true),
            "TTL" => $this->input->post('TTL', true),
            "JK" => $this->input->post('JK', true),
            "ALAMAT" => $this->input->post('ALAMAT', true),
            // "FOTO" => $this->input->post('FOTO', true),
            "GRADE" => $this->input->post('GRADE', true),
        ];

        $this->db->where('ID', $this->input->post('ID'));
        $this->db->update('tbiodata', $data);
    }

    public function searchDataPegawai()
    {
        $cari = $this->input->post('search', true);
        $this->db->like('NAMA', $cari);
        $this->db->or_like('NIP', $cari);
        $this->db->or_like('JK', $cari);
        $this->db->or_like('TTL', $cari);
        $this->db->or_like('ALAMAT', $cari);
        $this->db->or_like('GAJI', $cari);
        return $this->db->get('tbiodata')->result_array();
    }

    private function _uploadImage()
    {
        $config['upload_path']          = './upload/pegawai/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['overwrite']            = true;
        $config['max_size']             = 4096;
        // 1MB
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('FOTO')) {
            return $this->upload->data("file_name");
        }
    }

    public function halamanPDF()
    {
        return $this->db->get('tbiodata')->result_array();
    }
}
