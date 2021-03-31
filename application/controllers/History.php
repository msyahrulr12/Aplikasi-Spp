<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function index()
	{
        $query = "SELECT pembayaran.*, siswa.nisn, siswa.nama, kelas.nama_kelas, kelas.kompetensi_keahlian, spp.bulan, spp.tahun, spp.nominal, petugas.nama_petugas FROM pembayaran";
        $query .= " INNER JOIN siswa ON pembayaran.nisn = siswa.nisn";
        $query .= " INNER JOIN kelas ON siswa.id_kelas = siswa.id_kelas";
        $query .= " INNER JOIN spp ON pembayaran.id_spp = spp.id_spp";
        $query .= " INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas";
        $query .= " GROUP BY pembayaran.id_pembayaran ORDER BY pembayaran.id_pembayaran DESC";

        $history = $this->Mymodel->query($query);

        // breadcrumb
		$breadcrumbs = [
			[
				'name' => 'dashboard',
				'link' => 'Home'
            ],
			[
				'name' => 'history',
				'link' => false
			]
		];

        $this->load->view('layouts/header', [
            'history' => $history,
            'breadcrumbs' => $breadcrumbs
        ]);
		$this->load->view('history/index', [
            'history' => $history
        ]);
        $this->load->view('layouts/footer', [
            'history' => $history
        ]);
	}
}
