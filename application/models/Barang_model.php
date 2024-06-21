<?php
// defined('BASEPATH') or exit('No direct script access allowed');
class Barang_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    // Method untuk mengambil semua data barang
    public function get_all_barang()
    {
        $query = $this->db->get('barang');
        return $query->result_array();
    }
    // Method untuk mengambil data barang sesuai pencarian
    public function search_data_barang($keyword)
    {
        $this->db->like('barang', $keyword);
        $query = $this->db->get('barang');
        return $query->result_array();
    }
    public function get_barang_by_id($id)
    {
        $query = $this->db->get_where('barang', ['id' => $id]);
        return $query->row_array();
    }
    // Method untuk menambah data barang
    public function insert_barang($data)
    {
        return $this->db->insert('barang', $data);
    }
    // Method untuk mengupdate data barang
    public function update_barang($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('barang', $data);
    }
    // Method untuk menghapus data barang
    public function delete_barang($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('barang');
    }
}
