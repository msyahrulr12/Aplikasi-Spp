<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kwitansi <?=$data_pembayaran['nama']?> - <?=$data_pembayaran['tgl_bayar']?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap
		============================================ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url('assets/template/')?>style.css">
    <style>
        input {
            outline: 0;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="card">
            <div class="card-header text-center">
                <h4>KWITANSI</h4>
            </div>
            <div class="card-body" style="padding: 40px;">
                <div class="form-group row">
                    <label for="nisn" class="col-sm-3 col-form-label">Sudah terima dari : </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-plaintext border-left-0 border-right-0 border-top-0" id="nisn" value="<?=$data_pembayaran['nama']?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jumlah_bayar" class="col-sm-3 col-form-label">Jumlah Bayar : </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control form-control-plaintext border-left-0 border-right-0 border-top-0" id="jumlah_bayar" value="<?=$jumlah_bayar?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tujuan_pembayaran" class="col-sm-3 col-form-label">Untuk Pembayaran : </label>
                    <div class="col-sm-5">
                        <textarea class="form-control form-control-plaintext border-left-0 border-right-0 border-top-0" id="tujuan_pembayaran">Pembayaran Sumbangan Pembinaan Pendidikan (SPP).</textarea>
                    </div>
                </div>
                <div style="float: right; display: block;">
                    Cimande, <?=date('d M Y')?>
                </div>
                <br/><br/>
                <div >
                    <span style="border: 2px solid black; padding: 10px 20px;">
                        <b>Rp. <?=number_format($data_pembayaran['nominal'], 2, ',', '.')?></b>
                    </span>
                </div>
                <br/><br/>
                <div style="float: right;">
                    <span style="font-size: 16px;">
                    <b><?=$this->session->userdata('nama_petugas')?></b>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <script>
        // print
        window.print();
    </script>
</body>
</html>