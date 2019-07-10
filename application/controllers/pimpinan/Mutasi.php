<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasi extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        cek_login();
    }

    public function index()
    {
        $query = "SELECT `mutasi`.`id`, `mutasi`.`guru_id`, `guru`.`nip`,                
                    `guru`.`nama`, `guru`.`alamat` FROM `mutasi`, `guru`
                    WHERE `mutasi`.`guru_id` = `guru`.`id`";
        $data['mutasi'] = $this->db->query($query)->result();

        $data['_view']= "pimpinan/mutasi/index";
        $this->load->view('template/index', $data);
    }

    public function cekdata($id)
    {
        $query = "SELECT `mutasi`.*, `guru`.*
                    FROM `mutasi`, `guru`
                    WHERE `mutasi`.`guru_id` = `guru`.`id` AND `mutasi`.`id` = $id";

        $data['mutasi'] = $this->db->query($query)->row();

        $data['_view']= "pimpinan/mutasi/cekdata";
        $this->load->view('template/index', $data);
    }

    public function cekdatasave($id)
    {
        $cek = $this->db->get_where('file',['guru_id' => $id, 'status' => 1, 'jenis' => 2])->num_rows();
        
        if($cek >= 11 ){
            
            $data = [
                'pengembalian_inventaris' => 1,
                'status' => 1,
            ];
            $this->db->where('guru_id', $id);
            $this->db->update('mutasi', $data);
        }
        
        redirect('pimpinan/mutasi');
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
            $this->db->update('mutasi', $data);
        }

        $data = [
            'status' => $status,
        ];
        $this->db->where('id', $id);
        $this->db->update('file', $data);

        $this->session->set_flashdata('flash',"Divalidasi");

        // cek apakah sudah tervalidasi benar semua ?
        $cek = $this->db->get_where('file',['guru_id' => $file->guru_id, 'jenis' => 2, 'status' => 1])->num_rows();
        
        if($cek >= 6 ){
            
            $data = [
                'pengembalian_inventaris' => 1,
                'status' => 1,
            ];
            $this->db->where('guru_id', $file->guru_id);
            $this->db->update('mutasi', $data);
        }

        redirect($_SERVER['HTTP_REFERER']);
    }

    public function hapus($id)
    {
        $mutasi = $this->db->get_where('mutasi',['id' => $id])->row();

        $this->db->delete('keluarga', ['guru_id' => $mutasi->guru_id]);
        $this->db->delete('file', ['guru_id' => $mutasi->guru_id]);

        $guru = $this->db->get_where('guru',['id' => $mutasi->guru_id])->row();

        array_map('unlink', glob(FCPATH."./upload_berkas/".$guru->nama."/*"));

        $this->db->delete('mutasi', ['id' => $id]);

        $this->session->set_flashdata('flash',"Dihapus");

        redirect($_SERVER['HTTP_REFERER']);
    }

}