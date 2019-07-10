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

        $data['_view']= "admin/guru/index";
        $this->load->view('template/index', $data);
    }

    public function detail($id)
    {
        $data['guru'] = $this->Guru_model->get($id);

        $data['_view'] = "admin/guru/detail";
		$this->load->view('template/index', $data);
    }

    public function tambah()
    {
        $data['status'] = ['PNS','HONORER'];
        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['agama'] = ['Islam','Kristen','Katolik','Hindu','Budha','Konghucu'];
        
        $this->form_validation->set_rules('nip_lama', 'NIP Lama', 'required|numeric|trim|min_length[12]|max_length[12]');
        $this->form_validation->set_rules('nip', 'NIP', 'required|numeric|trim|min_length[12]|max_length[12]|is_unique[guru.nip]',[
            'is_unique' => 'NIP sudah terdaftar',
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jns_klmn', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required|trim');
        $this->form_validation->set_rules('th_lulus', 'Tahun Lulus', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "admin/guru/tambah";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $this->Guru_model->insert();
            $this->session->set_flashdata('flash',"Ditambahkan");
            redirect('admin/guru');
        }
    }

    public function edit($id)
    {
        $data['guru'] = $this->Guru_model->get($id);
        $data['status'] = ['PNS','HONORER'];
        $data['jabatan'] = $this->Jabatan_model->getAll();
        $data['agama'] = ['Islam','Kristen','Katolik','Hindu','Budha','Konghucu'];
        
        $this->form_validation->set_rules('nip_lama', 'NIP Lama', 'required|numeric|trim|min_length[12]|max_length[12]');
        $this->form_validation->set_rules('nip', 'nip', 'required|numeric|trim|min_length[12]|max_length[12]');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jns_klmn', 'Jenis Kelamin', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');
        $this->form_validation->set_rules('agama', 'Agama', 'required|trim');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('unit_kerja', 'Unit Kerja', 'required|trim');
        $this->form_validation->set_rules('th_lulus', 'Tahun Lulus', 'required|trim');
        $this->form_validation->set_rules('pendidikan_terakhir', 'Pendidikan Terakhir', 'required|trim');
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view'] = "admin/guru/edit";
		    $this->load->view('template/index', $data);
        }
        else
        {
            $this->Guru_model->update();
            $this->session->set_flashdata('flash',"Diubah");
            redirect('admin/guru');
        }
    }

    public function hapus($id)
    {
        $this->Guru_model->delete($id);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('admin/guru');
    }

    // fungsi mengubah tanggal ke format Y-m-d
    private function tanggal_en($date){
		$tanggal = substr($date,0,2)-1;
		$bulan = substr($date,3,2);
		$tahun = substr($date,6,4);
		return $tahun.'-'.$bulan.'-'.$tanggal;		 
    }

    // fungsi import data dari excel
    // public function proses()
    // {
    //     // validasi judul
    //     $this->form_validation->set_rules('judul', 'judul', 'trim|required');
    //     if ($this->form_validation->run() == FALSE) {
    //         // jika validasi judul gagal
    //         $this->session->set_flashdata('upload_error', "Terjadi kesalahan input");
    //         redirect('admin/guru');
    //     } else {
    //         // config upload
    //         $config['upload_path'] = './upload_data/';
    //         $config['allowed_types'] = 'xls';
    //         $config['max_size'] = '10000';
    //         $this->load->library('upload', $config);
    //         if ( ! $this->upload->do_upload('file')) {
    //             // jika validasi file gagal, kirim parameter error ke index
    //             $this->session->set_flashdata('upload_error', $this->upload->display_errors());
    //             redirect('admin/guru');
    //         } else {
    //           // jika berhasil upload ambil data dan masukkan ke database
    //           $upload_data = $this->upload->data();
    //             // var_dump($upload_data);die();
    //           // load library Excell_Reader
    //           $this->load->library('Excel_reader');
    //           //tentukan file
    //           $this->excel_reader->setOutputEncoding('230787');
    //           $file = $upload_data['full_path'];
    //           $this->excel_reader->read($file);
    //           error_reporting(E_ALL ^ E_NOTICE);
    //           // array data
    //           $data = $this->excel_reader->sheets[0];
    //           $dataexcel = Array();
    //           for ($i = 1; $i <= $data['numRows']; $i++) {
    //                if ($data['cells'][$i][1] == '')
    //                    break;
    //                $dataexcel[$i - 1]['nip_lama'] = $data['cells'][$i][1];
    //                $dataexcel[$i - 1]['nip'] = $data['cells'][$i][2];
    //                $dataexcel[$i - 1]['nama'] = $data['cells'][$i][3];
    //                $dataexcel[$i - 1]['tmp_lahir'] = $data['cells'][$i][4];
    //                $dataexcel[$i - 1]['tgl_lahir'] = $this->tanggal_en($data['cells'][$i][5]);
    //                $dataexcel[$i - 1]['jns_klmn'] = $data['cells'][$i][6];
    //                $dataexcel[$i - 1]['status'] = $data['cells'][$i][7];
    //                $dataexcel[$i - 1]['gol_ruang'] = $data['cells'][$i][8];
    //                $dataexcel[$i - 1]['tamat_pangkat'] = $this->tanggal_en($data['cells'][$i][9]);
    //                $dataexcel[$i - 1]['jabatan'] = $data['cells'][$i][11];
    //                $dataexcel[$i - 1]['tamat_jabatan'] = $this->tanggal_en($data['cells'][$i][12]);
    //                $dataexcel[$i - 1]['agama'] = $data['cells'][$i][13];
    //                $dataexcel[$i - 1]['telepon'] = $data['cells'][$i][14];
    //                $dataexcel[$i - 1]['alamat'] = $data['cells'][$i][15];
    //                $dataexcel[$i - 1]['unit_kerja'] = $data['cells'][$i][16];
    //                $dataexcel[$i - 1]['pensiun'] = $this->tanggal_en($data['cells'][$i][17]);
    //                $dataexcel[$i - 1]['pendidikan_terakhir'] = $data['cells'][$i][18];
    //                $dataexcel[$i - 1]['th_lulus'] = $data['cells'][$i][19];
    //                $dataexcel[$i - 1]['kecamatan'] = $data['cells'][$i][20];
    //           }
    //           //load model

    //         //   var_dump($dataexcel);die;
    //           $this->load->model('Guru_model');
    //           $this->Guru_model->loaddata($dataexcel);
    //           //delete file
    //           $file = $upload_data['file_name'];
    //           $path = './upload_data/' . $file;
    //           unlink($path);

    //           //redirect ke halaman awal
    //           redirect('admin/guru');
    //         }
    //     }
    // }
    
}