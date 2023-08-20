
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
            <div class="invoice-number">Laporan Antigen</div>
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
                 <th>Nomor Antigen</th>
                 <th>NIK</th>
                 <th>Nama Lengkap</th>
                 <th>Jenis Kelamin</th>
                 <th>Alamat</th>
                 <th>Nomor Handphone</th>
                 <th>Tanggal Antigen</th>
                 <th>Hasil Antigen</th>
                <!-- <th class="text-right">Total Pembayaran</th> -->
              </tr>
              <?php $no=1; foreach($antigen as $a) : ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $a->nomor_antigen ?></td>
                <td><?php echo $a->nik ?></td>
                <td><?php echo $a->nama ?></td>
                <td><?php echo $a->jenis_kelamin ?></td>
                <td><?php echo $a->alamat ?></td>
                <td><?php echo $a->no_hp ?></td>
                <td><?php echo $a->tanggal_antigen ?></td>
                <td><?php echo $a->hasil_antigen ?></td>
                <!-- <td class="text-right">Rp. </td> -->
              </tr>
              <?php endforeach; ?>
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
              <div class="invoice-detail-item">
                <div class="invoice-detail-name">Total</div>
                <div class="invoice-detail-value invoice-detail-value-lg">Rp. ?></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
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
