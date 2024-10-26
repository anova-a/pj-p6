<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pendaftaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {

        $this->load->model('pendaftaran_model');

        $data['tb_pendaftaran'] = $this->pendaftaran_model->getPendaftaran();

        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('pendaftaran',$data);
        $this->load->view('template/footer');
    }
    public function hapus($id)
    {
        $this->db->delete('tb_pendaftaran',['id_lomba' => $id]);
        redirect('pendaftaran');
    }
    public function edit($id)
    {
        $this->load->model('pendaftaran_model');
        $data['tb_jnslomba'] = $this->db->get('tb_jnslomba')->result_array();
        $data['edit'] = $this->pendaftaran_model->getPendaftaranById($id);


        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('edit',$data);
        $this->load->view('template/footer');
    }
    
    public function update()
    {
        $data =
        [
            "id_lomba" => $this->input->post('nama_lomba',true),
            "nama_pendaftaran" => $this->input->post('nama_pendaftaran',true),
            "kelas" => $this->input->post('kelas',true),
            "no_hp" => $this->input->post('no_hp',true),
            "tgl_daftar" => $this->input->post('tgl_daftar',true)
        
        ];

        $this->db->where('id',$this->input->post('id'));
        $this->db->update('tb_pendaftaran',$data);
        redirect('pendaftaran');
    }
}