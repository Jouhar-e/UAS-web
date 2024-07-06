<?php

class Petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Petugas_model');
    }

    public function data_petugas()
    {
        $data['title'] = 'Data petugas';
        $data['active_menu'] = 'data_petugas';
        $data['petugas'] = $this->Petugas_model->get_all_petugas();
        $data['content'] = $this->load->view('list_petugas', $data, true);
        $this->load->view('template/template', $data);
    }
    public function search_petugas()
    {
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Data petugas';
        $data['active_menu'] = 'data_petugas';
        $data['petugas'] = $this->Petugas_model->search_data_petugas($keyword);
        $data['keyword'] = $keyword;
        $data['content'] = $this->load->view('list_petugas', $data, true);
        $this->load->view('template/template', $data);
    }
    public function create_petugas()
    {
        $this->form_validation->set_rules(
            'petugas',
            'Petugas',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah petugas';
            $data['active_menu'] = 'data_petugas';
            $data['content'] = $this->load->view('form_petugas', '', true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'petugas' => $this->input->post('petugas'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
            ];

            $insert = $this->Petugas_model->insert_petugas($data);
            if ($insert) {
                $this->session->set_flashdata('success', 'Data petugas berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Data petugas gagal ditambahkan.');
            }
            redirect('petugas/data_petugas');
        }
    }

    public function edit_petugas($id)
    {
        $this->form_validation->set_rules(
            'petugas',
            'petugas',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'username',
            'Kode',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'password',
            'Kategori',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit petugas';
            $data['active_menu'] = 'data_petugas';
            $data['petugas'] = $this->Petugas_model->get_petugas_by_id($id);
            $data['content'] = $this->load->view('form_petugas', $data, true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'petugas' => $this->input->post('petugas'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
            ];
            $update = $this->Petugas_model->update_petugas($id, $data);
            if ($update) {
                $this->session->set_flashdata('success', 'Data petugas berhasil diupdate.');
            } else {
                $this->session->set_flashdata('error', 'Data petugas gagal diupdate.');
            }
            redirect('petugas/data_petugas');
        }
    }

    public function delete_petugas($id)
    {
        $delete = $this->Petugas_model->delete_petugas($id);
        if ($delete) {
            $this->session->set_flashdata('success', 'Data petugas berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data petugas gagal dihapus.');
        }
        redirect('petugas/data_petugas');
    }
}
