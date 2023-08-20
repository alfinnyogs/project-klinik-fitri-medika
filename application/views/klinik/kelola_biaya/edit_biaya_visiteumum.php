<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Biaya Visite Umum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Biaya Visite Umum</div>
      </div>
    </div>
            <div class="card">
                  <div class="card-header">
                      <h4>Edit Kelola Biaya Visite Umum</h4>
                  </div>
                  <div class="card-body">
                    <form method="post" action="<?php echo base_url('klinik/kelola_biaya/edit_biaya_visiteumum_aksi') ?>">
                      <?php foreach($visite_umum as $ba) : ?>
                            <div class="form-group">
                              <label>Biaya Visite</label>
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text">
                                      <i class="far fa-file-alt"></i>
                                    </div>
                                  </div>
                                <input type="hidden" name="id_biaya" value="<?php echo $ba->id_biaya ?>">
                                <input type="text" class="form-control" name="biaya_visite" value="<?php echo $ba->biaya_visite ?>" required>
                              </div>
                              <?php echo form_error('biaya_visite','<div class="text-small text-danger">','</div>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary float-right">Simpan</button>
                            <a href="<?php echo base_url('klinik/kelola_biaya') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
                    <?php endforeach; ?>
                  </form>
                  </div>
                </div>

  </section>
</div>