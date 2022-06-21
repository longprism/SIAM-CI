<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs_model extends CI_Model {

  public function insert_krs($nim)
  {
    $dataarr = array('nim'=>$nim, 'setuju'=>true);
    $this->db->db_debug = false;
    if (!$this->db->insert('krs', $dataarr)) {
      $error = $this->db->error();
      return false;
    } else {
      return $this->db->insert_id();
    }
  }
  public function insert_krsmat($data)
  {
    $this->db->db_debug = false;
    if (!$this->db->insert('krs_has_matkul', $data)) {
      $error = $this->db->error();
      return false;
    } else {
      return $this->db->insert_id();
    }
  }
  public function get_krs($id)
  {
    $this->db->where('nim', $id);
    $query = $this->db->get('krs');
    return $query->result();
  }
}

