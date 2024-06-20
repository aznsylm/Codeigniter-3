<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('M_kategori');
    }

    public function index() {
        $data['kategori'] = $this->M_kategori->get_all_kategori();
        $this->load->view('backend/v_kategori/read', $data);
    }

    public function create() {
        $this->load->view('backend/v_kategori/create');
    }

    public function store() {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->M_kategori->insert_kategori($data);
        redirect('kategori');
    }

    public function edit($id) {
        $data['kategori'] = $this->M_kategori->get_kategori_by_id($id);
        $this->load->view('backend/v_kategori/edit', $data);
    }

    public function update($id) {
        $data = array(
            'nama_kategori' => $this->input->post('nama_kategori')
        );
        $this->M_kategori->update_kategori($id, $data);
        redirect('kategori');
    }

    public function delete($id) {
        $this->M_kategori->delete_kategori($id);
        redirect('kategori');
    }
}
