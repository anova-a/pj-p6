<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model {
    public function getPendaftaran()
    {
        $this->db->select('*');
        $this->db->from('tb_pendaftaran');
        $this->db->join('tb_jnslomba','tb_jnslomba.id_jns = tb_pendaftaran.id_lomba');
        return $this->db->get()->result_array();
    }
    public function getPendaftaranById($id)
    {
        return $this->db->get_where('tb_pendaftaran',['id' => $id])->row_array();
    }
}