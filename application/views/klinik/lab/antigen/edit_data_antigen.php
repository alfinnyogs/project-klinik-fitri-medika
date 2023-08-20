<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Antigen</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Antigen</div>
		        <div class="breadcrumb-item">Edit Data Antigen</div>
	      	</div>
		</div>

        <div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Edit Data Antigen</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/lab/kelola_antigen/edit_data_antigen_aksi') ?>">
                            <?php foreach($antigen as $a) : ?>
		                	<div class="row">
	      						<div class="col-6">
				                    <div class="form-group">
					                    <label>Nomor Antigen</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                    	<input type="hidden" name="id_antigen" value="<?php echo $a->id_antigen ?>">
					                    	<input type="text" class="form-control" name="nomor_antigen" value="<?php echo $a->nomor_antigen ?>" readonly>
					                    </div>
					                    <?php echo form_error('nomor_antigen','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
					                    <label>NIK</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-id-card"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="nik"  value="<?php echo $a->nik ?>" required>
					                    </div>
					                    <?php echo form_error('nik','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
                                        <label>Nama</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-user"></i>
                                            </div>
                                            </div>
                                            <input type="text" class="form-control" name="nama"  value="<?php echo $a->nama ?>" required>
                                        </div>
                                        <?php echo form_error('nama','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin"  value="<?php echo $a->jenis_kelamin ?>" required>
                                            <option value="<?php echo $a->jenis_kelamin ?>"><?php echo $a->jenis_kelamin ?></option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
                                        <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <label>No HP</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone-square"></i>
                                            </div>
                                            </div>
                                            <input type="text" class="form-control" name="no_hp" value="<?php echo $a->no_hp ?>" required>
                                        </div>
                                        <?php echo form_error('no_hp','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                </div>
                                <div class="col-6">
				                    <div class="form-group">
					                    <label>Alamat</label>
					                    <textarea class="form-control" style="height: 137px" name="alamat" required><?php echo $a->alamat ?></textarea>
					                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
				                      <label>Tanggal Registrasi Antigen</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-calendar"></i>
				                          </div>
				                        </div>
				                        <input type="date" class="form-control" name="tanggal_antigen" value="<?php echo $a->tanggal_antigen ?>" required>
				                      </div>
				                      <?php echo form_error('tanggal_antigen','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
                                        <label>Hasil Antigen</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-file"></i>
                                            </div>
                                            </div>
                                            <input type="text" class="form-control" name="hasil_antigen" value="<?php echo $a->hasil_antigen ?>" required>
                                        </div>
				                      <?php echo form_error('hasil_antigen','<div class="text-small text-danger">','</div>'); ?>
				                     </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/lab/kelola_antigen') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
				                </div>
				            </div>
                            <?php endforeach; ?>
			            </form>
	                </div>
                </div>
      		</div>
      	</div>

	</section>
</div>