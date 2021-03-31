<!-- Single pro tab review Start-->
<div class="container" id="create_kelas">
    <h3>Detail Pembayaran SPP</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h4>Data Siswa</h4>
                                </div>
                                <div class="panel-body" style="padding: 40px;">
                                    <div class="form-group row">
                                        <label for="nisn" class="col-sm-4 col-form-label">NISN Siswa : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="nisn" value="<?=$siswa['nisn']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-sm-4 col-form-label">Nama Siswa : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="nama" value="<?=$siswa['nama']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kelas" class="col-sm-4 col-form-label">Kelas : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="kelas" value="<?=$siswa['nama_kelas'].' - '.$siswa['kompetensi_keahlian']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_telp" class="col-sm-4 col-form-label">Nomor Telepon : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="no_telp" value="<?=$siswa['no_telp']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="alamat" class="col-sm-4 col-form-label">Alamat : </label>
                                        <div class="col-sm-7">
                                            <textarea readonly class="form-control form-control-plaintext" id="alamat"><?=$siswa['alamat']?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h4>Data SPP</h4>
                                </div>
                                <div class="panel-body" style="padding: 40px;">
                                    <div class="form-group row">
                                        <label for="bulan" class="col-sm-4 col-form-label">Bulan : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="bulan" value="<?=$spp['bulan']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun" class="col-sm-4 col-form-label">Tahun : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="tahun" value="<?=$spp['tahun']?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nominal" class="col-sm-4 col-form-label">Nominal : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="nominal" value="Rp. <?=number_format($spp['nominal'],2, ',', '.')?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading text-center">
                                    <h4>Data Pembayaran</h4>
                                </div>
                                <div class="panel-body" style="padding: 40px;">
                                    <div class="form-group row">
                                        <label for="bulan_bayar" class="col-sm-4 col-form-label">Tanggal Bayar : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="tanggal_bayar" value="<?=date('Y-m-d')?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="bulan_bayar" class="col-sm-4 col-form-label">Bulan Bayar : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="bulan_bayar" value="<?=date('M')?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tahun_bayar" class="col-sm-4 col-form-label">Tahun Bayar : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="tahun_bayar" value="<?=date('Y')?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_bayar" class="col-sm-4 col-form-label">Jumlah Bayar : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="jumlah_bayar" value="Rp. <?=number_format($jumlah_bayar,2, ',', '.')?>">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="jumlah_bayar" class="col-sm-4 col-form-label">Kembalian : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="jumlah_bayar" value="Rp. <?=($jumlah_bayar - $spp['nominal']) > 0 ? number_format(($jumlah_bayar - $spp['nominal']),2, ',', '.') : 0?>">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_bayar" class="col-sm-4 col-form-label">Tunggakan : </label>
                                        <div class="col-sm-7">
                                            <input type="text" readonly class="form-control form-control-plaintext" id="jumlah_bayar" value="Rp. <?=($jumlah_bayar - $spp['nominal']) < 0 ? number_format(abs($jumlah_bayar - $spp['nominal']),2, ',', '.') : 0?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <form action="<?=site_url('/Pembayaran/do_create_pembayaran')?>" method="POST">
                        <input type="hidden" name="nisn" value="<?=$siswa['nisn']?>">
                        <input type="hidden" name="id_petugas" value="<?=$this->session->userdata('id_petugas')?>">
                        <input type="hidden" name="tgl_bayar" value="<?=date('Y-m-d')?>">
                        <input type="hidden" name="bulan_bayar" value="<?=$spp['bulan']?>">
                        <input type="hidden" name="tahun_bayar" value="<?=$spp['tahun']?>">
                        <input type="hidden" name="id_spp" value="<?=$spp['id_spp']?>">
                        <input type="hidden" name="jumlah_bayar" value="<?=$jumlah_bayar?>">
                        <button class="btn btn-success">Submit</button>
                    </form>
                </div>
            </div>
        </div>  
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>