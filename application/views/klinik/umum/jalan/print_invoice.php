<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Invoice &mdash; Rawat Jalan Umum</title>
  <link href="<?php echo base_url('assets') ?>/assets/img/logoklinik.png" rel="icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/css/components.css">
  <!-- <style>
    body{
        background-image: url('logoklinik.png');
        background-repeat: no-repeat;
    }
  </style> -->
  

</head>

<body>
  <div class="section-body">
    <div class="invoice">
      <div class="invoice-print">
        <div class="row mb-4">
          <div class="col-md-2">
            <img src="<?php echo base_url('assets') ?>/assets/img/logoklinik.png" align="right">
          </div>
          <div class="col-md-10">
            <div class="invoice-title float-center">
              <h1 align="center">Klinik Fitri Medika</h1>
              <h5 align="center">Jl. Sawah Dadap, Desa Sawah Dadap, Kecamatan Cimanggung, Kab. Sumedang</h5>
              <h6 align="center">Telp. 022 87836969</h6>
              <h6 align="center">Izin No : 503/KEP.86F06C12-PTSP/2019</h6>
            </div>
          </div>
        </div>
        <hr>
        <?php foreach($pasien as $ps) : ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="invoice-title">
              <h2>Invoice Rawat Jalan Umum</h2>
              <div class="invoice-number"><?php echo $ps->nomor_pasien ?></div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                <address>
                  <strong>Tagihan :</strong><br>
                    <?php echo $ps->nama_pasien ?><br>
                    <?php echo $ps->alamat ?><br>
                    <?php echo $ps->desa ?>, <?php echo $ps->kecamatan ?><br>
                    <?php echo $ps->kabupaten ?>, Indonesia
                </address>
              </div>
              <div class="col-md-6 text-md-right">
                <address>
                  <strong>Dikirim Dari :</strong><br>
                  Klinik Fitri Medika<br>
                  Jl. Sawahdadap<br>
                  Cimanggung<br>
                  Sumedang, Indonesia
                </address>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <address>
                  <strong>Metode Pembayaran :</strong><br>
                  Tunai
                </address>
              </div>
              <div class="col-md-6 text-md-right">
                <address>
                  <strong>Tanggal Rawat Jalan :</strong><br>
                  <?php echo date('d F Y', strtotime($ps->tanggal_pendaftaran)) ?><br><br>
                </address>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <div class="row mt-4">
          <div class="col-md-12">
            <div class="section-title">Data Pembayaran Rawat Jalan Umum</div>
            <div class="table-responsive">
              <table class="table table-striped table-hover table-md">
                <tr>
                  <th data-width="40">No</th>
                  <th class="text-center">Dokter Pemeriksa</th>
                  <th class="text-center">Gejala</th>
                  <th class="text-center">Obat</th>
                  <th class="text-right">Total Pembayaran</th>
                </tr>
                <?php foreach($pasien as $ps) : ?>
                <tr>
                  <td>1</td>
                  <td class="text-center"><?php echo $ps->dokter_pemeriksa ?></td>
                  <td class="text-center"><?php echo $ps->gejala ?></td>
                  <td class="text-center"><?php echo $ps->obat_1 ?><br><?php echo $ps->obat_2 ?><br><?php echo $ps->obat_3 ?><br><?php echo $ps->obat_4 ?><br><?php echo $ps->obat_5 ?><br><?php echo $ps->obat_6 ?></td>
                  <td class="text-right">Rp. <?php echo number_format($ps->total_pembayaran,0,',','.') ?></td>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <div class="row mt-4">
              <div class="col-lg-8">
              </div>
              <div class="col-lg-4 text-right">
                <hr class="mt-2 mb-2">
                <div class="invoice-detail-item">
                  <div class="invoice-detail-name">Total</div>
                  <div class="invoice-detail-value invoice-detail-value-lg">Rp. <?php echo number_format($ps->total_pembayaran,0,',','.') ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <table width="100%" class="mt-4">
      <tr>
        <td align="right">
          <p>Sumedang, <?php echo date("d F Y") ?> 
          <br>Klinik Fitri Medika</p>
          <br>
          <br>
          <p>_____________________</p>
        </td>
      </tr>
    </table>
      
    </div>
  </div>

<!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <!-- Template JS File -->
  <script src="<?php echo base_url('assets') ?>/assets/js/scripts.js"></script>
  <script src="<?php echo base_url('assets') ?>/assets/js/custom.js"></script>

  <script type="text/javascript">
    window.print();
  </script>

  <!-- Page Specific JS File -->
</body>
</html>