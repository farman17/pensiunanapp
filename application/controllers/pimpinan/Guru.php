<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('Jabatan_model');
        $this->load->model('Guru_model');
        cek_login();
    }

    public function index()
    {
        $data['guru'] = $this->db->get('guru')->result();

        $data['_view']= "pimpinan/guru/index";
        $this->load->view('template/index', $data);
    }

    public function detail($id)
    {
        $data['guru'] = $this->Guru_model->get($id);

        $data['_view'] = "pimpinan/guru/detail";
		$this->load->view('template/index', $data);
    }

    public function tambah()
    {
        $data['status'] = ['PNS','HONORER'];
        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['agama'] = ['Islam','Kristen','Katolik','Hindu','Budha','Konghucu'];
        
        $this->form_validation->set_rules('nip_lama', 'NIP Lama', 'required|trim|min_length[12]|max_length[12]');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim|min_length[12]|max_length[12]|is_unique[guru.nip]',[
            'is_unique' => 'NIP sudah terdaftar',
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jns_klmn', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('tamat_pangkat', 'Tamat Pangkat', 'required|trim');
        $this->form_validation->set_rules('tamat_jabatan', 'Tamat Jabatan', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required|trim');
        $this->form_validation->set_rules('th_lulus', 'Tahun Lulus', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "pimpinan/guru/tambah";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $this->Guru_model->insert();
            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('pimpinan/guru');
        }
    }

    public function edit($id)
    {
        $data['guru'] = $this->Guru_model->get($id);
        $data['status'] = ['PNS','HONORER'];
        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['agama'] = ['Islam','Kristen','Katolik','Hindu','Budha','Konghucu'];
        
        $this->form_validation->set_rules('nip_lama', 'NIP Lama', 'required|trim|min_length[12]|max_length[12]');
        $this->form_validation->set_rules('nip', 'nip', 'required|trim|min_length[12]|max_length[12]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jns_klmn', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('tamat_pangkat', 'Tamat Pangkat', 'required|trim');
        $this->form_validation->set_rules('tamat_jabatan', 'Tamat Jabatan', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required|trim');
        $this->form_validation->set_rules('th_lulus', 'Tahun Lulus', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "pimpinan/guru/edit";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $this->Guru_model->update();
            $this->session->set_flashdata('flash',"Diubah");
            redirect('pimpinan/guru');
        }
    }

    public function hapus($id)
    {
        $this->Guru_model->delete($id);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('pimpinan/guru');
    }

    // fungsi mengubah tanggal ke format Y-m-d
    private function tanggal_en($date){
		$tanggal = substr($date,0,2)-1;
		$bulan = substr($date,3,2);
		$tahun = substr($date,6,4);
		return $tahun.'-'.$bulan.'-'.$tanggal;		 
    }

}