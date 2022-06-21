<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

  public function login_check($nim, $password)
  {
    $this->db->where('nim', $nim);
    $query = $this->db->get('mahasiswa');
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $stored_pass = $this->encryption->decrypt($row->password);
        if ($password == $stored_pass) {
          $this->session->set_userdata('nim', $row->nim);
        } else {
          return 2;
        }
      }
    } else {
      return 1;
    }
  }
}
