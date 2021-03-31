<!-- Single pro tab review Start-->
<div class="container" id="create_kelas">
    <h3>Input Data Pembayaran SPP</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                    <form action="<?php echo site_url('/Pembayaran/detailPembayaran'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="nisn-create-pembayaran">Siswa</label>
                                <select name="nisn" id="nisn-create-pembayaran" class="form-control">
                                    <option value="">--Pilih Siswa--</option>
                                    <?php
                                        foreach ($siswa as $key => $value) {
                                    ?>
                                        <option value="<?=$value['nisn']?>"><?=$value['nama'].' ('.$value['nisn'].')'?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="id_spp">SPP</label>
                                <select name="id_spp" id="id_spp" class="form-control">
                                    <option value="">--Pilih SPP--</option>
                                    <?php
                                        foreach ($spp as $key => $value) {
                                    ?>
                                        <option value="<?=$value['id_spp']?>"><?=$value['bulan'].'  '.$value['tahun'].' (Rp. '.number_format($value['nominal'], 0, ',', '.').')'?></option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col">
                                <label for="jumlah_bayar">Jumlah Bayar</label>
                                <input type="number" name="jumlah_bayar" id="jumlah_bayar" class="form-control" autocomplete="off" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="payment-adress">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                </div>
                            </div>
                        </div>
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