<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Laporan Rapid Test</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Laporan Rapid Test</div>
          </div>
        </div>

        <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Laporan Rapid Test</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="<?php echo base_url('klinik/laporan_lab/rapidtest') ?>" class="btn btn-warning">Kembali</a>
                <a href="<?php echo base_url().'klinik/laporan_lab/rapidtest/print_laporan_rapidtest/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" target="_blank" class="btn btn-primary"><i class="fas fa-print mr-2"></i>Print</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Rapid Test</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Tanggal Rapid Test</th>
                    <th>Hasil Rapid Test</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Rapid Test</th>
                    <th>NIK</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Nomor Handphone</th>
                    <th>Tanggal Rapid Test</th>
                    <th>Hasil Rapid Test</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $no=1;
                    foreach ($rapid_test as $rt) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rt->nomor_rapidtes ?></td>
                    <td><?php echo $rt->nik ?></td>
                    <td><?php echo $rt->nama ?></td>
                    <td><?php echo $rt->jenis_kelamin ?></td>
                    <td><?php echo $rt->alamat ?></td>
                    <td><?php echo $rt->no_hp ?></td>
                    <td><?php echo $rt->tanggal_rapidtes ?></td>
                    <td><?php echo $rt->hasil_rapidtes ?></td>
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