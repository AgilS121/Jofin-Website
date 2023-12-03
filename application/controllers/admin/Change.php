<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Change extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('tb_admin', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {

            $this->load->view('templates/head', $data);
            $this->load->view('templates/nav', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('msg', '
                <div class="alert alert-danger" role="alert">
                Wrong current password !
                </div>');
                redirect('admin/change');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('msg', '
                <div class="alert alert-danger" role="alert">
                New Password cannot same
                </div>');
                    redirect('admin/change');
                } else {
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('tb_admin');

                    $this->session->set_flashdata('msg', '
                <div class="alert alert-success" role="alert">
                Password Changed
                </div>');
                    redirect('admin/change');
                }
            }
        }
    }
}
