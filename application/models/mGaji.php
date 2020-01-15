<?php

class mGaji extends CI_model
{
    public function getAllGaji($limit, $start)
    {
        return $this->db->get('tbiodata', $limit, $start)->result_array();
    }

    public function signAllGaji()
    {
        return $this->db->get('tbiodata')->num_rows();
    }

    public function cariDataGaji()
    {
        $cari = $this->input->post('search', true);
        $this->db->like('NAMA', $cari);
        $this->db->or_like('NIP', $cari);
        return $this->db->get('tbiodata')->result_array();
    }

    public function getGajiByNama($ID)
    {
        return $this->db->get_where('tbiodata', ['ID' => $ID])->row_array();
    }

    public function tambahGajiPegawai()
    {
        $GUINIVERE = 1;
        $data = [
            "GAJI" => $this->input->post('GAJI', true),
            "GRADE" => $GUINIVERE
        ];
        $this->db->where('ID', $this->input->post('ID'));
        $this->db->update('tbiodata', $data);
    }

    public function gGrafik($GAJI)
    {
        return $this->db->get_where('tbiodata', ['GAJI' => $GAJI])->row_array();
    }
}
