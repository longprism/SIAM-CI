<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

  public function get_user($id)
  {
    $this->db->where('nim', $id);
    $query = $this->db->get('mahasiswa');
    return $query->result();
  }
  public function get_jadwal($id)
  {
    $arr = array('m.nim' => $id);
    $this->db->select('*');
    $this->db->from('krs k');
    $this->db->join('mahasiswa m', 'm.nim = k.nim');
    $this->db->join('krs_has_matkul khm', 'khm.id_krs = k.id_krs');
    $this->db->join('matkul mk', 'mk.kode_matkul = khm.kode_matkul');
    $this->db->where($arr);
    $this->db->order_by('khm.kode_matkul','asc');         
    $query = $this->db->get();
    return $query->result();
  }
  public function get_hadir($id)
  {
    $arr = array('m.nim' => $id);
    $this->db->select('*');
    $this->db->from('absensi a');
    $this->db->join('mahasiswa m', 'm.nim = a.nim');
    $this->db->join('matkul mk', 'mk.kode_matkul = a.kode_matkul');
    $this->db->where($arr);
    $this->db->order_by('a.kode_matkul','asc');
    $query = $this->db->get();
    return $query->result();
  }
}
