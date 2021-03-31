<!-- Single pro tab review Start-->
<div class="container" id="create_kelas">
    <h3>Input Data Kelas</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                    <form action="<?php echo site_url('/Spp/do_update_spp'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                        <input type="hidden" name="id_spp" value="<?=$data['id_spp']?>">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="tahun">Tahun</label>
                                <input name="tahun" id="tahun" type="number" class="form-control" placeholder="Contoh : 1" min="1" value="<?=$data['tahun']?>">
                            </div>
                            <div class="form-group">
                                <label for="nominal">Nominal</label>
                                <input name="nominal" id="nominal" type="text" class="form-control" placeholder="Contoh : 100000" value="<?=$data['nominal']?>">
                            </div>
                            <div class="form-group">
                                <label for="nominal_latin">Nominal Latin</label>
                                <input name="nominal_latin" id="nominal_latin" type="text" class="form-control" placeholder="Contoh : Seratus Ribu Rupiah" value="<?=$data['nominal_latin']?>">
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