<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah2 extends CI_Controller {
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('tambah2');
        $this->load->view('template/footer');
    }
    public function tambah2()
    {
        $data =
        [
            //menangkap apun yang kita ketik
            "nama_lomba" => $this->input->post('nama_lomba',true),
            "penyelenggara" => $this->input->post('penyelenggara',true),
            
            
        ];
        $this->db->insert('tb_jnslomba',$data);
        redirect('data_event');
    }
}