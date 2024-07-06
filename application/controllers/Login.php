<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->model('Petugas_model');
    }

    public function index()
    {
        $this->load->view('beranda/login');
    }

    public function authenticate()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Petugas_model->get_user($username, $password);

        if ($user) {
            $this->session->set_userdata('user', $user);
            $data['title'] = 'Home Page';
            $data['active_menu'] = 'home';
            $data['content'] = $this->load->view('beranda/beranda', '', true);
            $this->load->view('template/template', $data);
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('user');
        redirect('login');
    }
}
