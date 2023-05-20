<?php

class Pensiunan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pensiunan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Pensiunan';
        $data['pensiunan'] = $this->pensiunan_model->getAllpensiunan();
        if( $this->input->post('keyword') ) {
            $data['pensiunan'] = $this->pensiunan_model->cariDatapensiunan();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('pensiunan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Pensiunan';

        $this->form_validation->set_rules('nopen', 'Nopen', 'required|numeric');
        $this->form_validation->set_rules('nama_pensiunan', 'NamaPensiunan', 'required');
        $this->form_validation->set_rules('jenis_pensiun', 'JenisPensiunan', 'required');
        $this->form_validation->set_rules('nik_penerima', 'NikPenerima', 'required|numeric');
        $this->form_validation->set_rules('nama_penerima', 'NamaPenerima', 'required');
        $this->form_validation->set_rules('notelp_penerima', 'Notelp', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pensiunan/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->pensiunan_model->tambahDataPensiunan();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('pensiunan');
        }
    }

    public function hapus($id)
    {
        $this->pensiunan_model->hapusDataPensiunan($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('pensiunan');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Pensiunan';
        $data['pensiunan'] = $this->pensiunan_model->getPensiunanById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('pensiunan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Pensiun';
        $data['pensiunan'] = $this->pensiunan_model->getPensiunanById($id);
        $data['jenis_pensiun'] = ['TASPEN', 'ASABRI'];

        $this->form_validation->set_rules('nopen', 'Nopen', 'required|numeric');
        $this->form_validation->set_rules('nama_pensiunan', 'NamaPensiunan', 'required');
        $this->form_validation->set_rules('jenis_pensiun', 'JenisPensiunan', 'required');
        $this->form_validation->set_rules('nik_penerima', 'NikPenerima', 'required|numeric');
        $this->form_validation->set_rules('nama_penerima', 'NamaPenerima', 'required');
        $this->form_validation->set_rules('notelp_penerima', 'Notelp', 'required|numeric');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('pensiunan/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->pensiunan_model->ubahDatapensiunan($id);
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('pensiunan');
        }
    }

}
