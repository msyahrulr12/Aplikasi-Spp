<!-- Static Table Start -->
    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="sparkline13-list">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Data <span class="table-project-n">History Pembayaran</span></h1>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar"
                                    class="table table-bordered" 
                                >
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true">No</th>
                                            <th data-field="nisn">NISN</th>
                                            <th data-field="nisn">Nama</th>
                                            <th data-field="nis">Kelas</th>
                                            <th data-field="nis">Tanggal</th>
                                            <th data-field="nis">Nominal</th>
                                            <th data-field="nis">Jumlah Bayar</th>
                                            <th data-field="nis">Tunggakan</th>
                                            <th data-field="nis">Kembalian</th>
                                            <th data-field="nis">Petugas</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $n = 1;
                                            foreach ($history as $key => $value) {
                                                ?>
                                            <tr>
                                                <td><?=$n++?></td>
                                                <td><?php echo $value['nisn'] ?></td>
                                                <td><?php echo $value['nama'] ?></td>
                                                <td><?php echo $value['nama_kelas'].' '.$value['kompetensi_keahlian'] ?></td>
                                                <td><?php echo $value['bulan'].' '.$value['tahun'] ?></td>
                                                <td><?php echo number_format($value['nominal'], 0, ',', '.') ?></td>
                                                <td><?php echo number_format($value['jumlah_bayar'], 0, ',', '.') ?></td>
                                                <td><?php echo ($value['jumlah_bayar'] - $value['nominal']) > 0 ? number_format(($value['jumlah_bayar'] - $value['nominal']), 0, ',', '.') : 0 ?></td>
                                                <td><?php echo ($value['jumlah_bayar'] - $value['nominal']) < 0 ? number_format(abs($value['jumlah_bayar'] - $value['nominal']), 0, ',', '.') : 0 ?></td>
                                                <td><?php echo $value['nama_petugas'] ?></td>
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
