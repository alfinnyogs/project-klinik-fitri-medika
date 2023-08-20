<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Admin</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Admin</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Admin Klinik Fitri Medika</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/kelola_admin/tambah_data_admin') ?>" class="btn btn-primary">Tambah Data Admin</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nama Admin</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($admin as $an) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $an->nama ?></td>
                    <td><?php echo $an->username ?></td>
                    <td><?php echo $an->password ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a onclick="return confirm('Yakin Akan Menghapus?')" href="<?php echo base_url('klinik/kelola_admin/hapus_data_admin/').$an->id_admin ?>" class="btn btn-sm btn-danger">Hapus</a>
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