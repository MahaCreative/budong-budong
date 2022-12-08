<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$data = [
			'title' => 'Login - Layanan Publik'
		];
		$this->load->view('login/index', $data);
	}


	public function cek_akun()
	{
		$username = $this->input->post('username', true);
		$password = $this->input->post('password', true);
		$cek = $this->db->get_where('accounts', ['username' => $username, 'password' => md5($password)])->row();
		if($cek){
			$data = [
				'username' => $cek->username,
				'user_id' => $cek->user_id,
				'role_id' => $cek->role_id

			];
		  $this->session->set_userdata($data);
			redirect('dashboard');
		}else {
			$this->session->set_flashdata(['status' => 'failed', 'message' => 'The username or password is not correct. Please try again.']);
			redirect('login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('user_id');
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('role_id');
    $this->session->sess_destroy();
		redirect('login');
	}
}
