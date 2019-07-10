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
        $data['_view']= "guru/pengajuan/index";
        $this->load->view('template/index', $data);
    }
    
}