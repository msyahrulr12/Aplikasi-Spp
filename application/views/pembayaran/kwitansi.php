<div class="panel panel-default">
    <div class="panel-heading text-center">
        <h2>KWITANSI</h2>
    </div>
    <div class="panel-body" style="padding: 40px;">
        <form action="<?=site_url('/Pembayaran/cetakKwitansi/'.$data_pembayaran['id_pembayaran'])?>" method="POST">
            <div class="form-group row">
                <label for="nisn" class="col-sm-2 col-form-label">Sudah terima dari : </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-plaintext" id="nisn" value="<?=$data_pembayaran['nama']?>" <?=$this->session->userdata('level') == 'siswa' ? 'readonly' : ''?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah_bayar" class="col-sm-2 col-form-label">Jumlah Bayar : </label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-plaintext" id="jumlah_bayar" name="jumlah_bayar" value="<?=$data_pembayaran['nominal_latin']?>" autocomplete="off" <?=$this->session->userdata('level') == 'siswa' ? 'readonly' : ''?>>
                </div>
            </div>
            <div class="form-group row">
                <label for="tujuan_pembayaran" class="col-sm-2 col-form-label">Untuk Pembayaran : </label>
                <div class="col-sm-5">
                    <textarea class="form-control form-control-plaintext" id="tujuan_pembayaran" <?=$this->session->userdata('level') == 'siswa' ? 'readonly' : ''?>>Pembayaran Sumbangan Pembinaan Pendidikan (SPP).</textarea>
                </div>
            </div>
            <div style="float: right; display: block;">
                Cimande, <?=date('d M Y')?>
            </div>
            <br/><br/>
            <div >
                <span style="border: 2px solid black; padding: 10px 20px;">
                    <b>Rp. <?=number_format($data_pembayaran['nominal'], 2, ',', '.')?></b>
                </span>
            </div>
            <br/><br/>
            <div style="float: right;">
                <span style="font-size: 16px;">
                <b><?=$this->session->userdata('nama_petugas')?></b>
                </span>
            </div>
            <div style="padding: 20px;">
                <button class="btn btn-info">Cetak</button>
            </div>
        </form>
    </div>
</div>
