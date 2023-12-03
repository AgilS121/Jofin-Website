<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_web');
        $this->load->library('upload');
        if ($this->session->userdata('email') == "") {
            $this->session->set_flashdata('msg', '
            <div class="alert alert-danger" role="alert">
            Silahkan login terlebih dulu
            </div>');
            redirect(base_url('auth'), 'refresh');
        }
    }
    public function index()
    {
        $x['data'] = $this->m_web->getAll();
        $data['title'] = 'JOFIN | Data Pesan';
        $data['user'] = $this->db->get_where('tb_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav');
        $this->load->view('v_pesan', $x);
        $this->load->view('templates/footer');
    }
    function hapus_file()
    {
        $kode = $this->input->post('kode');
        $this->m_web->hapus_file($kode);
        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger" role="alert">
            Pesan berhasil dihapus
            </div>');
        redirect('pesan/index');
    }
}
