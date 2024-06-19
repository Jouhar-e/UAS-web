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
}
