<?php 

class Home extends CI_Controller {
public function index()
{
    $data['judul'] = 'My Profile';
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->load->view('templates/header', $data);
    $this->load->view('home/index', $data);
    $this->load->view('templates/footer');
}
}