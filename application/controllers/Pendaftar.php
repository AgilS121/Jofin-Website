<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('m_pendaftar');
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
        $x['data'] = $this->m_pendaftar->getAll();
        $data['title'] = 'JOFIN | Data Pendaftar';
        $data['user'] = $this->db->get_where('tb_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav');
        $this->load->view('v_pendaftaran', $x);
        $this->load->view('templates/footer');
    }
    function hapus_file()
    {
        $kode = $this->input->post('kode');
        //$data = $this->input->post('file');
        // $path = './assets/uploads/' . $data;
        // unlink($path);
        $this->m_pendaftar->hapus_file($kode);
        $this->session->set_flashdata('msg', '
        <div class="alert alert-danger" role="alert">
        Data berhasil dihapus
        </div>');
        redirect('pendaftar/index');
    }
    public function update_file()
    {
        $kode = $this->input->post('kode');
        $namea = $this->input->post('name');
        $email = $this->input->post('email');
        $no = $this->input->post('no');
        $form = $this->input->post('form');
        $statuss = $this->input->post('status');
        $this->m_pendaftar->update($kode, $namea, $email, $no, $form, $statuss);
        $this->session->set_flashdata('msg', '
            <div class="alert alert-success" role="alert">
            Status dirubah
            </div>');
        redirect('pendaftar/index');
    }
    public function unduh($id)
    {
        if (!empty($id)) {
            //load download helper
            $this->load->helper('download');

            //get file info from database
            $fileInfo = $this->m_perusahaan->download(array('id' => $id));

            //file path
            $file = './assets/uploads/' . $fileInfo['file'];

            //download file from directory
            force_download($file, NULL);
        }
    }
}
