<?php
// defined('BASEPATH') or exit('No direct script access allowed');
class Barang_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    // Method untuk mengambil semua data mahasiswa
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
}
