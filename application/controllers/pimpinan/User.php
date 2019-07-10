<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        
        $data['_view']= "pimpinan/user";
        $this->load->view('template/index', $data);
    }

    public function ubahpassword()
    {
        $data['pengguna'] = $this->db->get_where('user',['username' => $this->session->userdata('username')])->row();
        
        $this->form_validation->set_rules('passwordlama', 'Password lama', 'required|trim');
        $this->form_validation->set_rules('passwordbaru', 'Password', 'required|trim|min_length[4]|matches[ulangipassword]',[
            'matches' => 'Password tidak sama',
            'min_length' => 'Password harus lebih dari 4 karakter',
        ]);
        $this->form_validation->set_rules('ulangipassword', 'Password', 'matches[passwordbaru]');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "pimpinan/ubahpassword";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $passwordlama = $this->input->post('passwordlama');
            $passwordbaru = $this->input->post('passwordbaru');
            $ulangipassword = $this->input->post('ulangipassword');

            if(!password_verify($passwordlama, $data['pengguna']->password)){
                // password lama salah
                $this->session->set_flashdata('flash',"Password lama salah");
                redirect('pimpinan/user/ubahpassword');
            } else {
                if($passwordlama == $passwordbaru){
                    // password tidak boleh sama dengan yg lama
                    $this->session->set_flashdata('flash',"Password Baru tidak boleh sama dg password lama");
                    redirect('pimpinan/user/ubahpassword');
                } else {
                    // password ok
                    $password_hash = password_hash($passwordbaru, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('flash',"Password berhasil diubah");
                    redirect('pimpinan/user');
                }
            }
        }
    }

    
}