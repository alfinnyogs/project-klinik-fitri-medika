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

    <div class="card">
    <div class="card-body">
        <form method="post" action="<?php echo base_url('klinik/laporan_bpjs/rawat_inap') ?>">
            <div class="form-group">
                <label>Dari Tanggal</label>
                <input type="date" name="dari" class="form-control" required>
                <?php echo form_error('dari','<span class="text-small text-danger">','</span>') ?>
            </div>
            <div class="form-group">
                <label>Sampai Tanggal</label>
                <input type="date" name="sampai" class="form-control" required>
                <?php echo form_error('sampai','<span class="text-small text-danger">','</span>') ?>
            </div>

            <button type="submit" class="btn btn-sm btn-primary float-right"><i class="fas fa-eye"></i> Tampilkan Data</button>
        </form>
    </div>
    </div>

    </section>
</div>