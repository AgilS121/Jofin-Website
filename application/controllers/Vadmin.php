<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vadmin extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_admin');
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
        $x['data'] = $this->m_admin->getAll();
        $data['title'] = 'JOFIN | Data Admin';
        $data['user'] = $this->db->get_where('tb_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav');
        $this->load->view('v_admin', $x);
        $this->load->view('templates/footer');
    }
    function hapus_file()
    {
        $kode = $this->input->post('kode');
        $this->m_admin->hapus_file($kode);
        redirect('vadmin/index');
    }
    public function update_file()
    {
        $kode = $this->input->post('kode');
        $active = $this->input->post('status');
        $this->m_admin->update($kode, $active);
        redirect('vadmin/index');
    }
}
