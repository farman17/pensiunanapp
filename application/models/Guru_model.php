<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Guru_model extends CI_model {

    public function getAll()
    {
        return $this->db->get('guru')->result();
    }

    public function get($id)
    {
        return $this->db->get_where('guru', ['id' => $id])->row();
    }

    public function insert()
    {
        $tanggal = tanggal_pensiun($this->input->post('tgl_lahir', true));
        
        $data = [
            'nip_lama' => str_replace(' ', '', $this->input->post('nip_lama', true)),
            'nip' => str_replace(' ', '', $this->input->post('nip', true)),
            'nama' => $this->input->post('nama', true),
            'tmp_lahir' => $this->input->post('tmp_lahir', true),
            'tgl_lahir' => tanggal_en($this->input->post('tgl_lahir', true)),
            'jns_klmn' => $this->input->post('jns_klmn', true),
            'status' => $this->input->post('status', true),
            'jabatan_id' => $this->input->post('jabatan', true),
            'agama' => $this->input->post('agama', true),
            'telepon' => $this->input->post('telepon', true),
            'alamat' => $this->input->post('alamat', true),
            'unit_kerja' => $this->input->post('unit_kerja', true),
            'pensiun' => $tanggal,
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
            "password" => password_hash($this->input->post('password1'),PASSWORD_DEFAULT),
            "gambar" => "avatar.jpg",
            "is_active" => 1,
            "date_created" => time(),
        ];
        $this->db->insert('user', $dataUser);
    }

    public function update()
    {
        $tanggal = tanggal_pensiun($this->input->post('tgl_lahir', true));
        $data = [
            'nip_lama' => str_replace(' ', '', $this->input->post('nip_lama', true)),
            'nip' => str_replace(' ', '', $this->input->post('nip', true)),
            'nama' => $this->input->post('nama', true),
            'tmp_lahir' => $this->input->post('tmp_lahir', true),
            'tgl_lahir' => tanggal_en($this->input->post('tgl_lahir', true)),
            'jns_klmn' => $this->input->post('jns_klmn', true),
            'status' => $this->input->post('status', true),
            'jabatan_id' => $this->input->post('jabatan', true),
            'agama' => $this->input->post('agama', true),
            'telepon' => $this->input->post('telepon', true),
            'alamat' => $this->input->post('alamat', true),
            'unit_kerja' => $this->input->post('unit_kerja', true),
            'pensiun' =>$tanggal,
            'pendidikan_terakhir' => $this->input->post('pendidikan_terakhir', true),
            'th_lulus' => $this->input->post('th_lulus', true),
            'kecamatan' => $this->input->post('kecamatan', true),
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