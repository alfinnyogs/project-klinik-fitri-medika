<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Laporan Rawat Jalan BPJS</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Laporan Rawat Jalan BPJS</div>
          </div>
        </div>

        <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Laporan Rawat Jalan BPJS</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="<?php echo base_url('klinik/laporan_bpjs/rawat_jalan') ?>" class="btn btn-warning">Kembali</a>
                <a href="<?php echo base_url().'klinik/laporan_bpjs/rawat_jalan/print_laporan_rawatjalan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" target="_blank" class="btn btn-primary"><i class="fas fa-print mr-2"></i>Print</a>
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
                    <th>Dokter Pemeriksa</th>
                    <th>Gejala Pasien</th>
                    <th>Obat Pasien</th>
                    <th>Total Pembayaran</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Dokter Pemeriksa</th>
                    <th>Gejala Pasien</th>
                    <th>Obat Pasien</th>
                    <th>Total Pembayaran</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $no=1;
                    foreach ($rawat_jalan as $rj) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rj->nomor_pasien ?></td>
                    <td><?php echo $rj->nama_pasien ?></td>
                    <td><?php echo $rj->dokter_pemeriksa ?></td>
                    <td><?php echo $rj->gejala ?></td>
                    <td>
                        <?php echo $rj->obat_1 ?> <?php echo $rj->obat_2 ?> <?php echo $rj->obat_3 ?> <?php echo $rj->obat_4 ?> <?php echo $rj->obat_5 ?> <?php echo $rj->obat_6 ?>    
                    </td>
                    <td>Rp. <?php echo number_format($rj->total_pembayaran,0,',','.') ?></td>
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