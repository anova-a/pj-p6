<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class daftar extends CI_Controller {

    
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('daftar',);
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data =
        [
            "nama" => $this->input->post('nama',true),
            "username" => $this->input->post('username',true),
            "password" => password_hash ($this->input->post('password',), PASSWORD_DEFAULT)
            
        ];
        $this->db->insert('user',$data);
        $this->session->set_flashdata('massage', '<h2> Berhasil daftar</h2>');
        redirect('login');
}
}