<?php
// defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    // Method untuk mengambil semua data mahasiswa
    public function get_all_mahasiswa()
    {
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }
    // Method untuk mengambil data mahasiswa sesuai pencarian
    public function search_data_mahasiswa($keyword)
    {
        $this->db->like('nama', $keyword);
        $query = $this->db->get('mahasiswa');
        return $query->result_array();
    }

    public function get_mahasiswa_by_id($id)
    {
        $query = $this->db->get_where('mahasiswa', ['id' => $id]);
        return $query->row_array();
    }
    // Method untuk menambah data mahasiswa
    public function insert_mahasiswa($data)
    {
        return $this->db->insert('mahasiswa', $data);
    }
    // Method untuk mengupdate data mahasiswa
    public function update_mahasiswa($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('mahasiswa', $data);
    }
    // Method untuk menghapus data mahasiswa
    public function delete_mahasiswa($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('mahasiswa');
    }
}
