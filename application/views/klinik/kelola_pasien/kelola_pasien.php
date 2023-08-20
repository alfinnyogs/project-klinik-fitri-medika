<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Pasien</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Pasien</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Pasien Klinik Fitri Medika</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/kelola_pasien/tambah_data_pasien') ?>" class="btn btn-primary">Tambah Data Pasien</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nomer Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Nomer Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tempat Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($pasien as $ps) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ps->nomor_pasien ?></td>
                    <td><?php echo $ps->nama_pasien ?></td>
                    <td><?php echo $ps->tempat_lahir ?>, <?php echo date('d F Y', strtotime($ps->tanggal_lahir)) ?></td>
                    <td>
                      <?php if($ps->jenis_kelamin == "Laki-laki") { ?>
                        <div class="badge badge-primary"><?php echo $ps->jenis_kelamin ?></div>
                      <?php }else{ ?>
                        <div class="badge badge-info"><?php echo $ps->jenis_kelamin ?></div>
                      <?php } ?>
                    </td>
                    <td>
                      <?php
                        // tanggal lahir
                        $tanggal = new DateTime($ps->tanggal_lahir);

                        // tanggal hari ini
                        $today = new DateTime('today');

                        // tahun
                        $y = $today->diff($tanggal)->y;

                        // bulan
                        $m = $today->diff($tanggal)->m;

                        // hari
                        $d = $today->diff($tanggal)->d;
                        echo $y . " tahun " . $m . " bulan " . $d . " hari";
                      ?>
                    </td>
                    <td>
                      <?php if($ps->status == "Umum") { ?>
                        <div class="badge badge-primary"><?php echo $ps->status ?></div>
                      <?php }else{ ?>
                        <div class="badge badge-success"><?php echo $ps->status ?></div>
                      <?php } ?>
                    </td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo base_url('klinik/kelola_pasien/detail_data_pasien/').$ps->id_pasien ?>" class="btn btn-sm btn-success">Detail</a>
                        <a href="<?php echo base_url('klinik/kelola_pasien/edit_data_pasien/').$ps->id_pasien ?>" class="btn btn-sm btn-warning">Edit</a>
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

<script type="text/javascript">
  
</script>