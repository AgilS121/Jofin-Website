<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_user');
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
        $x['data'] = $this->m_user->getAll();
        $data['title'] = 'JOFIN | Data User';
        $data['user'] = $this->db->get_where('tb_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav');
        $this->load->view('v_user', $x);
        $this->load->view('templates/footer');
    }
    function hapus_file()
    {
        $kode = $this->input->post('kode');
        $this->m_user->hapus_file($kode);
        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger" role="alert">
            User berhasil dihapus
            </div>');
        redirect('user/index');
    }
}
