<?php

class cPegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mPegawai');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pegawai';
        // Pagination
        $this->load->library('pagination');
        // Config
        $config['base_url']     = 'http://localhost/crudKepegawaian/cPegawai/index';
        $config['total_rows']   = $this->mPegawai->countAllPegawai();
        $config['per_page']     = 10;
        // styling
        $config['full_tag_open']   = '<nav aria-label="Page navigation example"><ul class="pagination justify-content-center">';
        $config['full_tag_close']  = '</ul></nav>';

        $config['first_link']      = 'First';
        $config['first_tag_open']  = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link']       = 'Last';
        $config['last_tag_open']   = '<li class="page-item">';
        $config['last_tag_close']  = '</li>';

        $config['next_link']       = '&raquo';
        $config['next_tag_open']   = '<li class="page-item">';
        $config['next_tag_close']  = '</li>';

        $config['prev_link']       = '&laquo';
        $config['prev_tag_open']   = '<li class="page-item">';
        $config['prev_tag_close']  = '</li>';

        $config['cur_tag_open']    = '<li class="page-item active"><a class="page-link" href="#" tabindex="-1" aria="true">';
        $config['cur_tag_close']   = '</a></li>';

        $config['num_tag_open']    = '<li class="page-item">';
        $config['num_tag_close']   = '</li>';

        $config['attributes']      = ['class' => 'page-link'];
        // Initialize
        $this->pagination->initialize($config);
        // __________
        $data['start'] = $this->uri->segment(3);
        $data['pegawai'] = $this->mPegawai->getAllPegawai($config['per_page'], $data['start']);
        if ($this->input->post('search')) {
            $data['pegawai'] = $this->mPegawai->searchDataPegawai();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('vPegawai/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pegawai';

        $this->form_validation->set_rules('NAMA', 'Nama', 'required');
        $this->form_validation->set_rules('ALAMAT', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('vPegawai/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->mPegawai->tambahDataPegawai();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('cPegawai');
        }
    }

    public function hapus($ID)
    {
        $this->mPegawai->hapusDataPegawai($ID);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('cPegawai');
    }

    public function detail($ID)
    {
        $data['judul'] = 'Detail Data Pegawai';
        $data['pegawai'] = $this->mPegawai->getPegawaiByNama($ID);
        $this->load->view('templates/header', $data);
        $this->load->view('vPegawai/detail', $data);
        $this->load->view('templates/footer');
    }


    public function ubah($ID)
    {
        $data['judul'] = 'Form Ubah Data Pegawai';
        $data['pegawai'] = $this->mPegawai->getPegawaiByNama($ID);
        $data['jeniskelamin'] = ['LAKI-LAKI', 'PEREMPUAN'];

        $this->form_validation->set_rules('NAMA', 'Nama', 'required');
        $this->form_validation->set_rules('ALAMAT', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('vPegawai/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->mPegawai->ubahDataPegawai();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('cPegawai');
        }
    }

    public function cetak()
    {
        ob_start();
        $data['PDF'] = $this->mPegawai->halamanPDF();
        $this->load->view('print', $data);
        $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
        $pdf = new HTML2PDF('L', 'F4', 'en');
        $pdf->WriteHTML($html);
        $pdf->Output('Data.pdf', 'D');
    }

    public function halaman()
    {
        $data['judul'] = 'PDF Daftar Pegawai';
        $data['PDF'] = $this->mPegawai->halamanPDF();

        $this->load->view('templates/header', $data);
        $this->load->view('print', $data);
        $this->load->view('templates/footer');
    }
}
