<?php

class Jabatan_model extends CI_model {

    public function countAll()
    {
        $query = $this->db->get("jabatan");
        return $query->num_rows();
    }

    public function getAll()
    {
        return $this->db->get('jabatan')->result();
    }

    public function get($id)
    {
        return $this->db->get_where('jabatan', ['id' => $id])->row();
    }

    public function insert()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "pangkat" => $this->input->post('pangkat', true),
            "gol_ruang" => $this->input->post('gol_ruang', true),
        ];
        $this->db->insert('jabatan', $data);
    }

    public function update()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "pangkat" => $this->input->post('pangkat', true),
            "gol_ruang" => $this->input->post('gol_ruang', true),
        ];
        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('jabatan', $data);
    }

    public function delete($id)
    {
        $this->db->delete('jabatan', ['id' => $id]);
    }
}