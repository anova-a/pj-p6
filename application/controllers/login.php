<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    
    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('login');
        $this->load->view('template/footer');
    }
    
    public function validasi()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        

        $user = $this->db->get_where('user',['username' => $username])->row_array();

        if($user) {
            if(password_verify($password, $user['password'])) {
                $data=['username' => $user['username']];

                $this->session->set_userdata($data);
                redirect('beranda');
            } else {
                $this->session->set_flashdata('massage', '<h2>password salah</h2>');
                redirect('login');
            }
        }  else {
            $this->session->set_flashdata('massage', '<h2>username salah</h2>');
            redirect('login');
        } 
    }

    public function logout()
    {
        $this->session->unset_userdata('username');

        $this->session->set_flashdata('massage', '<h1>Berhasil Logout</h1>');
        redirect('login');
    }
}