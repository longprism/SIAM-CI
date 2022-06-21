<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    if (!$this->session->userdata('nim')) {
      redirect(base_url('login'));
    }
    $this->load->model('krs_model');
    $this->load->model('absen_model');
    $this->load->model('matkul_model');
    $this->load->model('home_model');
  }
	public function index()
	{    
		$id = $this->session->userdata('nim');
    $data['user'] = $this->home_model->get_user($id);
    $data['matkul'] = $this->matkul_model->get_allmatkul();
    $data['krs'] = $this->krs_model->get_krs($id);
    $this->load->view('dashboard_view_start', $data);
    $this->load->view('krs_view', $data);
    $this->load->view('dashboard_view_end');
	}
  public function insert()
  {
		$id = $this->session->userdata('nim');
    if (count($_POST)==0) {
      redirect(base_url().'krs');
    } else {
      $id_krs=$this->krs_model->insert_krs($id);
      $getkrs=$this->krs_model->get_krs($id);
      $cekdata = $_POST['cekmat'];
      for ($i=0; $i < count($cekdata); $i++) {
        $datamatkul = array('id_krs' => $getkrs[0]->id_krs, 'kode_matkul' => $cekdata[$i]);
        $id_krsmat=$this->krs_model->insert_krsmat($datamatkul);
        $sethadir=$this->absen_model->set_kehadiran($id, $cekdata[$i]);
      }
      redirect(base_url().'home');
    }
  }
}
