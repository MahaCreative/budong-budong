<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('user_id')) {
      redirect('login');
    }
    $this->load->library('form_validation');
  }


	public function index()
	{
    // var_dump($this->session->userdata()); exit();
		$data = [
			'title' => 'Dashboard',
      'nav'   => array('Dashboard'),
      'dispensasi_nikah'  => $this->db->get('dispensasi_nikah')->num_rows(),
      'rekomendasi_bantuan'  => $this->db->get('rekomendasi_bantuan')->num_rows(),
      'umkm'  => $this->db->get('umkm')->num_rows(),
      'ektp'  => $this->db->get('perektp')->num_rows(),
		];
    $this->load->view('templates/header', $data);
    $this->load->view('dashboard/index', $data);
    $this->load->view('templates/footer', $data);
	}





}
