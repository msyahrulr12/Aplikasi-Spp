<!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">Siswa</span></h1>
                            </div>
                        </div>
                        <a href="<?php echo site_url('/Siswa/create_siswa') ?>" class="btn btn-primary d-block">Tambah Siswa</a>
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
                                            <th data-field="nisn">NISN</th>
                                            <th data-field="name">NIS</th>
                                            <th data-field="email">Nama</th>
                                            <th data-field="id">Kelas</th>
                                            <th data-field="id">No Telepon</th>
                                            <th data-field="id">Alamat</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $n = 1;
                                            foreach ($siswa as $key => $value) {
                                        ?>
                                            <tr>
                                                <td><?=$n++?></td>
                                                <td><?php echo $value['nisn'] ?></td>
                                                <td><?php echo $value['nis'] ?></td>
                                                <td><?php echo $value['nama'] ?></td>
                                                <td><?php echo $value['nama_kelas'] . ' - ' . $value['kompetensi_keahlian'] ?></td>
                                                <td><?php echo $value['no_telp'] ?></td>
                                                <td><?php echo $value['alamat'] ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo site_url('/Siswa/update_siswa/'.$value['nisn']) ?>"
                                                        class="btn btn-warning"
                                                    >
                                                        Update
                                                    </a>
                                                    <a
                                                        href="<?php echo site_url('/Siswa/delete_siswa/'.$value['nisn']) ?>"
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
