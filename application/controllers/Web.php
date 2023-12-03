<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_position');
        $this->load->model('m_web');
    }
    public function index()
    {
        $x['data'] = $this->m_position->getAll();

        $this->load->view('v_web', $x);
    }
    public function tambah()
    {
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $msg = $this->input->post('subject');
        $sbj = $this->input->post('message');
        $this->m_web->simpan_file($nama, $email, $msg, $sbj);
        $this->session->set_flashdata('msg', '
            <div class="alert alert-success" role="alert">
            Pesan berhasil dikirim
            </div>');
        redirect('web/index');
    }
}
