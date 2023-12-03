<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Position extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_position');
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
        $x['data'] = $this->m_position->getAll();
        $data['title'] = 'JOFIN | Posisi';

        $data['user'] = $this->db->get_where('tb_admin', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/head', $data);
        $this->load->view('templates/nav');
        $this->load->view('v_position', $x);
        $this->load->view('templates/footer');
    }
    function tambah()
    {
        $config['upload_path'] = './assets/logo/'; //path folder
        $config['allowed_types'] = 'pdf|png|jpg|doc|docx|ppt|pptx|zip'; //type yang dapat diakses bisa anda sesuaikan
        // $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
        $this->upload->initialize($config);
        if (!empty($_FILES['image']['name'])) {
            if ($this->upload->do_upload('image')) {
                $gbr = $this->upload->data();
                $file = $gbr['file_name'];
                $id = $this->input->post('id_lowongan');
                $nama = $this->input->post('nama');
                $link = $this->input->post('link');
                $skil = $this->input->post('skil');
                $skil1 = $this->input->post('skil1');
                $skil2 = $this->input->post('skil2');
                $total = $this->input->post('total');
                $buka = $this->input->post('buka');
                $tutup = $this->input->post('tutup');
                $gender = $this->input->post('gender');
                $this->m_position->simpan_file($id, $file, $nama, $link, $skil, $skil1, $skil2, $total, $buka, $tutup, $gender);
                $this->session->set_flashdata('msg', '
            <div class="alert alert-success" role="alert">
            Data berhasil di tambahkan
            </div>');
                redirect('position/index');
            } else {
                redirect('position/index');
            }
        } else {
            redirect('position/index');
        }
    }
    function hapus_file()
    {
        $kode = $this->input->post('kode');
        $data = $this->input->post('image');
        $path = './assets/logo/' . $data;
        unlink($path);
        $this->m_position->hapus_file($kode, $path);
        $this->session->set_flashdata('msg', '
            <div class="alert alert-danger" role="alert">
            Data berhasil di hapus
            </div>');
        redirect('position/index');
    }
    function update_file()
    {
        $kode = $this->input->post('kode');
        $img = ($this->input->post('image'));
        $nama = $this->input->post('nama');
        $link = $this->input->post('link');
        $skil = $this->input->post('skil');
        $skil1 = $this->input->post('skil1');
        $skil2 = $this->input->post('skil2');
        $total = $this->input->post('total');
        $buka = $this->input->post('buka');
        $tutup = $this->input->post('tutup');
        $gender = $this->input->post('gender');
        $this->m_position->update($kode, $img, $nama, $link, $skil, $skil1, $skil2, $total, $buka, $tutup, $gender);
        $this->session->set_flashdata('msg', '
            <div class="alert alert-success" role="alert">
            Data berhasil di update
            </div>');
        redirect('position/index');
    }
}
