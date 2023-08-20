<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Antigen</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Antigen</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Antigen Klinik Fitri Medika</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/lab/kelola_antigen/data_pasien') ?>" class="btn btn-primary">Cari Data Pasien</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                  <th>No</th>
                    <th>Nomor Antigen</th>
                    <th>Nama</th>
                    <th>Tanggal Antigen</th>
                    <th>Hasil Antigen</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomor Antigen</th>
                    <th>Nama</th>
                    <th>Tanggal Antigen</th>
                    <th>Hasil Antigen</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                  <?php 
                    $no=1;
                    foreach ($antigen as $a) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $a->nomor_antigen ?></td>
                    <td><?php echo $a->nama ?></td>
                    <td><?php echo date("d F Y", strtotime($a->tanggal_antigen)) ?></td>
                    <td><?php echo $a->hasil_antigen ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                      <a href="<?php echo base_url('klinik/lab/kelola_antigen/detail_data_antigen/').$a->id_antigen ?>" class="btn btn-sm btn-success">Detail</a>
                       <a onclick="return confirm('Yakin Akan Menghapus?')" href="<?php echo base_url('klinik/lab/kelola_antigen/hapus_data_antigen//').$a->id_antigen ?>" class="btn btn-sm btn-danger">Hapus</a>
                        <a href="<?php echo base_url('klinik/lab/kelola_antigen/print_hasil/').$a->id_antigen ?>"class="btn btn-sm btn-primary" target="_blank">Print</a>
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