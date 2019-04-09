<?php

class Jabatan extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Jabatan_model');
    }

	public function index()
	{
        $data['jabatan'] = $this->Jabatan_model->getAll();
        
		$data['_view'] = "admin/jabatan/index";
		$this->load->view('template/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|trim');
        $this->form_validation->set_rules('gol_ruang', 'Gol. Ruang', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "admin/jabatan/tambah";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $this->Jabatan_model->insert();
            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('admin/jabatan');
        }
    }

    public function edit($id)
    {
        $data['jabatan'] = $this->Jabatan_model->get($id);
        
        $this->form_validation->set_rules('nama', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('pangkat', 'Pangkat', 'required|trim');
        $this->form_validation->set_rules('gol_ruang', 'Gol. Ruang', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "admin/jabatan/edit";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $this->Jabatan_model->update();
            $this->session->set_flashdata('flash',"Diubah");
            redirect('admin/jabatan');
        }
    }

    public function hapus($id)
    {
        $this->Jabatan_model->delete($id);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('admin/jabatan');
    }
}
