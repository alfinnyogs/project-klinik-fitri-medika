<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Invoice Rawat Jalan Umum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Invoice Rawat Jalan Umum</div>
      </div>
    </div>

    <div class="section-body">
      <div class="invoice">
        <div class="invoice-print">
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
                    <strong>Dikirim Ke :</strong><br>
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
                    <strong>Tanggal Pembayaran :</strong><br>
                    <?php echo date("d F Y", strtotime($ps->tanggal_pendaftaran)) ?><br><br>
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
                    <th>Nomor Pasien</th>
                    <th class="text-center">Nama Pasien</th>
                    <th class="text-center">Tanggal Rawat Jalan</th>
                    <th class="text-center">Gejala</th>
                    <th class="text-center">Obat</th>
                    <th class="text-right">Total Pembayaran</th>
                  </tr>
                  <?php foreach($pasien as $ps) : ?>
                  <tr>
                    <td>1</td>
                    <td><?php echo $ps->nomor_pasien ?></td>
                    <td class="text-center"><?php echo $ps->nama_pasien ?></td>
                    <td class="text-center"><?php echo date('d F Y', strtotime($ps->tanggal_pendaftaran)) ?></td>
                    <td class="text-center"><?php echo $ps->gejala ?></td>
                    <td class="text-center"><?php echo $ps->obat ?></td>
                    <td class="text-right">Rp. <?php echo number_format($ps->total_pembayaran,0,',','.') ?></td>
                  </tr>
                  <?php endforeach; ?>
                </table>
              </div>
              <div class="row mt-4">
                <div class="col-lg-8">
                  <div class="section-title">Metode Pembayaran</div>
                  <p class="section-lead">Tunai</p>
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
        <hr>
        <?php foreach($pasien as $ps) : ?>
        <div class="text-md-right">
          <a href="<?php echo base_url('klinik/umum/rawat_jalan/print_invoice/').$ps->id_rawat_jalan ?>" target="_blank" class="btn btn-warning btn-icon icon-left"><i class="fas fa-print"></i> Print</a>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>
</div>