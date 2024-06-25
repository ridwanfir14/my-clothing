<?php

class model_kategori extends CI_Model
{
    public function data_tshirt()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'T-Shirt'));
    }

    public function data_crewneck()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Crewneck'));
    }

    public function data_hoodie()
    {
        return $this->db->get_where('tb_barang', array('kategori' => 'Hoodie'));
    }
}