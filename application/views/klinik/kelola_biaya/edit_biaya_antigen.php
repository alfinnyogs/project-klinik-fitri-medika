<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Biaya Antigen</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Biaya Antigen</div>
      </div>
    </div>
            <div class="card">
                  <div class="card-header">
                      <h4>Edit Kelola Biaya Antigen</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="<?php echo base_url('klinik/kelola_biaya/edit_biaya_antigen_aksi') ?>">
                      <?php foreach($biaya_antigen as $ba) : ?>
                            <div class="form-group">
                              <label>Biaya</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="far fa-file-alt"></i>
                                    </div>
                                  </div>
                                <input type="hidden" name="id_biaya" value="<?php echo $ba->id_biaya ?>">
                                <input type="text" class="form-control" name="biaya" value="<?php echo $ba->biaya ?>" required>
                              </div>
                              <?php echo form_error('biaya','<div class="text-small text-danger">','</div>'); ?>
                            </div>
                            <div class="form-group">
                              <label>Biaya Antigen</label>
                              <div class="input-group">
                                <div class="input-group-prepend">
                                  <div class="input-group-text">
                                    <i class="fas fa-capsules"></i>
                                  </div>
                                </div>
                                <input type="text" class="form-control" name="biaya_dokter" value="<?php echo $ba->biaya_dokter ?>" required>
                              </div>
                              <?php echo form_error('biaya_dokter','<div class="text-small text-danger">','</div>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            <a href="<?php echo base_url('klinik/kelola_biaya') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
                    <?php endforeach; ?>
                  </form>
                  </div>
                </div>

  </section>
</div>