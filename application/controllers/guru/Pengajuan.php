<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Pengajuan_model');
    }
    
    public function index()
    {
        $this->cekpengajuan();
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
            $data['_view']= "guru/pengajuan/datapribadi";
            $this->load->view('template/index', $data);
        }
        else
        {
            $this->Pengajuan_model->datapribadi();
            redirect('guru/pengajuan/datakeluarga');
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
            $data['_view']= "guru/pengajuan/datakeluarga";
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
            redirect('guru/pengajuan/datakeluarga');
        }
        
    }

    public function hapusdatakeluarga($id)
    {
        $this->db->delete('keluarga', ['id' => $id]);
        $this->session->set_flashdata('flash',"Dihapus");
        redirect('guru/pengajuan/datakeluarga');
    }

    public function detailpengajuan()
    {
        $this->form_validation->set_rules('jenis', 'Jenis Pengajuan', 'required|trim');
        $this->form_validation->set_rules('keterangan', 'Keterangan Pengajuan', 'required|trim');
        $this->form_validation->set_rules('gaji_pokok_terakhir', 'Gaji Pokok Terakhir', 'required|trim');
        $this->form_validation->set_rules('mksd', 'Masa Kerja Sebelum Diangkat', 'required|trim');
        $this->form_validation->set_rules('pspp', 'Pendidikan Sebagai Pengangkatan Pertama', 'required|trim');
        $this->form_validation->set_rules('mulai_masuk_pns', 'Mulai Masuk PNS', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat Sesudah Pensiun', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $cekQuery = $this->db->get_where('pengajuan',['guru_id' => $this->session->userdata('id')])->row_array();

            if($cekQuery){
                $data['pengajuan'] = $cekQuery;
            } else {
                $cekQuery = [
                    'nomor_karpeg' => '',
                    'gaji_pokok_terakhir' => '',
                    'mksd' => '',
                    'pspp' => '',
                    'mulai_masuk_pns' => '',
                    'alamat' => '',
                    'jenis' => '',
                    'keterangan' => '',
                    'gaji_pokok' => '',
                    'guru_id' => ''
                ];
                $data['pengajuan'] = $cekQuery;
            }
            $data['_view']= "guru/pengajuan/detailpengajuan";
            $this->load->view('template/index', $data);
        }
        else
        {
            
            $data = [
                'nomor_karpeg' => $this->input->post('nomor_karpeg', true),
                'gaji_pokok_terakhir' => $this->input->post('gaji_pokok_terakhir', true),
                'mksd' => $this->input->post('mksd', true),
                'pspp' => $this->input->post('pspp', true),
                'mulai_masuk_pns' => $this->input->post('mulai_masuk_pns', true),
                'alamat' => $this->input->post('alamat', true),
                'jenis' => $this->input->post('jenis', true),
                'keterangan' => $this->input->post('keterangan', true),
                'gaji_pokok' => $this->input->post('gaji_pokok', true),
                'guru_id' => $this->session->userdata('id')
            ];
            
            // cek, tambah data atau ubah data detail pengajuan
            $cekQuery = $this->db->get_where('pengajuan',['guru_id' => $this->session->userdata('id')])->row();
            if($cekQuery){
                // update
                $this->db->where('id', $cekQuery->id);
                $this->db->update('pengajuan', $data);
                
                $this->db->delete('file', ['guru_id' => $this->session->userdata('id')]);
                
                if($data['jenis'] == "pensiun"){
                    // syarat pensiun
                    $nama_file = ['fc nip baru','skp 2th','fc sk pengajuan','fc sk pengangkatan pns','fc sk pangkat terakhir','fc kenaikan gaji','fc kartu pegawai','fc surat nikah','fc kk','fc akta tanggungan','pas foto'];

                } else {
                    // syarat mutasi
                    $nama_file = ['surat pengantar','surat permohonan','Surat bersedia melepas/lolos dari sekolah yang akan ditinggalkan, dilampiri tabel kelebihan dan kekurangan guru','Surat bersedia menerima/butuh dari sekolah yang dituju ditabel kelebihan dan kekurangan guru','sk pangkat terakhir','foto sertivikat pendidik'];
                }
                
                foreach ($nama_file as $nama_file) {

                    $data_file = [
                        'judul' => $nama_file,
                        'file' => '',
                        'status' => '',
                        'guru_id' => $this->session->userdata('id'),
                    ];
                    $this->db->insert('file', $data_file);
                }

                redirect('guru/pengajuan/uploadfile');

            } else {
                // tambah data ke tabel file
                if($data['jenis'] == "pensiun"){
                    // syarat pensiun
                    $nama_file = ['fc_nip_baru','skp_2th','fc_sk_pengajuan','fc_sk_pengangkatan_pns','fc_sk_pangkat_terakhir','fc_kenaikan_gaji','fc_kartu_pegawai','fc_surat_nikah','fc_kk','fc_akta_tanggungan','pas_foto'];

                } else {
                    // syarat mutasi
                    $nama_file = ['surat_pengantar','surat_permohonan','surat_melepas','surat_menerima','sk_pangkat_terakhir','foto_sertivikat_pendidik'];
                }
                
                foreach ($nama_file as $nama_file) {

                    $data_file = [
                        'judul' => $nama_file,
                        'file' => '',
                        'status' => '',
                        'guru_id' => $this->session->userdata('id'),
                    ];
                    $this->db->insert('file', $data_file);
                }


                // tambah ke tabel pengajuan
                $this->db->insert('pengajuan', $data);
                // $this->session->set_flashdata('flash',"Ditambah");
                redirect('guru/pengajuan/uploadfile');
            }
        }
    }

    public function uploadfile()
    {
        $data['file'] = $this->db->get_where('file',['guru_id' => $this->session->userdata('id')])->row();

        if($this->input->post('idFile')) {
            
            $this->prosesupload($this->input->post('idFile'));
            
        } else {
            
            $data['_view']= "guru/pengajuan/uploadfile";
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
            redirect('guru/pengajuan/uploadfile');
        }
        else
        {
            $data['file'] = $this->db->get_where('file',['guru_id' => $this->session->userdata('id')])->row();

            $data['error'] = $this->upload->display_errors();
            $data['_view']= "guru/pengajuan/uploadfile";
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
        redirect('guru/pengajuan/uploadfile');
    }

    public function cekberkas()
    {
        $file = $this->db->get_where('file', ['guru_id' => $this->session->userdata('id')])->result();

        foreach ($file as $f) {
            if($f->file == ""){
                $this->session->set_flashdata('error',"Data Belum Lengkap!");
                redirect('guru/pengajuan/uploadfile');
            } else {
                redirect('guru/pengajuan/konfirmasi');
            }
        }
    }
    
    public function konfirmasi()
    {
        $this->form_validation->set_rules('pengembalian_inventaris', 'Pengembalian Inventaris', 'required|trim');
        $this->form_validation->set_rules('status', 'Status', 'required|trim');

        if ($this->form_validation->run() == FALSE)
        {
            $data['_view']= "guru/pengajuan/konfirmasi";
            $this->load->view('template/index', $data);
        }
        else
        {
            // pengajuan selesai
            $this->db->set('pengembalian_inventaris', $this->input->post('pengembalian_inventaris'));
            $this->db->set('status', 0);
            $this->db->where('guru_id',$this->session->userdata('id'));
            $this->db->update('pengajuan');

            $this->session->set_flashdata('flash',"Ditambah");
            redirect('guru/status');
        }
    }

    public function cekpengajuan()
    {
        $pengajuan = $this->db->get_where('pengajuan',[
                        'guru_id' => $this->session->userdata('id'),
                        'pengembalian_inventaris' => 1, 
                        'status'
                        ])->row();

        if($pengajuan != null){
            redirect('guru/status');
        } 
        
    }
    
}