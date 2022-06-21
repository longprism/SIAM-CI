<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen_model extends CI_Model {

  public function set_kehadiran($nim, $kodemk)
  {
    $arr = array('nim' => $nim, 'kode_matkul' => $kodemk);
    $this->db->insert('absensi', $arr);
    return true;
  }
  public function get_session($nim)
  {
    $this->db->where('nim', $nim);
    $query = $this->db->get('mhs_has_session');
    return $query->result();
  }
  public function set_absen($kdmk)
  {
    $data = array('kode_matkul' => $kdmk);
    $this->db->insert('attendance_session', $data);
    $query = $this->db->get('matkul');
    foreach ($query->result() as $key) {
      if ($key->kode_matkul == $kdmk) {
        $this->db->set('tatap_muka', $key->tatap_muka+1);
        $this->db->where('kode_matkul', $kdmk);
        $this->db->update('matkul');
      }
    }
}
  public function get_absen($kode_mat)
  {
    $this->db->select('*');
    $this->db->from('krs k');
    $this->db->join('mahasiswa m', 'm.nim = k.nim');
    $this->db->join('krs_has_matkul khm', 'khm.id_krs = k.id_krs');
    $this->db->join('matkul mk', 'mk.kode_matkul = khm.kode_matkul');
    $this->db->join('absensi a', 'a.kode_matkul = mk.kode_matkul');
    $this->db->join('attendance_session as', 'as.kode_matkul = mk.kode_matkul');
    $query = $this->db->get();
    $dataarr = array();
    foreach ($query->result() as $row) {
      foreach ($kode_mat as $km) {
        if ($row->kode_matkul == $km->kode_matkul) {
          $dataarr[] = $row;
        }
      }
    }
    return $dataarr;
  }
  public function get_allabsen()
  {
    $this->db->select('*');
    $this->db->from('attendance_session as');
    $this->db->join('matkul m', 'm.kode_matkul = as.kode_matkul');
    $this->db->order_by('as.kode_matkul','asc');
    $query = $this->db->get();
    return $query->result();
  }
  public function drop_absen($idabs)
  {
    $this->db->delete('mhs_has_session', array('id_att_session'=>$idabs));
    $this->db->delete('attendance_session', array('id_att_session'=>$idabs));
  }
  public function set_hadir($nim, $kodem, $idatt)
  {
    $this->db->select('hadir');
    $this->db->where('nim', $nim);
    $this->db->where('kode_matkul', $kodem);
    $query = $this->db->get('absensi');
    $hasil = $query->result();
    $this->db->set('hadir', $hasil[0]->hadir+1);
    $this->db->where('kode_matkul', $kodem);
    $this->db->where('nim', $nim);
    $query2 = $this->db->update('absensi');
    $data = array('nim' => $nim, 'id_att_session' => $idatt);
    $this->db->set($data);
    $query=$this->db->insert('mhs_has_session');
    return true;
  }
  public function set_izin($nim, $kodem, $idatt)
  {
    $this->db->select('izin');
    $this->db->where('nim', $nim);
    $this->db->where('kode_matkul', $kodem);
    $query = $this->db->get('absensi');
    $hasil = $query->result();
    $this->db->set('izin', $hasil[0]->izin+1);
    $this->db->where('kode_matkul', $kodem);
    $this->db->where('nim', $nim);
    $query2 = $this->db->update('absensi');
    $data = array('nim' => $nim, 'id_att_session' => $idatt);
    $this->db->set($data);
    $query=$this->db->insert('mhs_has_session');
    return true;
  }
  public function set_alpha($nim, $kodem, $idatt)
  {
    $this->db->select('alpha');
    $this->db->where('nim', $nim);
    $this->db->where('kode_matkul', $kodem);
    $query = $this->db->get('absensi');
    $hasil = $query->result();
    $this->db->set('alpha', $hasil[0]->alpha+1);
    $this->db->where('kode_matkul', $kodem);
    $this->db->where('nim', $nim);
    $query2 = $this->db->update('absensi');
    $data = array('nim' => $nim, 'id_att_session' => $idatt);
    $this->db->set($data);
    $query=$this->db->insert('mhs_has_session');
    return true;
  }
}

