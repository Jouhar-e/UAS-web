<?php
// defined('BASEPATH') or exit('No direct script access allowed');
class Proyek_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    // Method untuk mengambil semua data proyek
    public function get_all_proyek()
    {
        $query = $this->db->get('proyek');
        return $query->result_array();
    }
    // Method untuk mengambil data proyek sesuai pencarian
    public function search_data_proyek($keyword)
    {
        $this->db->like('proyek', $keyword);
        $query = $this->db->get('proyek');
        return $query->result_array();
    }

    public function get_proyek_by_id($id)
    {
        $query = $this->db->get_where('proyek', ['idproyek' => $id]);
        return $query->row_array();
    }
    // Method untuk menambah data proyek
    public function insert_proyek($data)
    {
        // print_r($data);
        return $this->db->insert('proyek', $data);
    }
    // Method untuk mengupdate data proyek
    public function update_proyek($id, $data)
    {
        $this->db->where('idproyek', $id);
        return $this->db->update('proyek', $data);
    }
    // Method untuk menghapus data proyek
    public function delete_proyek($id)
    {
        $this->db->where('idproyek', $id);
        return $this->db->delete('proyek');
    }
}
