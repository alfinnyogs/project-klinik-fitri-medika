<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Rapid Test</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Lab</div>
        <div class="breadcrumb-item">Rapid Test</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Pasien Klinik Fitri Medika</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/lab/kelola_rapidtes/data_pasien') ?>" class="btn btn-primary">Cari Data Pasien</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No</th>
                    <th>Nomor Rapid Test</th>
                    <th>Nama</th>
                    <th>Tanggal Rapid Test</th>
                    <th>Hasil Rapid Test</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomor Rapid Test</th>
                    <th>Nama</th>
                    <th>Tanggal Rapid Test</th>
                    <th>Hasil Rapid Test</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                  <?php 
                    $no=1;
                    foreach ($rapidtest as $rt) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rt->nomor_rapidtes ?></td>
                    <td><?php echo $rt->nama ?></td>
                    <td><?php echo date("d F Y", strtotime($rt->tanggal_rapidtes)) ?></td>
                    <td><?php echo $rt->hasil_rapidtes ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="<?php echo base_url('klinik/lab/kelola_rapidtes/detail_data_rapidtes/').$rt->id_rapidtes ?>" class="btn btn-sm btn-success">Detail</a>
                        <a onclick="return confirm('Yakin Akan Menghapus?')" href="<?php echo base_url('klinik/lab/kelola_rapidtes/hapus_data_rapidtes/').$rt->id_rapidtes ?>" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="<?php echo base_url('klinik/lab/kelola_rapidtes/print_hasil/').$rt->id_rapidtes ?>"class="btn btn-sm btn-primary" target="_blank">Print</a>
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