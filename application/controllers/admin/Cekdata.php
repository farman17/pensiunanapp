<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cekdata extends CI_Controller {
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('Jabatan_model');
        $this->load->model('Guru_model');
        cek_login();
    }

    public function index()
    {
        if($this->input->post('tahunke')){
            $data['tahunke'] = $this->input->post('tahunke');
        } else {
            $data['tahunke'] = 3;
        }

        // tanggal sekarang
        $sekarang = date('Y-m-d');
        // tanggal jangka pensiun berikutnya
        $selanjutnya = date('Y-m-d', strtotime("+".$data['tahunke']." year", strtotime( date('Y-m-d') )));
          
        $query = "SELECT `guru`.*
                    FROM `guru`
                    WHERE `guru`.`pensiun` BETWEEN '$sekarang' AND '$selanjutnya'";
        $data['guru'] = $this->db->query($query)->result();

        $data['_view']= "admin/cekdata/index";
        $this->load->view('template/index', $data);
    }

}