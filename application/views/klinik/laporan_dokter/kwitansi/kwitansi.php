<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kwitansi Dokter</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Laporan Dokter</div>
        <div class="breadcrumb-item">Kwitansi Dokter</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Kwitansi Dokter</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/laporan_dokter/kwitansi/data_dokter') ?>" class="btn btn-primary">Cari Data Dokter</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Kwitansi</th>
                    <th>Total Pembayaran</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Kwitansi</th>
                    <th>Total Pembayaran</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $no=1;
                    foreach ($dokter as $dt) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $dt->kode_dokter ?></td>
                    <td><?php echo $dt->nama_dokter ?></td>
                    <td><?php echo date('d F Y', strtotime($dt->tanggal_kwitansi)) ?></td>
                    <td>Rp. <?php echo number_format($dt->total_bayar,0,',','.') ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo base_url('klinik/laporan_dokter/kwitansi/detail_kwitansi/').$dt->id_kwitansi ?>" class="btn btn-sm btn-success">Detail</a>
                        <a href="<?php echo base_url('klinik/laporan_dokter/kwitansi/print_kwitansi/').$dt->id_kwitansi ?>"class="btn btn-sm btn-primary" target="_blank">Print</a>
                      </div>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>