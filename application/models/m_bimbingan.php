<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bimbingan extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('tb_bimbingan');
    }
    public function input_data($data)
    {
        $this->db->insert('tb_bimbingan', $data);
    }
    public function tampil_dataindividu()
    {
        return $this->db->get('tb_buatjadwal');
    }
    public function input_dataindividu($data)
    {
        $this->db->insert('tb_buatjadwal', $data);
    }
    public function tampil_catatan()
    {
        return $this->db->get('tb_catat');
    }
    public function input_catatan($data)
    {
        $this->db->insert('tb_catat', $data);
    }
}
