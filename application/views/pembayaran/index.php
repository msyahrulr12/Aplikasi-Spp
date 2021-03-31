<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd" style="margin-bottom: 20px;">
                            <div class="main-sparkline13-hd">
                                <h1>
                                    <?php
                                        if ($this->session->userdata('level') == 'siswa') {
                                            $title = "Riwayat";
                                        } else {
                                            $title = "Data";
                                        }
                                    ?>
                                    <?=$title?> <span class="table-project-n">Pembayaran SPP</span>
                                </h1>
                            </div>
                        </div>
                        <?php
                            if ($this->session->userdata('level') != 'siswa') {
                        ?>
                                <a href="<?php echo site_url('/Pembayaran/create_pembayaran') ?>" class="btn btn-primary d-block">
                                    Tambah Pembayaran
                                </a>
                        <?php
                            }
                        ?>
                        <div class="sparkline13-graph" style="margin-top: 20px;">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <!-- <div id="toolbar">
                                    <select class="form-control dt-tb">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div> -->
                                <table id="table-pembayaran" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar"
                                    class="table table-bordered" 
                                >
                                    <thead>
                                        <tr>
                                            <th data-field="id">No</th>
                                            <th data-field="nama">Siswa</th>
                                            <th data-field="nama_kelas">Kelas</th>
                                            <th data-field="tanggal_bayar">Tanggal Bayar</th>
                                            <th data-field="bulan_bayar">Bulan Bayar</th>
                                            <th data-field="tahun_bayar">Tahun Bayar</th>
                                            <th data-field="tahun">Tahun SPP</th>
                                            <th data-field="nominal">Nominal SPP</th>
                                            <th data-field="jumlah_bayar">Jumlah Bayar</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
            
                                            foreach ($pembayaran as $key => $value) {
                                                ?>
                                            <tr>
                                                <td><?php echo $value['id_pembayaran'] ?></td>
                                                <td><?php echo $value['nama'] ?></td>
                                                <td><?php echo $value['nama_kelas'].' - '.$value['kompetensi_keahlian'] ?></td>
                                                <td><?php echo $value['tgl_bayar'] ?></td>
                                                <td><?php echo $value['bulan_bayar'] ?></td>
                                                <td><?php echo $value['tahun_bayar'] ?></td>
                                                <td><?php echo $value['tahun'] ?></td>
                                                <td><?php echo number_format($value['nominal'], 2, ',', '.') ?></td>
                                                <td><?php echo number_format($value['jumlah_bayar'], 2, ',', '.') ?></td>
                                                <td>
                                                    <a
                                                        href="<?php echo site_url('/Pembayaran/cekKwitansi/'.$value['id_pembayaran']) ?>"
                                                        class="btn btn-warning"
                                                    >
                                                        Cetak
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php
                                                        if ($this->session->userdata('level') != 'siswa') {
                                                    ?>
                                                        <a
                                                            href="<?php echo site_url('/Pembayaran/delete_pembayaran/'.$value['id_pembayaran']) ?>"
                                                            class="btn btn-danger"
                                                        >
                                                            Delete
                                                        </a>
                                                    <?php
                                                        }
                                                    ?>
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
