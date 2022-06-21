<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_model extends CI_Model {

  public function get_allmatkul()
  {
    $query = $this->db->get('matkul');
    return $query->result();
  }
}

