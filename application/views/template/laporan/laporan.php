<!doctype html>
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
   
    <title>Laporan pembayaran SPP</title>

</head>
<body>

   <style>
      .page-break{
         page-break-after:always;
       }
      .text-center{
         text-align:center;
       }
      .text-header {
         font-size:1.1rem;
      }
      .size2 {
         font-size:1.4rem;
      }
      .border-bottom {
         border-bottom:1px black solid;
      }
      .border {
         border: 2px block solid;
      }
      .border-top {
         border-top:1px black solid;
      }
      .float-right {
         float:right;
      }
      .mt-4 {
         margin-top:4px;
       }
      .mx-1 {
         margin:1rem 0 1rem 0;
      }
      .mr-1 {
         margin-right:1rem;
      }
      .mt-1 {
         margin-top:1rem;
      }
      ml-2 {
         margin-left:2rem;
      }
      .ml-min-5 {
         margin-left:-5px;
      }
      .text-uppercase {
         font:uppercase;
      }
      .d1 {
         font-size:2rem;
      }
      .img {
         position:absolute;
      }
      .link {
         font-style:underline;
      }
      .text-desc {
         font-size:14px;
      }
      .text-bold {
         font-style:bold;
      }
      .underline {
         text-decoration:underline;
      }
      
      table {
         font-family: Arial, Helvetica, sans-serif;
         color: #666;
         text-shadow: 1px 1px 0px #fff;
         background: #eaebec;
         border: #ccc 1px solid;
      }
      table th {
           padding: 10px 15px;
           border-left:1px solid #e0e0e0;
           border-bottom: 1px solid #e0e0e0;
           background: #ededed;
       }  
       table tr {
           text-align: center;
            padding-left: 20px;
       }
       table td {
             padding: 10px 15px;
             border-top: 1px solid #ffffff;
             border-bottom: 1px solid #e0e0e0;
             border-left: 1px solid #e0e0e0;
             background: #fafafa;
             background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
             background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
      }
      .table-center {
         margin-left:auto;
         margin-right:auto;
      }
      .mb-1 {
         margin-bottom:1rem;
      }
   </style>
   
   <!-- header -->
   <div class="text-center">
      <img src="<?=base_url('assets/images/farmako.png')?>" class="img" alt="logo.png" width="90">
      <div style="margin-left:6rem;">
         <span class="text-header text-bold text-danger">
            PEMERINTAH DAERAH PROVINSI JAWA BARAT <br> DINAS PENDIDIKAN <br>
               SEKOLAH MENENGAH KEJURUAN FARMAKO MEDIKA PLUS <br>
         </span>
         <span class="text-desc">Jl. Raya Sukabumi KM. 15 HE. Sukma Talang 2 Cimande, Telepon (0251) 8244421<br>FAX (0251) 8244421 Website <span class="underline">www.smkfarmako.sch.id</span> - Email <span class="underline">sekolah@smkfarmako.sch.id</span> <br> Desa Lemah Duhur, Kec. Caringin, Lemah Duhur, Kec. Caringin, Bogor, Jawa Barat 16730 <br> </span>
      </div>    
      </div>
   <div>
   <!-- /header -->
   
   <hr class="border">
   
   <!-- content -->
   
   <div class="size2 text-center mb-1">LAPORAN PEMBAYARAN SPP</div>
   
  <table class="table-center mb-1">
      <thead>
         <tr>
            <th>Petugas</th>
            <th>Siswa</th>
            <th>Kelas</th>
            <th>SPP Bulan</th>
            <th>SPP Tahun</th>
            <th>Nominal Bayar</th>
            <th>Tanggal Bayar</th>
         </tr>
      </thead>
      <tbody>
         <?php 
            foreach($pembayaran as $key => $value) {
         ?>
            <tr>
               <td><?=$value['nama_petugas']?></td>
               <td><?=$value['nama']?></td>
               <td><?=$value['nama_kelas'].' - '.$value['kompetensi_keahlian']?></td>
               <td><?=$value['bulan']?></td>
               <td><?=$value['tahun']?></td>
               <td><?=number_format($value['nominal'], 0, ',', '.')?></td>
               <td><?=date('d M Y', strtotime($value['tgl_bayar']))?></td>
            
            </tr>
         <?php
            }
         ?>
      </tbody>


</table>
   <!-- /content -->
   
   <!-- footer -->
    <div>Pembuat : <?=$this->session->userdata('nama_petugas')?></div>
   <!-- /footer -->
</body>
</html>