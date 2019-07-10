<?php

class Riwayatpekerjaan extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
    }

	public function index()
	{
        $data['riwayat'] = $this->db->get_where('riwayat_pekerjaan',['guru_id' => $this->session->userdata('id')])->result();
        
		$data['_view'] = "guru/riwayat/index";
		$this->load->view('template/index', $data);
    }

    public function tambah()
    {
        $this->form_validation->set_rules('uraian', 'uraian', 'required|trim');
        $this->form_validation->set_rules('tamat', 'tamat', 'required|trim');
        $this->form_validation->set_rules('gaji_pokok', 'gaji_pokok', 'required|trim');
        $this->form_validation->set_rules('pangkat', 'pangkat', 'required|trim');
        $this->form_validation->set_rules('pejabat', 'pejabat', 'required|trim');
        $this->form_validation->set_rules('nomor', 'nomor', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "guru/riwayat/tambah";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $data = [
                'uraian' => $this->input->post('uraian', true),
                'tamat' => $this->input->post('tamat', true),
                'jabatan_id' => $this->input->post('pangkat', true),
                'gaji_pokok' => $this->input->post('gaji_pokok', true),
                'pejabat' => $this->input->post('pejabat', true),
                'nomor' => $this->input->post('nomor', true),
                'tanggal' => $this->input->post('tanggal', true),
                'guru_id' => $this->session->userdata('id'),
            ];
            
            $this->db->insert('riwayat_pekerjaan', $data);

            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('guru/riwayatpekerjaan');
        }
    }

    public function edit($id)
    {
        $data['riwayat'] = $this->db->get_where('riwayat_pekerjaan',['id' => $id])->row();
        
        $this->form_validation->set_rules('uraian', 'uraian', 'required|trim');
        $this->form_validation->set_rules('tamat', 'tamat', 'required|trim');
        $this->form_validation->set_rules('gaji_pokok', 'gaji_pokok', 'required|trim');
        $this->form_validation->set_rules('pangkat', 'pangkat', 'required|trim');
        $this->form_validation->set_rules('pejabat', 'pejabat', 'required|trim');
        $this->form_validation->set_rules('nomor', 'nomor', 'required|trim');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "guru/riwayat/edit";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $data = [
                'uraian' => $this->input->post('uraian', true),
                'tamat' => $this->input->post('tamat', true),
                'jabatan_id' => $this->input->post('pangkat', true),
                'gaji_pokok' => $this->input->post('gaji_pokok', true),
                'pejabat' => $this->input->post('pejabat', true),
                'nomor' => $this->input->post('nomor', true),
                'tanggal' => $this->input->post('tanggal', true),
                'guru_id' => $this->session->userdata('id'),
            ];
            
            $this->db->where('id', $id);
            $this->db->update('riwayat_pekerjaan', $data);

            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('guru/riwayatpekerjaan');
        }
    }

    public function hapus($id)
    {
        $this->db->delete('riwayat_pekerjaan', ['id' => $id]);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('guru/riwayatpekerjaan');
    }
}
