<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('auth/login');
        } else {
            // menuju fungsi Login
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password');

        $user = $this->db->get_where('user',['username' => $username])->row_array();

        // jika username ada
        if($user) {
            // cek password
            if(password_verify($password, $user['password'])) {
                $data = [
                    'nama' => $user['nama'],
                    'username' => $user['username'],
                    'gambar' => $user['gambar'],
                    'role_id' => $user['role_id'],
                ];
                $this->session->set_userdata($data);
                redirect('admin/home');
            } else {
                // pesan
                $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Password Salah!</div>');
                redirect('auth');
            }
        } else {
            // pesan 
            $this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Username tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function forbidden()
    {
        $this->load->view('auth/403');
    }
    
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Logout Berhasil</div>');
        redirect('/');
    }
    
}