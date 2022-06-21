<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setabsen extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('encryption');
    $this->load->model('absen_model');
    $this->load->model('krs_model');
    $this->load->model('matkul_model');
  }

  public function index()
	{
    $data['msg'] = (func_num_args()>0)?func_get_arg(0):null;
    $data['matkul']=$this->matkul_model->get_allmatkul();
    $data['absen']=$this->absen_model->get_allabsen();
    $this->load->view('setabsen_view', $data);
	}
  public function execute()
  {
    $id = $this->session->userdata('nim');    
    $this->absen_model->set_absen($this->input->post('selectabs'));
    redirect(base_url('setabsen'));
  }
  public function drop()
  {
    $this->absen_model->drop_absen($this->input->post('dropabsen'));
    redirect(base_url('setabsen'));
  }
}
