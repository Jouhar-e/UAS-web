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
    public function create_mahasiswa()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.',
        ]);
        $this->form_validation->set_rules(
            'angkatan',
            'Angkatan',
            'required|regex_match[/^\d{4}$/]',
            [
                'required' => 'Kolom %s harus diisi.',
                'regex_match' => 'Format %s harus berupa tahun (empat digit angka).',
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required|regex_match[/^[A-Z]$/]',
            [
                'required' => 'Kolom %s harus diisi.',
                'regex_match' => 'Format %s harus berupa satu huruf besar.',
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|min_length[20]',
            [
                'required' => 'Kolom %s harus diisi.',
                'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.',
            ]
        );
        $this->form_validation->set_rules('mata_kuliah_favorit', 'Mata Kuliah
        Favorit', 'required', ['required' => 'Kolom %s wajib diisi.']);
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            ['required' => 'Kolom %s wajib diisi.', 'valid_email'
            => 'Kolom %s harus berisi alamat email yang valid.']
        );
        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenis Kelamin',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'Tanggal Lahir',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Mahasiswa';
            $data['active_menu'] = 'data_mahasiswa';
            $data['content'] = $this->load->view('form_mahasiswa','',true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'npm' => $this->input->post('npm'),
                'angkatan' => $this->input->post('angkatan'),
                'kelas' => $this->input->post('kelas'),
                'alamat' => $this->input->post('alamat'),
                'mata_kuliah_favorit' => $this->input->post('mata_kuliah_favorit'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            ];

            $insert = $this->Mahasiswa_model->insert_mahasiswa($data);
            if ($insert) {
                $this->session->set_flashdata('success', 'Data mahasiswa berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Data mahasiswa gagal ditambahkan.');
            }
            redirect('mahasiswa/data_mahasiswa');
        }
    }

    public function edit_mahasiswa($id)
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules('npm', 'NPM', 'required|numeric', [
            'required' => 'Kolom %s harus diisi.',
            'numeric' => 'Kolom %s hanya boleh berisi angka.',
        ]);
        $this->form_validation->set_rules(
            'angkatan',
            'Angkatan',
            'required|regex_match[/^\d{4}$/]',
            [
                'required' => 'Kolom %s harus diisi.',
                'regex_match' => 'Format %s harus berupa tahun (empat digit
        angka).',
            ]
        );
        $this->form_validation->set_rules(
            'kelas',
            'Kelas',
            'required|regex_match[/^[A-Z]$/]',
            [
                'required' => 'Kolom %s harus diisi.',
                'regex_match' => 'Format %s harus berupa satu huruf besar.',
            ]
        );
        $this->form_validation->set_rules(
            'alamat',
            'Alamat',
            'required|min_length[20]',
            [
                'required' => 'Kolom %s harus diisi.',
                'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.',
            ]
        );
        $this->form_validation->set_rules('mata_kuliah_favorit', 'Mata Kuliah
        Favorit', 'required', ['required' => 'Kolom %s wajib diisi.']);
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|valid_email',
            ['required' => 'Kolom %s wajib diisi.', 'valid_email'
            => 'Kolom %s harus berisi alamat email yang valid.']
        );
        $this->form_validation->set_rules(
            'jenis_kelamin',
            'Jenis Kelamin',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'Tanggal Lahir',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Mahasiswa';
            $data['active_menu'] = 'data_mahasiswa';
            $data['mahasiswa'] = $this->Mahasiswa_model->get_mahasiswa_by_id($id);
            $data['content'] = $this->load->view('form_mahasiswa',$data,true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'npm' => $this->input->post('npm'),
                'angkatan' => $this->input->post('angkatan'),
                'kelas' => $this->input->post('kelas'),
                'alamat' => $this->input->post('alamat'),
                'mata_kuliah_favorit' => $this->input->post('mata_kuliah_favorit'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            ];
            $update = $this->Mahasiswa_model->update_mahasiswa($id, $data);
            if ($update) {
                $this->session->set_flashdata('success', 'Data mahasiswa berhasil diupdate.');
            } else {
                $this->session->set_flashdata('error', 'Data mahasiswa gagal diupdate.');
            }
            redirect('mahasiswa/data_mahasiswa');
        }
    }

    public function delete_mahasiswa($id)
    {
        $delete = $this->Mahasiswa_model->delete_mahasiswa($id);
        if ($delete) {
            $this->session->set_flashdata('success', 'Data mahasiswa berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data mahasiswa gagal dihapus.');
        }
        redirect('mahasiswa/data_mahasiswa');
    }
}
