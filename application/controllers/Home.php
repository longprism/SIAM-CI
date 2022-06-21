<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('nim')) {
      redirect(base_url('login'));
    }
    $this->load->model('home_model');
  }
	public function index()
	{    
		$id = $this->session->userdata('nim');
    $data['user'] = $this->home_model->get_user($id);
    $data['jadwal'] = $this->home_model->get_jadwal($id);
    $data['hadir'] = $this->home_model->get_hadir($id);
    $this->load->view('dashboard_view_start', $data);
    $this->load->view('home_view', $data);
    $this->load->view('dashboard_view_end');
	}
  public function logout()
  {
    $data = $this->session->all_userdata();
    foreach ($data as $row => $rows_value) {
      $this->session->unset_userdata($row);
    }
    redirect(base_url('home'));
  }
}
