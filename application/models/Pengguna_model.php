<?php

class Pengguna_model extends CI_model {

    public function countAll()
    {
        $query = $this->db->get("user");
        return $query->num_rows();
    }

    public function getAll()
    {
        return $this->db->get('user')->result();
    }

    public function get($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row();
    }

    public function insert()
    {
        // $data = [
        //     "nama" => $this->input->post('nama', true),
        //     "pangkat" => $this->input->post('pangkat', true),
        //     "gol_ruang" => $this->input->post('gol_ruang', true),
        // ];
        // $this->db->insert('user', $data);
    }

    public function update()
    {
        $data = [
            "username" => $this->input->post('username', true),
            "role_id" => $this->input->post('role_id', true),
        ];
        $this->db->where('id', $this->input->post('id', true));
        $this->db->update('user', $data);
    }

    public function delete($id)
    {
        $this->db->delete('user', ['id' => $id]);
    }
}