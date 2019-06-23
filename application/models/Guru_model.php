<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');
class Guru_model extends CI_model {

    // fungsi menambah tanggal 60th untuk tanggal pensiun
    private function tanggal_en($date){
		$tanggal = substr($date,8,2);
		$bulan = substr($date,5,2);
		$tahun = substr($date,0,4) + 60;
		return $tahun.'-'.$bulan.'-'.$tanggal;		 
    }

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
        $tanggal = $this->tanggal_en($this->input->post('tgl_lahir', true));
        
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
            "password" => password_hash('1234',PASSWORD_DEFAULT),
            "gambar" => "avatar.jpg",
            "is_active" => 1,
            "date_created" => time(),
        ];
        $this->db->insert('user', $dataUser);
    }

    public function update()
    {
        $tanggal = $this->tanggal_en($this->input->post('tgl_lahir', true));

        $data = [
            'nip_lama' => str_replace(' ', '', $this->input->post('nip_lama', true)),
            // 'nip' => str_replace(' ', '', $this->input->post('nip', true)),
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

    //ini untuk memasukkan kedalam tabel guru dr import exel
    function loaddata($dataarray) {
        for ($i = 0; $i < count($dataarray); $i++) {
            $data = array(
                'nip_lama' => str_replace(' ', '', $dataarray[$i]['nip_lama']),
                'nip' => str_replace(' ', '', $dataarray[$i]['nip']),
                'nama' => $dataarray[$i]['nama'],
                'tmp_lahir' => $dataarray[$i]['tmp_lahir'],
                'tgl_lahir' => $dataarray[$i]['tgl_lahir'],
                'jns_klmn' => $dataarray[$i]['jns_klmn'],
                'status' => $dataarray[$i]['status'],
                // 'jabatan_id' => 1,
                'tamat_jabatan' => $dataarray[$i]['tamat_jabatan'],
                'tamat_pangkat' => $dataarray[$i]['tamat_pangkat'],
                'agama' => $dataarray[$i]['agama'],
                'telepon' => $dataarray[$i]['telepon'],
                'alamat' => $dataarray[$i]['alamat'],
                'unit_kerja' => $dataarray[$i]['unit_kerja'],
                'pensiun' => $dataarray[$i]['pensiun'],
                'pendidikan_terakhir' => $dataarray[$i]['pendidikan_terakhir'],
                'th_lulus' => $dataarray[$i]['th_lulus'],
                'kecamatan' => $dataarray[$i]['kecamatan'],
            );
            //ini untuk menambahkan apakah dalam tabel sudah ada data yang sama
            //apabila data sudah ada maka data di-skip
            // saya contohkan kalau ada data nama yang sama maka data tidak dimasukkan
            $cek = $this->db->get_where('guru',['nama' => $dataarray[$i]['nama']])->num_rows();
            $error = "";
            if ($cek < 1) {
                $this->db->insert('guru', $data);
            } else {
                $error .= "- data ".$dataarray[$i]['nama']." sudah ada<br>";
                
            }
        }

        $this->session->set_flashdata('flash',$error);
    }
}