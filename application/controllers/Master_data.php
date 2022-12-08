<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_data extends CI_Controller {

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
			'title' => 'Master Data',
      'nav'   => array('Master Data'),
      'data'  => $this->db->get('penduduk')->result()
		];
    $this->load->view('templates/header', $data);
    $this->load->view('master_data/index', $data);
    $this->load->view('templates/footer', $data);
	}

  public function tambah()
  {
    // var_dump($this->session->userdata()); exit();
    $data = [
      'title' => 'Tambah Data Penduduk',
      'nav'   => array('Master Data', 'Tambah')
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('master_data/tambah', $data);
    $this->load->view('templates/footer', $data);
  }

  public function edit($id)
  {
    // var_dump($this->session->userdata()); exit();
    $data = [
      'title' => 'Edit Data Penduduk',
      'nav'   => array('Master Data', 'Edit'),
      'data' => $this->db->get_where('penduduk', ['penduduk_id' => $id])->row()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('master_data/edit', $data);
    $this->load->view('templates/footer', $data);
  }


  public function simpan()
  {
    $path = 'assets/dist/img/';
    if(!is_dir($path))
    {
      mkdir($path, 0777, true);
    }


    $nama_file = 'foto_'.uniqid().'.jpg';
    $config['allowed_types']='jpg';
    $config['upload_path']= $path;
    $config['max_size']      = 512; //500kb
    $config['file_name']    = $nama_file;
    // $config['encrypt_name'] = TRUE;

    $this->load->library('upload',$config);
    $this->upload->overwrite = true;
    if(!$this->upload->do_upload('foto')){
      echo $this->upload->display_errors();
      die();
    }
    // var_dump($this->session->userdata()); exit();
    $data = [
      'nik' => $this->input->post('nik', true),
      'nama' => $this->input->post('nama', true),
      'tempat_lahir' => $this->input->post('tempat_lahir', true),
      'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
      'jk' => $this->input->post('jk', true),
      'alamat' => $this->input->post('alamat', true),
      'img' => $nama_file,
      'date_created' => date('Y-m-d H:i')
    ];

    $in =  $this->db->insert('penduduk', $data);

    if($in) {
      $this->session->set_flashdata(['status' => 'success', 'message' => 'Berhasil menambahkan data penduduk.']);
      redirect('master_data');
    }else {
      $this->session->set_flashdata(['status' => 'failed', 'message' => 'Gagal menambahkan data penduduk.']);
      redirect('master_data/tambah');
    }

  }

  public function update($id)
  {
    $path = 'assets/dist/img/';
    if(!is_dir($path))
    {
      mkdir($path, 0777, true);
    }


    $nama_file = 'foto_'.uniqid().'.jpg';

    // var_dump($this->session->userdata()); exit();
    $data = [
      'nik' => $this->input->post('nik', true),
      'nama' => $this->input->post('nama', true),
      'tempat_lahir' => $this->input->post('tempat_lahir', true),
      'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
      'jk' => $this->input->post('jk', true),
      'img' => $nama_file,
      'alamat' => $this->input->post('alamat', true),
    ];

    if(empty($_FILES['foto']['name'])){
      unset($data['img']);
    }else {
      $config['allowed_types']='jpg';
      $config['upload_path']= $path;
      $config['max_size']      = 512; //500kb
      $config['file_name']    = $nama_file;
      // $config['encrypt_name'] = TRUE;

      $this->load->library('upload',$config);
      $this->upload->overwrite = true;
      if(!$this->upload->do_upload('foto')){
        echo $this->upload->display_errors();
        die();
      }
    }

    $up =  $this->db->update('penduduk', $data, ['penduduk_id' => $id]);
    if($up) {
      $this->session->set_flashdata(['status' => 'success', 'message' => 'Berhasil mengupdate data penduduk.']);
      redirect('master_data');
    }else {
      $this->session->set_flashdata(['status' => 'danger', 'message' => 'Gagal mengupdate data penduduk.']);
      redirect('master_data/edit/'.$id);
    }

  }


  public function hapus($id)
  {

    $del =  $this->db->delete('penduduk', ['penduduk_id' => $id]);
    if($del) {
      $this->session->set_flashdata(['status' => 'success', 'message' => 'Berhasil menghapus data penduduk.']);
    }else {
      $this->session->set_flashdata(['status' => 'danger', 'message' => 'Gagal menghapus data penduduk.']);
    }
    redirect('master_data');


  }

}
