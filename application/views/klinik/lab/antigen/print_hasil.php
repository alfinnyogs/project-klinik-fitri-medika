<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Antigen &mdash; Klinik Fitri Medika</title>
  <link href="<?php echo base_url('assets') ?>/assets/img/logoklinik.png" rel="icon">

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Template CSS -->
 
  <link rel="stylesheet" href="<?php echo base_url('assets') ?>/assets/css/components.css">

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
        <?php foreach($antigen as $ps) : ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="invoice-title">
              <h4>Nomor Antigen</h4>
              <div class="invoice-number"><?php echo $ps->nomor_antigen ?></div>
            </div>
            <hr>
            <div class="row">
              <div class="col-md-6">
                
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
                  <strong>Tanggal Antigen :</strong><br>
                  <?php echo date("d F Y", strtotime($ps->tanggal_antigen)) ?><br><br>
                </address>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <div class="row mt-4">
          <div class="col-md-12">
            <div class="section-title">Menerangkan Bahwa :</div>
            <div class="table-responsive">
              <table class="table table-striped table-hover table-md">
                <tr>
                  <th class="text-center">Nama Pasien</th>
                  <th class="text-center">Tanggal Lahir</th>
                  <th class="text-center">Jenis Kelamin</th>
                  <th class="text-center">Umur</th>
                  <th class="text-center">Pekerjaan</th>
                  <th class="text-center">No Telepon</th>
                  <th class="text-center">Alamat</th>
                </tr>
                <?php foreach($antigen as $ps) : ?>
                <tr>
                  <td class="text-center"><?php echo $ps->nama ?></td>
                  <td class="text-center"><?php echo date('d F Y', strtotime($ps->tanggal_lahir)) ?></td>
                  <td class="text-center"><?php echo $ps->jenis_kelamin ?></td>
                  <td class="text-center">
                    <?php
                      // tanggal lahir
                      $tanggal = new DateTime($ps->tanggal_lahir);

                      // tanggal hari ini
                      $today = new DateTime('today');

                      // tahun
                      $y = $today->diff($tanggal)->y;
                      
                      echo $y . " tahun ";
                    ?>
                  </td>
                  <td class="text-center"><?php echo $ps->pekerjaan ?></td>
                  <td class="text-center"><?php echo $ps->no_hp ?></td>
                  <td class="text-center"><?php echo $ps->alamat ?></td>
                </tr>
                <?php endforeach; ?>
              </table>
            </div>
            <?php foreach($antigen as $rt) : ?>
            <div class="section-title">Menerangkan bahwa berdasarkan hasil pemeriksaan <i>Antigen Rapid Test SARS-CoV-2</i> yang bersangkutan dinyatakan <b><i><?php echo $rt->hasil_antigen ?> Covid 19</i></b></div>
            <p class="section-lead">Demikian surat ini dibuat dengan sebenarnya dan untuk dipergunakan sebagaimana mestinya.</p>
            <br>
            <div class="section-title">Catatan :</div>
            <p class="section-lead">
              <ul>
                <li class="nav-item">Hasil negatif tidak kemungkinan terinfeksi SARS-CoV-2 sehingga masih beresiko menulahrkan ke orang lain.</li>
                <li class="nav-item">Hasil negatif pada pasien bergela SARS-CoV-2 (batuk, demam, anosmia, nyeri tenggorokan) dan/atau memiliki kontak dengan pasien terkonfirmasi Covid-19 harus diperiksa dengan metode deteksi molekuler / NAAT (Nucleic Acid Amplipication Test) yaitu pemeriksaan RT-PCR.</li>
                <li class="nav-item">Hasil negatif dapat terjadi pada kondisi kuantitas antigen pada specimen dibawah level deteksi alat.</li>
              </ul>
            </p>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php foreach($antigen as $rt) : ?>
      <table width="100%" class="mt-4">
      <tr>
        <td align="right">
          <p>Sumedang, <?php echo date("d F Y") ?> 
          <br>Dokter Pemeriksa</p>
          <br>
          <br>
          <p><?php echo $rt->dokter_pemeriksa ?><br>SIP No : 503/KEP.59A050B6-PTSP/2021</p>
        </td>
      </tr>
    </table>
    <?php endforeach; ?>
      
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