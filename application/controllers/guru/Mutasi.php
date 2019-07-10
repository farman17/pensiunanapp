<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasi extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
    }
    
    public function index()
    {
        $this->cekmutasi();
        
        $queryGuru = "SELECT `guru`.* FROM `guru` join `user` where `guru`.`id` = `user`.`guru_id` and `user`.`username` = ". $this->session->userdata('username');
        $data['guru'] = $this->db->query($queryGuru)->row();
        $data['jabatan'] = $this->db->get('jabatan')->result();

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('tmp_lahir', 'Tempat Lahir', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('jabatan', 'Jabatan', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view']= "guru/mutasi/datapribadi";
            $this->load->view('template/index', $data);
        }
        else
        {
            redirect('guru/mutasi/datakeluarga');
        }
        
    }

    public function datakeluarga()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['keluarga'] = $this->db->get_where('keluarga',['guru_id' => $this->session->userdata('id')])->result();
            $data['statuskeluarga'] = ['Suami','Istri','Anak'];
            $data['_view']= "guru/mutasi/datakeluarga";
            $this->load->view('template/index', $data);
        }
        else
        {
            $data = [
                'nama' => $this->input->post('nama', true),
                'tgl_lahir' => $this->input->post('tgl_lahir', true),
                'status' => $this->input->post('status', true),
                'guru_id' => $this->session->userdata('id')
            ];
            
            $this->db->insert('keluarga', $data);
            $this->session->set_flashdata('flash',"Ditambah");
            redirect('guru/mutasi/datakeluarga');
        }
        
    }

    public function hapusdatakeluarga($id)
    {
        $this->db->delete('keluarga', ['id' => $id]);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('guru/mutasi/datakeluarga');
    }

    public function detailpengajuan()
    {
        $this->form_validation->set_rules('tamat_pangkat', 'Tamat pangkat', 'required|trim');
        $this->form_validation->set_rules('gaji_pokok', 'Gaji Pokok', 'required|numeric|trim');
        $this->form_validation->set_rules('surat_keputusan_pejabat', 'Surat keputusan pejabat', 'required|trim');
        $this->form_validation->set_rules('nomor_keputusan', 'no_keputusan', 'required|trim');
        $this->form_validation->set_rules('tanggal_keputusan', 'Tanggal keputusan', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $cekQuery = $this->db->get_where('mutasi',['guru_id' => $this->session->userdata('id')])->row_array();

            if($cekQuery){
                $data['mutasi'] = $cekQuery;
            } else {
                $cekQuery = [
                    'tamat_pangkat' => '',
                    'gaji_pokok' => '',
                    'surat_keputusan_pejabat' => '',
                    'nomor_keputusan' => '',
                    'tanggal_keputusan' => '',
                    'tempat_mutasi' => '',
                    'guru_id' => ''
                ];
                $data['mutasi'] = $cekQuery;
            }
            $data['_view']= "guru/mutasi/detailpengajuan";
            $this->load->view('template/index', $data);
        }
        else
        {
            
            $data = [
                'tamat_pangkat' => $this->input->post('tamat_pangkat', true),
                'gaji_pokok' => $this->input->post('gaji_pokok', true),
                'surat_keputusan_pejabat' => $this->input->post('surat_keputusan_pejabat', true),
                'nomor_keputusan' => $this->input->post('nomor_keputusan', true),
                'tanggal_keputusan' => $this->input->post('tanggal_keputusan', true),
                'tempat_mutasi' => $this->input->post('tempat_mutasi', true),
                'guru_id' => $this->session->userdata('id')
            ];
            
            // cek, tambah data atau ubah data detail pengajuan
            $cekQuery = $this->db->get_where('mutasi',['guru_id' => $this->session->userdata('id')])->row();

            if($cekQuery){
                // update
                $this->db->where('id', $cekQuery->id);
                $this->db->update('mutasi', $data);
                
                // // syarat mutasi
                $nama_file = ['surat pengantar','surat permohonan','Surat bersedia melepas/lolos dari sekolah yang akan ditinggalkan, dilampiri tabel kelebihan dan kekurangan guru','Surat bersedia menerima/butuh dari sekolah yang dituju ditabel kelebihan dan kekurangan guru','sk pangkat terakhir','foto sertivikat pendidik'];
                
                redirect('guru/mutasi/uploadfile');

            } else {
                // tambah data ke tabel file

                // syarat mutasi
                $nama_file = ['surat pengantar','surat permohonan','Surat bersedia melepas/lolos dari sekolah yang akan ditinggalkan, dilampiri tabel kelebihan dan kekurangan guru','Surat bersedia menerima/butuh dari sekolah yang dituju ditabel kelebihan dan kekurangan guru','sk pangkat terakhir','foto sertivikat pendidik'];
                
                foreach ($nama_file as $nama_file) {

                    $data_file = [
                        'judul' => $nama_file,
                        'file' => '',
                        'status' => '',
                        'jenis' => 2,
                        'guru_id' => $this->session->userdata('id'),
                    ];
                    $this->db->insert('file', $data_file);
                }

                // tambah ke tabel pengajuan
                $this->db->insert('mutasi', $data);
                // $this->session->set_flashdata('flash',"Ditambah");
                redirect('guru/mutasi/uploadfile');
            }
        }
    }

    public function uploadfile()
    {
        $data['file'] = $this->db->get_where('file',['guru_id' => $this->session->userdata('id'), 'jenis' => 2])->row();

        if($this->input->post('idFile')) {
            
            $this->prosesupload($this->input->post('idFile'));
            
        } else {
            
            $data['_view']= "guru/mutasi/uploadfile";
            $this->load->view('template/index', $data);
        }
    }

    public function prosesupload($idFile)
    {
        $guru = $this->db->get_where('guru',['id' => $this->session->userdata('id') ])->row();

        if (!is_dir('upload_berkas/'.$guru->nama)) {
            mkdir('./upload_berkas/' . $guru->nama, 0777, TRUE);
        }

        // $upload_image = $_FILES[$fieldname];
        // var_dump($upload_image);die;

        $set_name   = $guru->id."-".$idFile;
        $path       = $_FILES['file']['name'];
        $extension  = ".".pathinfo($path, PATHINFO_EXTENSION);

        $config = array(
            'upload_path' => "./upload_berkas/".$guru->nama,
            'allowed_types' => "jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048",
            'file_name' => "$set_name".$extension,
            );

        $this->load->library('upload', $config);

        if($this->upload->do_upload('file'))
        {
            $nama_file = $this->upload->data('file_name');
            
            $this->db->set('file', $nama_file);
            $this->db->set('status', 0);
            $this->db->where('id',$idFile);
            $this->db->update('file');

            // var_dump($nama_file);die;

            $this->session->set_flashdata('flash',"DiUpload");
            redirect('guru/mutasi/uploadfile');
        }
        else
        {
            $data['file'] = $this->db->get_where('file',['guru_id' => $this->session->userdata('id')])->row();

            $data['error'] = $this->upload->display_errors();
            $data['_view']= "guru/mutasi/uploadfile";
            $this->load->view('template/index', $data);
        }
    }

    public function hapusfile($id)
    {
        $guru = $this->db->get_where('guru', ['id' => $this->session->userdata('id')])->row();
        $file = $this->db->get_where('file', ['id' => $id])->row();

        unlink("./upload_berkas/".$guru->nama."/".$file->file);
        $this->db->set('file', "");
        $this->db->set('status', 0);
        $this->db->where('id', $id);
        $this->db->update('file');

        $this->session->set_flashdata('flash',"Dihapus");
        redirect('guru/mutasi/uploadfile');
    }

    public function cekberkas()
    {
        $file = $this->db->get_where('file', ['guru_id' => $this->session->userdata('id'), 'jenis' => 2])->result();

        foreach ($file as $f) {
            if($f->file == ""){
                $this->session->set_flashdata('error',"Data Belum Lengkap!");
                redirect('guru/mutasi/uploadfile');
            }
        }

        redirect('guru/mutasi/konfirmasi');
    }
    
    public function konfirmasi()
    {
        $this->form_validation->set_rules('pengembalian_inventaris', 'Pengembalian Inventaris', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view']= "guru/mutasi/konfirmasi";
            $this->load->view('template/index', $data);
        }
        else
        {
            // pengajuan selesai
            $this->db->set('pengembalian_inventaris', $this->input->post('pengembalian_inventaris'));
            $this->db->set('status', 0);
            $this->db->where('guru_id',$this->session->userdata('id'));
            $this->db->update('mutasi');

            $this->session->set_flashdata('flash',"Ditambah");
            redirect('guru/statusmutasi');
        }
    }

    public function cekmutasi()
    {
        $mutasi = $this->db->get_where('mutasi',[
                        'guru_id' => $this->session->userdata('id'),
                        'pengembalian_inventaris' => 1, 
                        'status'
                        ])->row();

        if($mutasi != null){
            redirect('guru/statusmutasi');
        } 
        
    }
    
}