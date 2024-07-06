<?php

class Proyek extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Proyek_model');
    }

    public function data_proyek()
    {
        $data['title'] = 'Data Proyek';
        $data['active_menu'] = 'data_proyek';
        $data['proyek'] = $this->Proyek_model->get_all_proyek();
        $data['content'] = $this->load->view('list_proyek', $data, true);
        $this->load->view('template/template', $data);
    }
    public function search_proyek()
    {
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Data Proyek';
        $data['active_menu'] = 'data_proyek';
        $data['proyek'] = $this->Proyek_model->search_data_proyek($keyword);
        $data['keyword'] = $keyword;
        $data['content'] = $this->load->view('list_proyek', $data, true);
        $this->load->view('template/template', $data);
    }
    public function create_proyek()
    {
        $this->form_validation->set_rules(
            'proyek',
            'Nama Proyek',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi',
            'required',
            [
                'required' => 'Kolom %s harus diisi.',
            ]
        );
        $this->form_validation->set_rules(
            'tglmulai',
            'Tanggal Mulai',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'tglselesai',
            'Tanggal Selesai',
        );
        $this->form_validation->set_rules('anggaran', 'Anggaran', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.',
        ]);
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Proyek';
            $data['active_menu'] = 'data_proyek';
            $data['content'] = $this->load->view('form_proyek','',true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'proyek' => $this->input->post('proyek'),
                'deskripsi_proyek' => $this->input->post('deskripsi'),
                'tanggal_mulai' => $this->input->post('tglmulai'),
                'tanggal_selesai' => $this->input->post('tglselesai'),
                'anggaran_proyek' => $this->input->post('anggaran'),
                'status_proyek' => $this->input->post('status'),
            ];

            $insert = $this->Proyek_model->insert_proyek($data);
            if ($insert) {
                $this->session->set_flashdata('success', 'Data Proyek berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Data Proyek gagal ditambahkan.');
            }
            redirect('proyek/data_proyek');
        }
    }

    public function edit_proyek($id)
    {
        $this->form_validation->set_rules(
            'proyek',
            'Nama Proyek',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi',
            'required',
            [
                'required' => 'Kolom %s harus diisi.',
            ]
        );
        $this->form_validation->set_rules(
            'tglmulai',
            'Tanggal Mulai',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'tglselesai',
            'Tanggal Selesai',
        );
        $this->form_validation->set_rules('anggaran', 'Anggaran', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.',
        ]);
        $this->form_validation->set_rules(
            'status',
            'Status',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit proyek';
            $data['active_menu'] = 'data_proyek';
            $data['proyek'] = $this->Proyek_model->get_proyek_by_id($id);
            $data['content'] = $this->load->view('form_proyek',$data,true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'proyek' => $this->input->post('proyek'),
                'deskripsi_proyek' => $this->input->post('deskripsi'),
                'tanggal_mulai' => $this->input->post('tglmulai'),
                'tanggal_selesai' => $this->input->post('tglselesai'),
                'anggaran_proyek' => $this->input->post('anggaran'),
                'status_proyek' => $this->input->post('status'),
            ];
            $update = $this->Proyek_model->update_proyek($id, $data);
            if ($update) {
                $this->session->set_flashdata('success', 'Data proyek berhasil diupdate.');
            } else {
                $this->session->set_flashdata('error', 'Data proyek gagal diupdate.');
            }
            redirect('proyek/data_proyek');
        }
    }

    public function delete_proyek($id)
    {
        $delete = $this->Proyek_model->delete_proyek($id);
        if ($delete) {
            $this->session->set_flashdata('success', 'Data proyek berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data proyek gagal dihapus.');
        }
        redirect('proyek/data_proyek');
    }
}
