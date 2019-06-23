<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pensiun extends CI_Controller {
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
                    WHERE `pengajuan`.`guru_id` = `guru`.`id` AND `pengajuan`.`status` = 1";
        $data['pengajuan'] = $this->db->query($query)->result();

        $data['_view']= "admin/pensiun/index";
        $this->load->view('template/index', $data);
    }

}