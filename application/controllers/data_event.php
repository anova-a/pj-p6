<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_event extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $this->load->model('data_model');

        $data['tb_jnslomba'] = $this->data_model->getData();

        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('data_event',$data);
        $this->load->view('template/footer');
    }
    public function hapus($id)
    {
        $this->db->delete('tb_jnslomba',['id_jns' => $id]);
        redirect('data_event');
    }
    
    public function edit($id)
    {
        $this->load->model('data_model');
        
        $data['edit'] = $this->data_model->getDataById($id);


        $this->load->view('template/header');
        $this->load->view('template/menu');
        $this->load->view('edit2',$data);
        $this->load->view('template/footer');
    }
    
    public function update()
    {
        $data =
        [
            "nama_lomba" => $this->input->post('nama_lomba',true),
            "penyelenggara" => $this->input->post('penyelenggara',true)
        
        ];

        $this->db->where('id_jns',$this->input->post('id_jns'));
        $this->db->update('tb_jnslomba',$data);
        redirect('data_event');
    }
}