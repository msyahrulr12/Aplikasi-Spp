<div class="data-table-area mg-b-15">
    <div class="container-fluid" id="create_kelas">
        <h3>Input Data SPP</h3>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="review-content-section">
                    <div id="dropzone1" class="pro-ad">
                        <form action="<?php echo site_url('/Spp/do_create_spp'); ?>" method="post" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload">
                            <div class="form-row">
                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <input name="bulan" id="bulan" type="text" class="form-control" placeholder="Contoh : Januari">
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input name="tahun" id="tahun" type="number" class="form-control" placeholder="Contoh : 2018">
                                </div>
                                <div class="form-group">
                                    <label for="nominal">Nominal</label>
                                    <input name="nominal" id="nominal" type="text" class="form-control" placeholder="Contoh : 100000">
                                </div>
                                <div class="form-group">
                                    <label for="nominal_latin">Nominal Latin</label>
                                    <input name="nominal_latin" id="nominal_latin" type="text" class="form-control" placeholder="Contoh : Seratus Ribu Rupiah">
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
<!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">SPP</span></h1>
                            </div>
                        </div>
                        <!-- <a href="<?php echo site_url('/Spp/create_spp') ?>" class="btn btn-primary d-block">Tambah SPP</a> -->
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
                                            <th data-field="id">No</th>
                                            <th data-field="bulan">Bulan</th>
                                            <th data-field="tahun">Tahun</th>
                                            <th data-field="nominal">Nominal</th>
                                            <th data-field="nominal_latin">Nominal Latin</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $n = 1;
                                            foreach ($spp as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?php echo $n++ ?></td>
                                                <td><?php echo $value['bulan'] ?></td>
                                                <td><?php echo $value['tahun'] ?></td>
                                                <td><?php echo number_format($value['nominal']) ?></td>
                                                <td><?php echo $value['nominal_latin'] ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo site_url('/Spp/update_spp/'.$value['id_spp']) ?>"
                                                        class="btn btn-warning"
                                                    >
                                                        Update
                                                    </a>
                                                    <a
                                                        href="<?php echo site_url('/Spp/delete_spp/'.$value['id_spp']) ?>"
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
