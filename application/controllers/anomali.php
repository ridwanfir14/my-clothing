<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anomali extends CI_Controller
{
	public function index()
	{
		$data['judul'] = 'Pengunjung';
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('templates/footer');
	}
}
