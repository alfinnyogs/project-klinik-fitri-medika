<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Laporan Antigen</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Laporan Antigen</div>
          </div>
        </div>

        <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Laporan Antigen</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="<?php echo base_url('klinik/laporan_lab/antigen') ?>" class="btn btn-warning">Kembali</a>
                <a href="<?php echo base_url().'klinik/laporan_lab/antigen/print_laporan_antigen/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" target="_blank" class="btn btn-primary"><i class="fas fa-print mr-2"></i>Print</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Antigen</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Tanggal Antigen</th>
                    <th>Hasil Antigen</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Antigen</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Tanggal Antigen</th>
                    <th>Hasil Antigen</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $no=1;
                    foreach ($antigen as $a) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $a->nomor_antigen ?></td>
                    <td><?php echo $a->nik ?></td>
                    <td><?php echo $a->nama ?></td>
                    <td><?php echo $a->jenis_kelamin ?></td>
                    <td><?php echo $a->alamat ?></td>
                    <td><?php echo $a->no_hp ?></td>
                    <td><?php echo $a->tanggal_antigen ?></td>
                    <td><?php echo $a->hasil_antigen ?></td>
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