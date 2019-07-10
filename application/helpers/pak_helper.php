<?php

function cek_login(){
    $ci = get_instance();

    // cek sudah login ?
    if(!$ci->session->userdata('nama')){
        // belum
        redirect('auth');
    } else {
        $link = $ci->uri->segment(1,0);
        $role_id =  $ci->session->userdata('role_id');

        $dataRole = $ci->db->get_where('role',['id' => $role_id, 'link' => $link]);
        
        if($dataRole->num_rows() < 1){
            redirect('auth/forbidden');
        }

    }
}

function tanggal_id($tanggal){
    //potong 
    $tanggal2 = substr($tanggal,8,2);
    $bulan = substr($tanggal,5,2);
    $tahun = substr($tanggal,0,4);
    return $tanggal2.'-'.$bulan.'-'.$tahun;		 
}

function tanggal_en($tanggal){
    //potong 
    $tanggal2 = substr($tanggal,0,2);
    $bulan = substr($tanggal,3,2);
    $tahun = substr($tanggal,6,4);
    return $tahun.'-'.$bulan.'-'.$tanggal2;		 
}

function tanggal_pensiun($tanggal){
    //potong 
    $tanggal2 = substr($tanggal,0,2);
    $bulan = substr($tanggal,3,2);
    $tahun = 60 + substr($tanggal,6,4);
    return $tahun.'-'.$bulan.'-'.$tanggal2;		 
}