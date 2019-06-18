<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Pengguna_model');
    }

    public function index()
    {
        $queryPengguna = "SELECT `user`.*, `role`.`nama` as `level`
                        FROM `user` JOIN `role`
                        ON `user`.`role_id` = `role`.`id`
                        ORDER BY `user`.`id`  
                        ";
        $data['pengguna'] = $this->db->query($queryPengguna)->result();
        
        $data['_view']= "admin/pengguna/index";
        $this->load->view('template/index', $data);
    }

    public function edit($id)
    {
        $queryPengguna = "SELECT `user`.*, `role`.`nama` as `level`
                        FROM `user` JOIN `role`
                        ON `user`.`role_id` = `role`.`id`
                        WHERE `user`.`id` = $id
                        ORDER BY `user`.`id`  
                        ";
        $data['pengguna'] = $this->db->query($queryPengguna)->row();
        $data['role'] = $this->db->get('role')->result();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('username', 'Username', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "admin/pengguna/edit";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $this->Pengguna_model->update();
            $this->session->set_flashdata('flash',"Diubah");
            redirect('admin/pengguna');
        }
    }

    public function hapus($id)
    {
        $this->Pengguna_model->delete($id);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('admin/pengguna');
    }
    
}