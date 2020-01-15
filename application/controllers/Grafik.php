<?php
class Grafik extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mGrafik');
    }
    function index()
    {
        $data['judul'] = 'Grafik';
        $x['data'] = $this->mGrafik->get_data_stok();
        $this->load->view('templates/header', $data);
        $this->load->view('vGrafik', $x);
        $this->load->view('templates/footer');
    }
}
