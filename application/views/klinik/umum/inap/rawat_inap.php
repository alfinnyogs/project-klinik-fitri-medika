<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Rawat Inap Umum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Umum</div>
        <div class="breadcrumb-item">Rawat Inap</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Riwayat Pasien Rawat Inap</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/umum/rawat_inap/data_pasien') ?>" class="btn btn-primary">Cari Data Pasien Umum</a>
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
                    <th>Tanggal Pendaftaran Rawat Inap</th>
                    <th>Status Pasien</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Pendaftaran Rawat Inap</th>
                    <th>Status Pasien</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($rawat_inap as $rj) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rj->nomor_pasien ?></td>
                    <td><?php echo $rj->nama_pasien ?></td>
                    <td><?php echo date('d F Y', strtotime($rj->tanggal_pendaftaran)) ?></td>
                    <td>
                      <?php if($rj->status == "0") {
                          echo "<span class='badge badge-warning'>Pasien Rawat Inap</span>";
                      }else{
                          echo "<span class='badge badge-primary'>Pasien Telah Pulang</span>";
                      } ?>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <?php if($rj->status == "0") { ?>
                          <a href="<?php echo base_url('klinik/umum/rawat_inap/detail_rawat_inap/').$rj->id_rawat_inap ?>" class="btn btn-sm btn-warning">Detail</a>
                          <a href="<?php echo base_url('klinik/umum/rawat_inap/tindakan_rawat_inap/').$rj->id_rawat_inap ?>" class="btn btn-sm btn-danger">Tindakan</a>
                          <a href="<?php echo base_url('klinik/umum/rawat_inap/data_pasien_rawat_inap/').$rj->id_rawat_inap ?>" class="btn btn-sm btn-success">Data</a>
                          <a href="<?php echo base_url('klinik/umum/rawat_inap/rawat_inap_selesai/').$rj->id_rawat_inap ?>" class="btn btn-sm btn-primary">Selesai</a>
                        <?php }else{ ?>
                          <a href="<?php echo base_url('klinik/umum/rawat_inap/detail_rawat_inap/').$rj->id_rawat_inap ?>" class="btn btn-sm btn-warning">Detail</a>
                          <a href="<?php echo base_url('klinik/umum/rawat_inap/print_rawat_inap/').$rj->id_rawat_inap ?>" class="btn btn-sm btn-primary" target="_blank">Print</a>
                        <?php } ?>
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