<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    if(!$this->session->userdata('user_id')) {
      redirect('login');
    }
    $this->load->library('form_validation');
  }


	public function lektp()
	{
    // var_dump($this->session->userdata()); exit();
    $this->db->select('*');
    $this->db->join('perektp', 'perektp.penduduk_id = penduduk.penduduk_id', 'left');
    $ktp = $this->db->get('penduduk')->result();

		$data = [
			'title' => 'Laporan Dokumen E-KTP',
      'nav'   => array('Laporan','E-KTP'),
      'data'  => $ktp
		];
    $this->load->view('templates/header', $data);
    $this->load->view('laporan/ektp', $data);
    $this->load->view('templates/footer', $data);
	}

  function download_lektp($id)
  {
    ob_start();
    $this->db->select('*');
    $this->db->join('penduduk', 'penduduk.penduduk_id = perektp.penduduk_id', 'left');
    $data['data'] = $this->db->get_where('perektp', ['perektp_id' => $id])->row();
    $this->load->view('laporan/cetak_fektp', $data);
    $html = ob_get_contents();
    ob_end_clean();
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
 	  $path_backup = "assets/laporan/";
    $filename = $path_backup.'Formulir Permohonan E-KTP F-1.21 '.$id.'.pdf';
 		 if(!file_exists($path_backup)){
 			 mkdir($path_backup, 0777, true);
 		 }
 		$pdf->Output($filename, 'E');
  }

  public function ldispensasi_nikah()
	{
    // var_dump($this->session->userdata()); exit();
    $sql = "SELECT dispensasi_nikah.*, concat(pria.nama,' dan ', wanita.nama) as mempelai
            FROM dispensasi_nikah
            LEFT JOIN penduduk pria ON pria.penduduk_id = penduduk_pria_id
            LEFT JOIN penduduk wanita ON wanita.penduduk_id = penduduk_wanita_id";

    $dn = $this->db->query($sql)->result();

		$data = [
			'title' => 'Laporan Dokumen Surat Dispensasi Nikah',
      'nav'   => array('Laporan','Dispensasi Nikah'),
      'data'  => $dn
		];
    $this->load->view('templates/header', $data);
    $this->load->view('laporan/dispensasi_nikah', $data);
    $this->load->view('templates/footer', $data);
	}

  function download_ldispensasi_nikah($id)
  {
    ob_start();
    $sql = "SELECT dispensasi_nikah.*, pria.nama nama_pria, wanita.nama nama_wanita, pria.alamat alamat_pria, pria.tempat_lahir tempat_pria
            FROM dispensasi_nikah
            LEFT JOIN penduduk pria ON pria.penduduk_id = penduduk_pria_id
            LEFT JOIN penduduk wanita ON wanita.penduduk_id = penduduk_wanita_id
            WHERE dispensasi_nikah_id = ?";

    $data['data'] = $dn = $this->db->query($sql, array($id))->row();
    $this->load->view('laporan/cetak_dispensasi_nikah', $data);
    $html = ob_get_contents();
    ob_end_clean();
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
 	  $path_backup = "assets/laporan/";
    $filename = $path_backup.'Formulir Permohonan Dispensasi Nikah '.$id.'.pdf';
 		 if(!file_exists($path_backup)){
 			 mkdir($path_backup, 0777, true);
 		 }
 		$pdf->Output($filename, 'E');
  }

  public function lrekomendasi_bantuan()
	{
    // var_dump($this->session->userdata()); exit();
    $sql = "SELECT rekomendasi_bantuan.*, penduduk.nama
            FROM rekomendasi_bantuan
            LEFT JOIN penduduk ON penduduk.penduduk_id = rekomendasi_bantuan.penduduk_id";

    $dn = $this->db->query($sql)->result();

		$data = [
			'title' => 'Laporan Dokumen Surat Rekomendasi Bantuan Dana',
      'nav'   => array('Laporan','Rekomendasi Bantuan Dana'),
      'data'  => $dn
		];
    $this->load->view('templates/header', $data);
    $this->load->view('laporan/rekomendasi_bantuan', $data);
    $this->load->view('templates/footer', $data);
	}

  function download_lrekomendasi_bantuan($id)
  {
    ob_start();
    $sql = "SELECT rekomendasi_bantuan.*, penduduk.nama, penduduk.nik
            FROM rekomendasi_bantuan
            LEFT JOIN penduduk ON penduduk.penduduk_id = rekomendasi_bantuan.penduduk_id
            WHERE rekomendasi_bantuan_id = ?";

    $data['data'] = $dn = $this->db->query($sql, array($id))->row();
    $this->load->view('laporan/cetak_rekomendasi_bantuan', $data);
    $html = ob_get_contents();
    ob_end_clean();
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
 	  $path_backup = "assets/laporan/";
    $filename = $path_backup.'Surat Rekomendasi Bantuan Dana '.$id.'.pdf';
 		 if(!file_exists($path_backup)){
 			 mkdir($path_backup, 0777, true);
 		 }
 		$pdf->Output($filename, 'E');
  }


  public function lumkm()
  {
    // var_dump($this->session->userdata()); exit();
    $sql = "SELECT umkm.*, penduduk.nama
            FROM umkm
            LEFT JOIN penduduk ON penduduk.penduduk_id = umkm.penduduk_id";

    $dn = $this->db->query($sql)->result();

    $data = [
      'title' => 'Laporan Dokumen Surat Izin Usaha',
      'nav'   => array('Laporan','Surat Izin Usaha'),
      'data'  => $dn
    ];
    $this->load->view('templates/header', $data);
    $this->load->view('laporan/umkm', $data);
    $this->load->view('templates/footer', $data);
  }

  function download_lumkm($id)
  {
    ob_start();
    $sql = "SELECT umkm.*, penduduk.nama, penduduk.nik
            FROM umkm
            LEFT JOIN penduduk ON penduduk.penduduk_id = umkm.penduduk_id
            WHERE umkm_id = ?";

    $data['data'] = $dn = $this->db->query($sql, array($id))->row();
    $this->load->view('laporan/cetak_umkm', $data);
    $html = ob_get_contents();
    ob_end_clean();
    require_once('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P','A4','en');
    $pdf->WriteHTML($html);
    $path_backup = "assets/laporan/";
    $filename = $path_backup.'Surat Izin Usaha '.$id.'.pdf';
     if(!file_exists($path_backup)){
       mkdir($path_backup, 0777, true);
     }
    $pdf->Output($filename, 'E');
  }

}
