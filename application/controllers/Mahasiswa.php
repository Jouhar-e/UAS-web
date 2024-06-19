<?php

class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function data_mahasiswa()
    {
        $data['title'] = 'Data Mahasiwa';
        $data['active_menu'] = 'data_mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->get_all_mahasiswa();
        $data['content'] = $this->load->view('list_mahasiswa', $data, true);
        $this->load->view('template/template', $data);
    }
    public function search_mahasiswa()
    {
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Data Mahasiwa';
        $data['active_menu'] = 'data_mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->search_data_mahasiswa($keyword);
        $data['keyword'] = $keyword;
        $data['content'] = $this->load->view('list_mahasiswa', $data, true);
        $this->load->view('template/template', $data);
    }
}
