<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $query = "SELECT `pengajuan`.`id`, `guru`.`nip`,                
                    `guru`.`nama`, `guru`.`alamat`, 
                    `guru`.`pensiun` FROM `pengajuan`, `guru`
                    WHERE `pengajuan`.`guru_id` = `guru`.`id` AND `pengajuan`.`status` = 0";
        $data['pengajuan'] = $this->db->query($query)->result();

        $data['_view']= "admin/pengajuan/index";
        $this->load->view('template/index', $data);
    }

    public function cekdata($id)
    {
        $query = "SELECT `pengajuan`.*, `guru`.*
                    FROM `pengajuan`, `guru`
                    WHERE `pengajuan`.`guru_id` = `guru`.`id` AND `pengajuan`.`id` = $id";

        $data['pengajuan'] = $this->db->query($query)->row();

        $data['_view']= "admin/pengajuan/cekdata";
        $this->load->view('template/index', $data);
    }

    public function validasi($status, $id)
    {
        $file = $this->db->get_where('file',['id'=>$id])->row();

        if($status == 2){
            
            $data = [
                'pengembalian_inventaris' => 0,
                'status' => 2,
            ];
            $this->db->where('guru_id', $file->guru_id);
            $this->db->update('pengajuan', $data);
        }

        $data = [
            'status' => $status,
        ];
        $this->db->where('id', $id);
        $this->db->update('file', $data);

        $this->session->set_flashdata('flash',"Divalidasi");

        // cek apakah sudah tervalidasi benar semua ?
        $cek = $this->db->get_where('file',['guru_id' => $file->guru_id, 'status' => 1])->num_rows();
        
        if($cek >= 11 ){
            
            $data = [
                'pengembalian_inventaris' => 1,
                'status' => 1,
            ];
            $this->db->where('guru_id', $file->guru_id);
            $this->db->update('pengajuan', $data);
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function hapus($id)
    {
        $pengajuan = $this->db->get_where('pengajuan',['id' => $id])->row();

        $this->db->delete('keluarga', ['guru_id' => $pengajuan->guru_id]);
        $this->db->delete('file', ['guru_id' => $pengajuan->guru_id]);

        $guru = $this->db->get_where('guru',['id' => $pengajuan->guru_id])->row();

        array_map('unlink', glob(FCPATH."./upload_berkas/".$guru->nama."/*"));

        $this->db->delete('pengajuan', ['id' => $id]);

        $this->session->set_flashdata('flash',"Dihapus");

        redirect($_SERVER['HTTP_REFERER']);
    }

}