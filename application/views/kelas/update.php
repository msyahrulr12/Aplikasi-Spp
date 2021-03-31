<!-- Single pro tab review Start-->
<div class="container" id="create_kelas">
    <h3>Edit Data Kelas</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                    <form action="<?php echo site_url('/Kelas/do_update_kelas/'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                        <input type="hidden" name="id_kelas" value="<?=$kelas['id_kelas']?>">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama_kelas">Nama Kelas</label>
                                <input name="nama_kelas" id="nama_kelas" type="text" class="form-control" placeholder="Nama Kelas" value="<?=$kelas['nama_kelas']?>">
                            </div>
                            <div class="form-group">
                                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                                <input name="kompetensi_keahlian" id="kompetensi_keahlian" type="text" class="form-control" placeholder="Kompetensi Keahlian" value="<?=$kelas['kompetensi_keahlian']?>">
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