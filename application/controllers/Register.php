<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('encryption');
    $this->load->model('reg_model');
  }

  public function index()
	{
    $data['msg'] = (func_num_args()>0)?func_get_arg(0):null;
    $this->load->view('reg_view', $data);
	}
  public function insert()
  {
    $encrypt = $this->encryption->encrypt($this->input->post('password'));
    $data = array(
      'nama' => $this->input->post('nama'),
      'password' => $encrypt,
      'nim' => $this->input->post('nim'),
      'seleksi' => $this->input->post('seleksi'),
      'jurusan' => $this->input->post('jurusan'),
      'nomor_ujian' => $this->input->post('nmrujian'),
      'tgl_lahir' => strtotime($this->input->post('tgllahir')),
      'alamat' => $this->input->post('alamat'),
      'status' => ($this->input->post('aktif')=="true")?true:false
    );
    $id = $this->reg_model->insert_data($data);
    if (!$id) {
      $msg = 2;
      redirect(base_url()."login");
    } else {
      $msg = 1;
      redirect(base_url()."register");
    }
  }
}
