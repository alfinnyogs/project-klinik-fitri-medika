
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Invoice &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/css/components.css">
</head>

<body>
  <div class="invoice">
    <div class="invoice-print">
      <div class="row">
        <div class="col-lg-12">
          <div class="invoice-title">
            <h2>Klinik Fitri Medika</h2>
            <div class="invoice-number">Laporan Rawat Inap Umum</div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-6">
              <address>
                <strong>Alamat :</strong><br>
                  Klinik Fitri Medika<br>
                  Jl. Sawahdadap<br>
                  Cimanggung<br>
                  Sumedang, Indonesia
              </address>
            </div>
            <div class="col-md-6 text-md-right">
              <address>
                <strong>Dari Tanggal :</strong><br>
                <?php echo date('d F Y', strtotime($_GET['dari'])); ?><br>
                <strong>Sampai Tanggal :</strong><br>
                <?php echo date('d F Y', strtotime($_GET['sampai'])); ?><br><br>
              </address>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-striped table-hover table-md">
              <tr>
                <th data-width="40">No</th>
                <th>Nomor Pasien</th>
                <th>Nama Pasien</th>
                <th>Biaya Pendaftaran</th>
              </tr>
              <?php
              $total = 0;
              $no=1; foreach($rawat_inap as $ri) : ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ri->nomor_pasien ?></td>
                <td><?php echo $ri->nama_pasien ?></td>
                <td class="text-right">Rp.<?php echo $ri->biaya_pendaftaran ?></td>
              </tr>
           <?php
           $total = $total + $ri->biaya_pendaftaran;
           endforeach; ?>
           <tr>
             <th colspan="3" class="">
                 Total
             </th>
             <td class="text-right">Rp. 
               <?php
               echo number_format($total,0,',','.');
               ?>
             </td>
           </tr>
            <tr></tr>
            </table>
          </div>
          <div class="row mt-4">
            <div class="col-lg-8">
              <div class="section-title">Sumedang, <?php echo date("d F Y") ?></div>
              <p class="section-lead">Pemilik
              <br>
              <br>
              <br>
              <p>_____________________</p>
              </p>
            </div>
            <div class="col-lg-4 text-right">
              <hr class="mt-2 mb-2">
              <!-- <div class="invoice-detail-item">
                <div class="invoice-detail-name">Total</div>
                <div class="invoice-detail-value invoice-detail-value-lg">Rp. <?php echo number_format($biaya_pendaftaran,0,',','.') ?></div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
  </div>