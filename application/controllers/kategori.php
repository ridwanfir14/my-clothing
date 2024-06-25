<?php

class Kategori extends CI_Controller
{
    public function tshirt()
    {
        $data['judul'] = 'T-Shirt';
        $data['tshirt'] = $this->model_kategori->data_tshirt()->result();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('tshirt', $data);
        $this->load->view('templates/footer');
    }

    public function crewneck()
    {
        $data['judul'] = 'Crewneck';
        $data['crewneck'] = $this->model_kategori->data_crewneck()->result();
        $this->load->view('templates/header',$data);
        $this->load->view('templates/sidebar');
        $this->load->view('crewneck', $data);
        $this->load->view('templates/footer');
    }

    public function hoodie()
    {
        $data['judul'] = 'Hooide';
        $data['hoodie'] = $this->model_kategori->data_hoodie()->result();
        $this->load->view('templates/header' ,$data);
        $this->load->view('templates/sidebar');
        $this->load->view('hoodie', $data);
        $this->load->view('templates/footer');
    }
}