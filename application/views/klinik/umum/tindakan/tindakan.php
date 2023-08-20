<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Tindakan Umum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Umum</div>
        <div class="breadcrumb-item">Tindakan</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Riwayat Pasien Tindakan Umum</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/umum/tindakan/data_pasien') ?>" class="btn btn-primary">Cari Data Pasien</a>
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
                    <th>Tanggal Tindakan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Tindakan</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($tindakan as $tk) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $tk->nomor_pasien ?></td>
                    <td><?php echo $tk->nama_pasien ?></td>
                    <td><?php echo date('d F Y', strtotime($tk->tanggal_tindakan)) ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo base_url('klinik/umum/tindakan/detail_tindakan/').$tk->id_tindakan ?>" class="btn btn-sm btn-success">Detail</a>
                        <a href="<?php echo base_url('klinik/umum/tindakan/print_invoice/').$tk->id_tindakan ?>"class="btn btn-sm btn-primary" target="_blank">Print</a>
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