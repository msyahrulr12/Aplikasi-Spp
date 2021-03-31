<div class="container" id="create_kelas">
    <h3>Input Data Kelas</h3>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="review-content-section">
                <div id="dropzone1" class="pro-ad">
                    <form action="<?php echo site_url('/Kelas/do_create_kelas'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nama_kelas">Nama Kelas</label>
                                <input name="nama_kelas" id="nama_kelas" type="text" class="form-control" placeholder="Nama Kelas">
                            </div>
                            <div class="form-group">
                                <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                                <input name="kompetensi_keahlian" id="kompetensi_keahlian" type="text" class="form-control" placeholder="Kompetensi Keahlian">
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

<!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">Kelas</span></h1>
                            </div>
                        </div>
                        <a href="<?php echo site_url('/Kelas/create_kelas') ?>" class="btn btn-primary d-block">Tambah Kelas</a>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <!-- <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div> -->
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar"
                                    class="table table-bordered" 
                                >
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true">No</th>
                                            <th data-field="nisn">Nama Kelas</th>
                                            <th data-field="nis">Kompetensi Keahlian</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $n = 1;
                                            foreach ($kelas as $key => $value) {
                                                ?>
                                            <tr>
                                                <td><?=$n++?></td>
                                                <td><?php echo $value['nama_kelas'] ?></td>
                                                <td><?php echo $value['kompetensi_keahlian'] ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo site_url('/Kelas/update_kelas/'.$value['id_kelas']) ?>"
                                                        class="btn btn-warning"
                                                    >
                                                        Update
                                                    </a>
                                                    <a
                                                        href="<?php echo site_url('/Kelas/delete_kelas/'.$value['id_kelas']) ?>"
                                                        class="btn btn-danger"
                                                    >
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php
                                                }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
