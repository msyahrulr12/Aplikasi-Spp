<?php

use Dompdf\Dompdf;

defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function index()
	{
		// breadcrumb
		$breadcrumbs = [
			[
				'name' => 'dashboard',
				'link' => 'Home'
            ],
			[
				'name' => 'report',
				'link' => false
			]
		];

		$this->load->view('layouts/header', ['breadcrumbs' => $breadcrumbs]);
		$this->load->view('report/index');
        $this->load->view('layouts/footer');
	}

	public function generate()
	{
		require APPPATH.'third_party/dompdf/autoload.inc.php';
		// var_dump($this->load->view('index'));
		// APPPATH.'views/template/laporan/laporan.html';
		$dompdf = new Dompdf();

		$query = "SELECT pembayaran.*, siswa.nama, kelas.nama_kelas, kelas.kompetensi_keahlian, spp.bulan, spp.tahun, spp.nominal, petugas.nama_petugas FROM pembayaran";
        $query .= " INNER JOIN siswa ON pembayaran.nisn = siswa.nisn";
        $query .= " INNER JOIN spp ON pembayaran.id_spp = spp.id_spp";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas";
		$query .= " INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas";
        $query .= " ORDER BY pembayaran.id_pembayaran DESC";
		$pembayaran = $this->Mymodel->query($query);

		$dompdf->loadHtml($this->load->view('template/laporan/laporan', [
			'pembayaran' => $pembayaran
		], TRUE));
		$dompdf->setPaper('A4', 'landscape');
		$dompdf->render();
		$dompdf->stream('Laporan Pembayaran '.date('d-m-Y'));
	}
}
