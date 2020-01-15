<?php
class mGrafik extends CI_Model
{

    function get_data_stok()
    {
        $query = $this->db->query("SELECT GAJI,SUM(GRADE) AS GRADE FROM tbiodata GROUP BY GAJI");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $data) {
                $hasil[] = $data;
            }
            return $hasil;
        }
    }
}
