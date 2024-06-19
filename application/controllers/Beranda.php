<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Beranda extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home Page';
        $data['active_menu'] = 'home';
        $data['content'] = $this->load->view('beranda/beranda', '', true);
        $this->load->view('template/template', $data);
    }
   
    public function data_tentang()
    {
        $data['title'] = 'Tentang';
        $data['active_menu'] = 'tet';
        $data['content'] = $this->load->view('beranda/tentang', '', true);
        $this->load->view('template/template', $data);
    }

}
