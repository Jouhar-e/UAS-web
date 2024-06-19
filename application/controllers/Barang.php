<?php

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
    }

    public function data_barang()
    {
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->get_all_barang();
        $data['content'] = $this->load->view('list_barang', $data, true);
        $this->load->view('template/template', $data);
    }
    public function search_mahasiswa()
    {
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->search_data_barang($keyword);
        $data['keyword'] = $keyword;
        $data['content'] = $this->load->view('list_barang', $data, true);
        $this->load->view('template/template', $data);
    }
}
