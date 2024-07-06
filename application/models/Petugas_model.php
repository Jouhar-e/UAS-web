<?php
// defined('BASEPATH') or exit('No direct script access allowed');
class Petugas_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    // Method untuk mengambil semua data petugas
    public function get_all_petugas()
    {
        $query = $this->db->get('petugas');
        return $query->result_array();
    }
    // Method untuk mengambil data petugas sesuai pencarian
    public function search_data_petugas($keyword)
    {
        $this->db->like('petugas', $keyword);
        $query = $this->db->get('petugas');
        return $query->result_array();
    }
    public function get_petugas_by_id($id)
    {
        $query = $this->db->get_where('petugas', ['idpetugas' => $id]);
        return $query->row_array();
    }
    // Method untuk menambah data petugas
    public function insert_petugas($data)
    {
        return $this->db->insert('petugas', $data);
    }
    // Method untuk mengupdate data petugas
    public function update_petugas($id, $data)
    {
        $this->db->where('idpetugas', $id);
        return $this->db->update('petugas', $data);
    }
    // Method untuk menghapus data petugas
    public function delete_petugas($id)
    {
        $this->db->where('idpetugas', $id);
        return $this->db->delete('petugas');
    }

    public function get_user($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password)); // Anggap password disimpan dalam bentuk hash md5
        $query = $this->db->get('petugas');

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

}
