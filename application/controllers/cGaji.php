<?php
class cGaji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('mGaji');
        $this->load->library('form_validation');
        $this->load->helper(['form', 'url']);
    }

    public function index()
    {
        $data['judul'] = 'Data Gaji Pegawai';
        // Pagination
        $this->load->library('pagination');
        // Config
        $config['base_url']     = 'http://localhost/crudKepegawaian/cGaji/index';
        $config['total_rows']   = $this->mGaji->signAllGaji();
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

        $config['attributes']      = array('class' => 'page-link');
        // Initialize
        $this->pagination->initialize($config);
        // __________
        $data['start'] = $this->uri->segment(3);
        $data['gaji'] = $this->mGaji->getAllGaji($config['per_page'], $data['start']);
        if ($this->input->post('search')) {
            $data['gaji'] = $this->mGaji->cariDataGaji();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('vGaji/index', $data);
        $this->load->view('templates/footer');
    }

    public function detailgj($ID)
    {
        $data['judul'] = 'Detail Data Pegawai';
        $data['gaji'] = $this->mGaji->getGajiByNama($ID);
        $this->load->view('templates/header', $data);
        $this->load->view('vGaji/detailgaji', $data);
        $this->load->view('templates/footer');
    }

    public function tambahgj($ID)
    {
        $data['judul'] = 'Form Isi Gaji Pegawai';
        $data['gaji'] = $this->mGaji->getGajiByNama($ID);
        $this->form_validation->set_rules('GAJI', 'gaji', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('vGaji/tgaji');
            $this->load->view('templates/footer');
        } else {
            $this->mGaji->tambahGajiPegawai();
            $this->session->set_flashdata('flash', 'Gaji Ditambahkan');
            redirect('cGaji');
        }
    }
}
