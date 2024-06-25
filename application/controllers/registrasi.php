<?php

class Registrasi extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required|min_length[3]',
            [
                'required' => 'Nama Belum diisi!!',
                'min_length' => 'Nama Terlalu Pendek'
            ]
        );
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|min_length[3]',
            [
                'required' => 'Username Belum diisi!!',
                'min_length' => 'Username Terlalu Pendek'
            ]
        );
        $this->form_validation->set_rules(
            'password1',
            'Password',
            'required|trim|matches[password2]|min_length[2]',
            [
                'required' => 'Password Harus diisi',
                'matches' => 'Password Tidak Sama!!',
                'min_length' => 'Password Terlalu Pendek'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Password',
            'required|trim|matches[password1]|min_length[2]',
            [
                'required' => 'Password Harus diisi',
                'matches' => 'Password Tidak Sama!!',
                'min_length' => 'Password Terlalu Pendek'
            ]
        );
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi';
            $this->load->view('templates/header', $data);
            $this->load->view('registrasi');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'id' => '',
                'nama' => $this->input->post('nama'),
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password1'),
                'role_id' => 2,
            );
            $this->db->insert('tb_user', $data);
            redirect(('auth/login'));
        }
    }
}
