<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Dokter</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Dokter</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Dokter Klinik Fitri Medika</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/kelola_dokter/tambah_data_dokter') ?>" class="btn btn-primary">Tambah Data Dokter</a>
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
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Kode Dokter</th>
                    <th>Nama Dokter</th>
                    <th>Jenis Kelamin</th>
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
                    <td>
                      <?php if($dt->jenis_kelamin == "Laki-laki") { ?>
                        <div class="badge badge-primary"><?php echo $dt->jenis_kelamin ?></div>
                      <?php }else{ ?>
                        <div class="badge badge-info"><?php echo $dt->jenis_kelamin ?></div>
                      <?php } ?>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a onclick="return confirm('Yakin Akan Menghapus?')" href="<?php echo base_url('klinik/kelola_dokter/hapus_data_dokter/').$dt->id_dokter ?>" class="btn btn-sm btn-danger">Hapus</a>
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