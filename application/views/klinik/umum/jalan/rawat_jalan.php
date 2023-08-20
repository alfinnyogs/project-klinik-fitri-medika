<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Rawat Jalan Umum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Umum</div>
        <div class="breadcrumb-item">Rawat Jalan</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Riwayat Pasien Rawat Jalan</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/umum/rawat_jalan/data_pasien') ?>" class="btn btn-primary">Cari Data Pasien</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal & Waktu Rawat Jalan</th>
                    <th>Dokter Pemeriksa</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal & Waktu Rawat Jalan</th>
                    <th>Dokter Pemeriksa</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($rawat_jalan as $rj) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rj->nomor_pasien ?></td>
                    <td><?php echo $rj->nama_pasien ?></td>
                    <td><?php echo date('d F Y', strtotime($rj->tanggal_pendaftaran)) ?>, <?php echo date('H:i', strtotime($rj->waktu_pendaftaran)) ?></td>
                    <td><?php echo $rj->dokter_pemeriksa ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo base_url('klinik/umum/rawat_jalan/detail_rawat_jalan/').$rj->id_rawat_jalan ?>" class="btn btn-sm btn-success">Detail</a>
                        <a href="<?php echo base_url('klinik/umum/rawat_jalan/print_invoice/').$rj->id_rawat_jalan ?>"class="btn btn-sm btn-primary" target="_blank">Print</a>
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