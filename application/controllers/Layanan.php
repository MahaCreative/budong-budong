<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('user_id')) {
      redirect('login');
    }
    $this->load->library('form_validation');
  }


  public function ektp()
  {
    // var_dump($this->session->userdata()); exit();
    $sql = "SELECT (MAX(no_permohonan)+1) as no_permohonan
            FROM perektp
            ORDER BY perektp_id DESC
            LIMIT 1";
    $data = [
      'title' => 'Buat Permohonan E-KTP',
      'nav'   => array('Layanan', 'Buat Permohonan E-KTP'),
      'data'  => $this->db->get('penduduk')->result(),
      'no_permohonan' => $this->db->query($sql)->row()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('layanan/ektp', $data);
    $this->load->view('templates/footer', $data);
  }


  public function simpan_ektp()
  {
    // var_dump($this->session->userdata()); exit();
    $data = [
      'no_permohonan' => $this->input->post('no_permohonan', true),
      'penduduk_id' => $this->input->post('penduduk_id', true),
      'tipe_permohonan' => $this->input->post('tipe_permohonan', true),
      'no_kk' => $this->input->post('no_kk', true),
      'rt' => $this->input->post('rt', true),
      'rw' => $this->input->post('rw', true),
      'date_created' => date('Y-m-d H:i')
    ];
    $in =  $this->db->insert('perektp', $data);
    if($in) {
      $this->session->set_flashdata(['status' => 'success', 'message' => 'Berhasil membuat dokumen permohonan E-KTP.']);
      redirect('layanan/ektp');
    }else {
      $this->session->set_flashdata(['status' => 'failed', 'message' => 'Gagal membuat dokumen permohonan E-KTP.']);
      redirect('layanan/ektp');
    }

  }

  public function dispensasi_nikah()
  {
    // var_dump($this->session->userdata()); exit();
    $sql = "SELECT (MAX(no_permohonan)+1) as no_permohonan
            FROM dispensasi_nikah
            ORDER BY dispensasi_nikah_id DESC
            LIMIT 1";
    $data = [
      'title' => 'Buat Surat Dispensasi Nikah',
      'nav'   => array('Layanan', 'Buat Surat Dispensasi Nikah'),
      'data'  => $this->db->get('penduduk')->result(),
      'no_permohonan' => $this->db->query($sql)->row()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('layanan/dispensasi_nikah/tambah', $data);
    $this->load->view('templates/footer', $data);
  }


  public function simpan_dispensasi_nikah()
  {
    // var_dump($this->session->userdata()); exit();
    $data = [
      'penduduk_pria_id' => $this->input->post('penduduk_pria_id', true),
      'penduduk_wanita_id' => $this->input->post('penduduk_wanita_id', true),
      'binti_pria' => $this->input->post('binti_pria', true),
      'binti_wanita' => $this->input->post('binti_wanita', true),
      'no_permohonan' => $this->input->post('no_permohonan', true),
      'no_surat' => $this->input->post('no_surat', true),
      'created_at' => date('Y-m-d H:i'),
    ];
    $in =  $this->db->insert('dispensasi_nikah', $data);
    if($in) {
      $this->session->set_flashdata(['status' => 'success', 'message' => 'Berhasil membuat dokumen Dispensasi Nikah.']);
      redirect('layanan/dispensasi_nikah');
    }else {
      $this->session->set_flashdata(['status' => 'failed', 'message' => 'Gagal membuat dokumen Dispensasi Nikah.']);
      redirect('layanan/dispensasi_nikah');
    }

  }

  public function rekomendasi_bantuan()
  {
    // var_dump($this->session->userdata()); exit();
    $sql = "SELECT (MAX(no_permohonan)+1) as no_permohonan
            FROM rekomendasi_bantuan
            ORDER BY rekomendasi_bantuan_id DESC
            LIMIT 1";
    $data = [
      'title' => 'Buat Surat Rekomendasi Bantuan',
      'nav'   => array('Layanan', 'Buat Surat Rekomendasi Bantuan'),
      'data'  => $this->db->get('penduduk')->result(),
      'no_permohonan' => $this->db->query($sql)->row()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('layanan/rekomendasi_bantuan/tambah', $data);
    $this->load->view('templates/footer', $data);
  }


  public function simpan_rekomendasi_bantuan()
  {
    // var_dump($this->session->userdata()); exit();
    $data = [
      'penduduk_id' => $this->input->post('penduduk_id', true),
      'jabatan' => $this->input->post('jabatan', true),
      'no_permohonan' => $this->input->post('no_permohonan', true),
      'no_surat' => $this->input->post('no_surat', true),
      'created_at' => date('Y-m-d H:i'),
    ];
    $in =  $this->db->insert('rekomendasi_bantuan', $data);
    if($in) {
      $this->session->set_flashdata(['status' => 'success', 'message' => 'Berhasil membuat dokumen Rekomendasi Bantuan.']);
      redirect('layanan/rekomendasi_bantuan');
    }else {
      $this->session->set_flashdata(['status' => 'failed', 'message' => 'Gagal membuat dokumen Rekomendasi Bantuan.']);
      redirect('layanan/rekomendasi_bantuan');
    }

  }

  public function umkm()
  {
    // var_dump($this->session->userdata()); exit();
    $sql = "SELECT (MAX(no_permohonan)+1) as no_permohonan
            FROM umkm
            ORDER BY umkm_id DESC
            LIMIT 1";
    $data = [
      'title' => 'Buat SURAT IZIN USAHA MIKRO DAN KECIL',
      'nav'   => array('Layanan', 'Buat SURAT IZIN USAHA MIKRO DAN KECIL'),
      'data'  => $this->db->get('penduduk')->result(),
      'no_permohonan' => $this->db->query($sql)->row()
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('layanan/umkm/tambah', $data);
    $this->load->view('templates/footer', $data);
  }


  public function simpan_umkm()
  {
    // var_dump($this->session->userdata()); exit();
    $data = [
      'penduduk_id' => $this->input->post('penduduk_id', true),
      'nama_usaha' => $this->input->post('nama_usaha', true),
      'bentuk_usaha' => $this->input->post('bentuk_usaha', true),
      'npwp' => $this->input->post('npwp', true),
      'kegiatan_usaha' => $this->input->post('kegiatan_usaha', true),
      'sarana' => $this->input->post('sarana', true),
      'alamat_usaha' => $this->input->post('alamat_usaha', true),
      'modal' => $this->input->post('modal', true),
      'no_pendaftaran' => $this->input->post('no_pendaftaran', true),
      'no_surat' => $this->input->post('no_surat', true),
      'no_permohonan' => $this->input->post('no_permohonan', true),
      'created_at' => date('Y-m-d H:i'),
    ];
    $in =  $this->db->insert('umkm', $data);
    if($in) {
      $this->session->set_flashdata(['status' => 'success', 'message' => 'Berhasil membuat dokumen IZIN USAHA MIKRO DAN KECIL.']);
      redirect('layanan/umkm');
    }else {
      $this->session->set_flashdata(['status' => 'failed', 'message' => 'Gagal membuat dokumen IZIN USAHA MIKRO DAN KECIL.']);
      redirect('layanan/umkm');
    }

  }


}
