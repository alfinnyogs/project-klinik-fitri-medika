<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Laporan Dokter</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Keseluruhan</div>
          </div>
        </div>

        <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Laporan Kwitansi Dokter</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="<?php echo base_url('klinik/laporan_dokter/keseluruhan') ?>" class="btn btn-warning">Kembali</a>
                <a href="<?php echo base_url().'klinik/laporan_dokter/keseluruhan/print_laporan_kwitansi/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" target="_blank" class="btn btn-primary"><i class="fas fa-print mr-2"></i>Print</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Kode Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Kwitansi</th>
                    <th>Total Pembayaran</th>
                    <th>Admin Penanggung Jawab</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th width="5%">No</th>
                    <th>Kode Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Tanggal Kwitansi</th>
                    <th>Total Pembayaran</th>
                    <th>Admin Penanggung Jawab</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $no=1;
                    foreach ($dokter as $a) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $a->kode_dokter ?></td>
                    <td><?php echo $a->nama_dokter ?></td>
                    <td><?php echo date('d F Y', strtotime($a->tanggal_kwitansi)) ?></td>
                    <td>Rp. <?php echo number_format($a->total_bayar,0,',','.') ?></td>
                    <td><?php echo $a->admin_pengelola ?></td>
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