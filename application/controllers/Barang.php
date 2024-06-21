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
    public function search_barang()
    {
        $keyword = $this->input->post('keyword');
        $data['title'] = 'Data Barang';
        $data['active_menu'] = 'data_barang';
        $data['barang'] = $this->Barang_model->search_data_barang($keyword);
        $data['keyword'] = $keyword;
        $data['content'] = $this->load->view('list_barang', $data, true);
        $this->load->view('template/template', $data);
    }
    public function create_barang()
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'barang',
            'Barang',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi',
            'required|min_length[20]',
            [
                'required' => 'Kolom %s harus diisi.',
                'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.',
            ]
        );
        $this->form_validation->set_rules(
            'hargabeli',
            'Harga Beli',
            'required',
            [
                'required' => 'Kolom %s wajib diisi.',
                'numeric' => 'Kolom %s hanya boleh berisi angka.'
            ]
        );
        $this->form_validation->set_rules(
            'hargajual',
            'Harga Jual',
            'required',
            [
                'required' => 'Kolom %s wajib diisi.',
                'numeric' => 'Kolom %s hanya boleh berisi angka.'
            ]
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok',
            'required',
            [
                'required' => 'Kolom %s wajib diisi.',
                'numeric' => 'Kolom %s hanya boleh berisi angka.'
            ]
        );
        $this->form_validation->set_rules(
            'supplier',
            'supplier',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'tglmasuk',
            'Tanggal Masuk',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Tambah Barang';
            $data['active_menu'] = 'data_barang';
            $data['content'] = $this->load->view('form_barang', '', true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'barang' => $this->input->post('barang'),
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'hargabeli' => $this->input->post('hargabeli'),
                'hargajual' => $this->input->post('hargajual'),
                'stok' => $this->input->post('stok'),
                'supplier' => $this->input->post('supplier'),
                'tglmasuk' => $this->input->post('tglmasuk'),
            ];

            $insert = $this->Barang_model->insert_barang($data);
            if ($insert) {
                $this->session->set_flashdata('success', 'Data barang berhasil ditambahkan.');
            } else {
                $this->session->set_flashdata('error', 'Data barang gagal ditambahkan.');
            }
            redirect('barang/data_barang');
        }
    }

    public function edit_barang($id)
    {
        $this->form_validation->set_rules(
            'kode',
            'Kode',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'barang',
            'Barang',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'kategori',
            'Kategori',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'deskripsi',
            'Deskripsi',
            'required|min_length[20]',
            [
                'required' => 'Kolom %s harus diisi.',
                'min_length' => 'Kolom %s minimal harus memiliki 20 karakter.',
            ]
        );
        $this->form_validation->set_rules(
            'hargabeli',
            'Harga Beli',
            'required',
            [
                'required' => 'Kolom %s wajib diisi.',
                'numeric' => 'Kolom %s hanya boleh berisi angka.'
            ]
        );
        $this->form_validation->set_rules(
            'hargajual',
            'Harga Jual',
            'required',
            [
                'required' => 'Kolom %s wajib diisi.',
                'numeric' => 'Kolom %s hanya boleh berisi angka.'
            ]
        );
        $this->form_validation->set_rules(
            'stok',
            'Stok',
            'required',
            [
                'required' => 'Kolom %s wajib diisi.',
                'numeric' => 'Kolom %s hanya boleh berisi angka.'
            ]
        );
        $this->form_validation->set_rules(
            'supplier',
            'supplier',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        $this->form_validation->set_rules(
            'tglmasuk',
            'Tanggal Masuk',
            'required',
            ['required' => 'Kolom %s wajib diisi.']
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Edit Barang';
            $data['active_menu'] = 'data_barang';
            $data['barang'] = $this->Barang_model->get_barang_by_id($id);
            $data['content'] = $this->load->view('form_barang', $data, true);
            $this->load->view('template/template', $data);
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'barang' => $this->input->post('barang'),
                'kategori' => $this->input->post('kategori'),
                'deskripsi' => $this->input->post('deskripsi'),
                'hargabeli' => $this->input->post('hargabeli'),
                'hargajual' => $this->input->post('hargajual'),
                'stok' => $this->input->post('stok'),
                'supplier' => $this->input->post('supplier'),
                'tglmasuk' => $this->input->post('tglmasuk'),
            ];
            $update = $this->Barang_model->update_barang($id, $data);
            if ($update) {
                $this->session->set_flashdata('success', 'Data barang berhasil diupdate.');
            } else {
                $this->session->set_flashdata('error', 'Data barang gagal diupdate.');
            }
            redirect('barang/data_barang');
        }
    }

    public function delete_barang($id)
    {
        $delete = $this->Barang_model->delete_barang($id);
        if ($delete) {
            $this->session->set_flashdata('success', 'Data barang berhasil dihapus.');
        } else {
            $this->session->set_flashdata('error', 'Data barang gagal dihapus.');
        }
        redirect('barang/data_barang');
    }
}
