<!-- Single pro tab review Start-->
<div class="container" id="create_kelas">
    <h3>Update Data Siswa</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                    <form action="<?php echo site_url('/Siswa/do_update_siswa'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                    <input type="hidden" name="nisn" value="<?=$data['nisn']?>">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nisn">NISN</label>
                                <input name="nisn" id="nisn" type="text" class="form-control" placeholder="NISN Siswa" value="<?=$data['nisn']?>">
                            </div>
                            <div class="form-group">
                                <label for="nis">NIS</label>
                                <input name="nis" id="nis" type="text" class="form-control" placeholder="NIS Siswa" value="<?=$data['nis']?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama Siswa" value="<?=$data['nama']?>">
                            </div>
                            <div class="form-group">
                                <label for="id_kelas">Kelas</label>
                                <select name="id_kelas" id="id_kelas" class="form-control">
                                    <option value="">--Pilih Kelas--</option>
                                    <?php
                                        foreach ($kelas as $key => $value) {
                                    ?>
                                        <option
                                            value="<?=$value['id_kelas']?>"
                                            <?=$value['id_kelas'] == $data['id_kelas'] ? 'selected' : ''?>
                                        >
                                            <?=$value['nama_kelas'].' - '.$value['kompetensi_keahlian']?>
                                        </option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_spp">SPP</label>
                                <select name="id_spp" id="id_spp" class="form-control">
                                    <option value="">--Pilih SPP--</option>
                                    <?php
                                        foreach ($spp as $key => $value) {
                                    ?>
                                        <option
                                            value="<?=$value['id_spp']?>"
                                            <?=$value['id_spp'] == $data['id_spp'] ? 'selected' : ''?>
                                        >
                                            <?=$value['tahun'].' - '.number_format($value['nominal'])?>
                                        </option>
                                    <?php
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="no_telp">Nomor Telepon</label>
                                <input name="no_telp" id="no_telp" type="text" class="form-control" placeholder="08xxxxxx" value="<?=$data['no_telp']?>">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat" rows="8"><?=$data['alamat']?></textarea>
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