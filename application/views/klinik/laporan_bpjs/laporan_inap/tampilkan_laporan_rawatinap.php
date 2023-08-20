<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Laporan Rawat Inap BPJS</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Laporan Rawat Inap BPJS</div>
          </div>
        </div>

        <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Laporan Rawat Inap BPJS</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="<?php echo base_url('klinik/laporan_bpjs/rawat_inap') ?>" class="btn btn-warning">Kembali</a>
                <a href="<?php echo base_url().'klinik/laporan_bpjs/rawat_inap/print_laporan_rawatinap/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" target="_blank" class="btn btn-primary"><i class="fas fa-print mr-2"></i>Print</a>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Biaya Pendaftaran</th>
                    <th>Penanggung Jawab</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tanggal Pendaftaran</th>
                    <th>Biaya Pendaftaran</th>
                    <th>Penanggung Jawab</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $no=1;
                    foreach ($rawat_inap as $ri) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ri->nomor_pasien ?></td>
                    <td><?php echo $ri->nama_pasien ?></td>
                    <td><?php echo date('d F Y', strtotime($ri->tanggal_pendaftaran)) ?></td>
                    <td>Rp. <?php echo number_format($ri->biaya_pendaftaran,0,',','.') ?></td>
                    <td><?php echo $ri->admin_pengelola ?></td>
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