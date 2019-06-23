<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Pengajuan_model extends CI_model {

    public function insert()
    {
        $data = [
            'nip_lama' => str_replace(' ', '', $this->input->post('nip_lama', true)),
            'nip' => str_replace(' ', '', $this->input->post('nip', true)),
            'nama' => $this->input->post('nama', true),
            'tmp_lahir' => $this->input->post('tmp_lahir', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'jns_klmn' => $this->input->post('jns_klmn', true),
            'status' => $this->input->post('status', true),
            'jabatan_id' => $this->input->post('jabatan', true),
            'tamat_jabatan' => $this->input->post('tamat_jabatan', true),
            'tamat_pangkat' => $this->input->post('tamat_pangkat', true),
            'agama' => $this->input->post('agama', true),
            'telepon' => $this->input->post('telepon', true),
            'alamat' => $this->input->post('alamat', true),
            'unit_kerja' => $this->input->post('unit_kerja', true),
            'pensiun' => date('Y-m-d', strtotime('+60 year', strtotime( $this->input->post('tgl_lahir', true)))),
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'th_lulus' => $this->input->post('th_lulus', true),
            'kecamatan' => $this->input->post('kecamatan', true),
        ];
        
        $this->db->insert('guru', $data);

        // insert data user aplikasi
        $dataUser = [
            "guru_id" => $this->db->insert_id(),
            "role_id" => 2,
            "username" => $data['nip'],
            "nama" => $data['nama'],
            "password" => password_hash('1234',PASSWORD_DEFAULT),
            "gambar" => "avatar.jpg",
            "is_active" => 1,
            "date_created" => time(),
        ];
        $this->db->insert('user', $dataUser);
    }

    public function datapribadi()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nip' => str_replace(' ', '', $this->input->post('nip', true)),
            'tmp_lahir' => $this->input->post('tmp_lahir', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'jabatan_id' => $this->input->post('jabatan', true),
        ];

        // var_dump($data);die();
        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('guru', $data);
        
    }

    public function update()
    {
        $data = [
            'nama' => $this->input->post('nama', true),
            'nip' => str_replace(' ', '', $this->input->post('nip', true)),
            'tmp_lahir' => $this->input->post('tmp_lahir', true),
            'tgl_lahir' => $this->input->post('tgl_lahir', true),
            'jabatan_id' => $this->input->post('jabatan', true),
        ];

        // var_dump($data);die();
        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('guru', $data);
        
    }

    public function delete($id)
    {
        $this->db->delete('guru', ['id' => $id]);
    }
}