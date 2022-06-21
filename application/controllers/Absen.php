<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absen extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('nim')) {
      redirect(base_url('login'));
    }
    $this->load->model('home_model');
    $this->load->model('absen_model');
    $this->load->model('krs_model');
    $this->load->model('matkul_model');
  }

  public function index()
	{
		$id = $this->session->userdata('nim');
    $data['msg'] = (func_num_args()>0)?func_get_arg(0):null;
    $data['user'] = $this->home_model->get_user($id);
    $data['att'] = $this->absen_model->get_allabsen();
    $data['absen']=$this->absen_model->get_absen($data['att']);
    $data['session']=$this->absen_model->get_session($id);
    $this->load->view('dashboard_view_start', $data);
    $this->load->view('absen_view', $data);
    $this->load->view('dashboard_view_end');
	}
  public function insert()
  {
		$id = $this->session->userdata('nim');
    if ($this->input->post('kodea')==1) {
      $result = $this->absen_model->set_hadir($id, $this->input->post('kodem'), $this->input->post('idatt'));
      redirect(base_url('home'));
    } else if ($this->input->post('kodea')==2) {
      $result = $this->absen_model->set_izin($id, $this->input->post('kodem'), $this->input->post('idatt'));
      redirect(base_url('home'));
    } else {
      $result = $this->absen_model->set_alpha($id, $this->input->post('kodem'), $this->input->post('idatt'));
      redirect(base_url('home'));
    }
    
  }
}
