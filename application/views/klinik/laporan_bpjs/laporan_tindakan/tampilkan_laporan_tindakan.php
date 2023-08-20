<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
          <h1>Laporan Tindakan BPJS</h1>
          <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
            <div class="breadcrumb-item">Laporan Tindakan BPJS</div>
          </div>
        </div>

        <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Laporan Tindakan BPJS</h4>
            <div class="card-header-action">
              <div class="btn-group">
                <a href="<?php echo base_url('klinik/laporan_bpjs/tindakan') ?>" class="btn btn-warning">Kembali</a>
                <a href="<?php echo base_url().'klinik/laporan_bpjs/tindakan/print_laporan_tindakan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>" target="_blank" class="btn btn-primary"><i class="fas fa-print mr-2"></i>Print</a>
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
                    <th>Tindakan 1</th>
                    <th>Tindakan 2</th>
                    <th>Tindakan 3</th>
                    <th>Tindakan 4</th>
                    <th>Tindakan 5</th>
                    <th>Biaya Tindakan</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th width="5%">No</th>
                    <th>Nomor Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Tindakan 1</th>
                    <th>Tindakan 2</th>
                    <th>Tindakan 3</th>
                    <th>Tindakan 4</th>
                    <th>Tindakan 5</th>
                    <th>Biaya Tindakan</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php 
                    $no=1;
                    foreach ($tindakan as $rj) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $rj->nomor_pasien ?></td>
                    <td><?php echo $rj->nama_pasien ?></td>
                    <td><?php echo $rj->tindakan_1 ?></td>
                    <td><?php echo $rj->tindakan_2 ?></td>
                    <td><?php echo $rj->tindakan_3 ?></td>
                    <td><?php echo $rj->tindakan_4 ?></td>
                    <td><?php echo $rj->tindakan_5 ?></td>
                    <td>Rp. <?php echo number_format($rj->biaya_tindakan,0,',','.') ?></td>
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