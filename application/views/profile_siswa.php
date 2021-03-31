<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="profile-info-inner">
                    <div class="profile-img">
                        <img src="img/profile/1.jpg" alt="" />
                    </div>
                    <div class="profile-details-hr">
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr">
                                    <p><b>Name</b><br /> <?=$profile['nama']?></p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Username</b><br /> <?=$profile['username']?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="address-hr">
                                    <p><b>Level</b><br /> Siswa</p>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                    <p><b>Phone</b><br /> +01962067309</p>
                                </div>
                            </div> -->
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-12">
                                <div class="address-hr">
                                    <p><b>Address</b><br /> E104, catn-2, Chandlodia Ahmedabad Gujarat, UK.</p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                    <ul id="myTabedu1" class="tab-review-design">
                        <li><a href="#INFORMATION">Update Details</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
                        <div class="product-tab-list tab-pane fade active in" id="INFORMATION">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="review-content-section">
                                        <form action="<?php echo site_url('/Siswa/update_profile'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                                            <input type="hidden" name="nisn" value="<?=$profile['nisn']?>">
                                            <div class="form-row">
                                                <div class="form-group">
                                                    <label for="nama">Nama</label>
                                                    <input name="nama" id="nama" type="text" class="form-control" placeholder="Nama petugas" value="<?=$profile['nama']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="username">Username</label>
                                                    <input name="username" id="username" type="text" class="form-control" placeholder="Username" value="<?=$profile['username']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_telp">Nomor Telepon</label>
                                                    <input name="no_telp" id="no_telp" type="text" class="form-control" placeholder="08xxxxxxxx" value="<?=$profile['no_telp']?>">
                                                </div>
                                                <div class="form-group">
                                                    <label for="alamat">Alamat</label>
                                                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?=$profile['alamat']?></textarea>
                                                </div>
                                                <hr>
                                                <div class="form-group">
                                                    <label for="old_password">Old Password</label>
                                                    <input name="old_password" id="old_password" type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="new_password">New Password</label>
                                                    <input name="new_password" id="new_password" type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="repeat_password">Repeat Password</label>
                                                    <input name="repeat_password" id="repeat_password" type="password" class="form-control">
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
                </div>
            </div>
        </div>
    </div>
</div>