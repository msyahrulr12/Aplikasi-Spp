<!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">Petugas</span></h1>
                            </div>
                        </div>
                        <a href="<?php echo site_url('/Petugas/create_petugas') ?>" class="btn btn-primary d-block">Tambah Petugas</a>
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
                                            <th data-field="nama_petugas">Nama Petugas</th>
                                            <th data-field="nama_petugas">Username</th>
                                            <th data-field="level">Level</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
            
                                            foreach ($petugas as $key => $value) {
                                                ?>
                                            <tr>
                                                <td><?php echo $value['id_petugas'] ?></td>
                                                <td><?php echo $value['nama_petugas'] ?></td>
                                                <td><?php echo $value['username'] ?></td>
                                                <td><?php echo $value['level'] ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo site_url('/Petugas/update_petugas/'.$value['id_petugas']) ?>"
                                                        class="btn btn-warning"
                                                    >
                                                        Update
                                                    </a>
                                                    <a
                                                        href="<?php echo site_url('/Petugas/delete_petugas/'.$value['id_petugas']) ?>"
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
