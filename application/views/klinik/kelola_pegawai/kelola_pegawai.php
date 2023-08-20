<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Pegawai</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Pegawai</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Pegawai Klinik Fitri Medika</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/kelola_pegawai/tambah_data_pegawai') ?>" class="btn btn-primary">Tambah Data Pegawai</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Pegawai</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Gambar</th>
                    <th>Nama Pegawai</th>
                    <th>Jenis Kelamin</th>
                    <th>Jabatan</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($pegawai as $pg) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td>
                      <img alt="image" src="<?php echo base_url().'/assets/upload/pegawai/'.$pg->gambar ?>" class="rounded-circle" width="45" data-toggle="tooltip" title="<?php echo $pg->nama_pegawai ?>">
                    </td>
                    <td><?php echo $pg->nama_pegawai ?></td>
                    <td>
                      <?php if($pg->jenis_kelamin == "Laki-laki") { ?>
                        <div class="badge badge-primary"><?php echo $pg->jenis_kelamin ?></div>
                      <?php }else{ ?>
                        <div class="badge badge-info"><?php echo $pg->jenis_kelamin ?></div>
                      <?php } ?>
                    </td>
                    <td><?php echo $pg->jabatan ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo base_url('klinik/kelola_pegawai/detail_data_pegawai/').$pg->id_pegawai ?>" class="btn btn-sm btn-success">Detail</a>
                        <a href="<?php echo base_url('klinik/kelola_pegawai/edit_data_pegawai/').$pg->id_pegawai ?>" class="btn btn-sm btn-warning">Edit</a>
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