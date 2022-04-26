<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori extends CI_Model
{

    // Model Kategori 
    public function r_kategori()
    {
        $this->db->select('*');
        $this->db->from('kategori');
        return $this->db->get()->result();
    }

    public function w_kategori($data)
    {
        $this->db->insert('kategori', $data);
    }

    public function u_kategori($data)
    {
        $this->db->where('id_kategori', $data['id_kategori']);
        $this->db->update('kategori', $data);
    }

    public function d_kategori($data)
    {
        $this->db->delete('kategori', $data);
    }
}

/* End of file M_laporan.php */