<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kategori extends CI_Model {

    private $table = 'kategori';

    public function GetAll()
    {
        return $this->db->get($this->table)->result_array();
    }

    public function get_all_kategori() {
        return $this->db->get('kategori')->result_array();
    }

    public function insert_kategori($data) {
        return $this->db->insert('kategori', $data);
    }

    public function get_kategori_by_id($id) {
        return $this->db->get_where('kategori', array('id_kategori' => $id))->row_array();
    }

    public function update_kategori($id, $data) {
        $this->db->where('id_kategori', $id);
        return $this->db->update('kategori', $data);
    }

    public function delete_kategori($id) {
        $this->db->where('id_kategori', $id);
        return $this->db->delete('kategori');
    }
}
