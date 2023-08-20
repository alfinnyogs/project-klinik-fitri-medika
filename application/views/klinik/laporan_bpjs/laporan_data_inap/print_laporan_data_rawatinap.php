
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
            <div class="invoice-number">Laporan Data Rawat Inap BPJS</div>
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
                <th width="5%">No</th>
                <th>Nomor Pasien</th>
                <th>Nama Pasien</th>
                <th>Tanggal Pendataan</th>
                <th>Dokter Pemeriksa</th>
                <th>Obat Yang Diberikan</th>
                <th>Biaya Visite</th>
                <th>Biaya Lain-lain</th>
                <th>Total Biaya</th>
                <th>Penanggung Jawab</th>
              </tr>
              <?php $no=1;
                    foreach($rawat_inap as $ri) : 
                    ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $ri->nomor_pasien ?></td>
                <td><?php echo $ri->nama_pasien ?></td>
                <td><?php echo date('d F Y', strtotime($ri->tanggal_pendataan)) ?></td>
                <td><?php echo $ri->dokter_pemeriksa ?></td>
                <td><?php echo $ri->obat_1 ?> <?php echo $ri->obat_2 ?> <?php echo $ri->obat_3 ?> <?php echo $ri->obat_4 ?> <?php echo $ri->obat_5 ?> <?php echo $ri->obat_6 ?></td>
                <td>Rp. <?php echo number_format($ri->biaya_visite,0,',','.') ?></td>
                <td>Rp. <?php echo number_format($ri->jumlah_biaya,0,',','.') ?></td>
                <td>Rp. <?php echo number_format($ri->total_biaya,0,',','.') ?></td>
                <td><?php echo $ri->admin_pengelola ?></td>
              </tr>
              <?php endforeach; ?>
            </table>
          </div>
          <div class="row mt-4">
            <div class="col-lg-8">
              <div class="section-title">Sumedang, <?php echo date("d F Y") ?></div>
              <p class="section-lead">Klinik Fitri Medika
              <br>
              <br>
              <br>
              <p>_____________________</p>
              </p>
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
