<!-- Single pro tab review Start-->
<div class="container" id="create_petugas">
    <h3>Input Data Petugas</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                    <form action="<?php echo site_url('/Petugas/do_update_petugas'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                        <input type="hidden" name="id_petugas" value="<?=$petugas['id_petugas']?>">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama_petugas">Nama petugas</label>
                                <input name="nama_petugas" id="nama_petugas" type="text" class="form-control" placeholder="Nama petugas" value="<?=$petugas['nama_petugas']?>">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input name="username" id="username" type="text" class="form-control" placeholder="Username" value="<?=$petugas['username']?>">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input name="password" id="password" type="password" class="form-control" placeholder="*******" value="<?=$petugas['password']?>">
                            </div>
                            <div class="form-group">
                                <label for="level">Level</label><br/>
                                <input name="level" id="admin" type="radio" value="admin" <?=$petugas['level'] == 'admin' ? 'checked' : ''?>>
                                <label for="admin">Admin</label><br/>
                                <input name="level" id="petugas" type="radio" value="petugas" <?=$petugas['level'] == 'petugas' ? 'checked' : ''?>>
                                <label for="petugas">Petugas</label><br/>
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