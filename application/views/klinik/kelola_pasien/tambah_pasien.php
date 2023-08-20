<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Pasien</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Pasien</div>
		        <div class="breadcrumb-item">Tambah Data Pasien</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Tambah Data Pasien</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/kelola_pasien/tambah_data_pasien_aksi') ?>">
		                	<div class="row">
	      						<div class="col-6">
				                    <div class="form-group">
					                    <label>Nomor Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="nomor_pasien" value="<?php echo $nomor_pasien ?>" disabled>
					                    </div>
					                    <?php echo form_error('nomor_pasien','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Tanggal Registrasi</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-calendar"></i>
				                          </div>
				                        </div>
				                        <input type="date" class="form-control" name="tanggal_regist" required="">
				                      </div>
				                      <?php echo form_error('tanggal_regist','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>NIK</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-user"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="nik" maxlength="16" required="">
				                      </div>
				                      <?php echo form_error('nik','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Nama Pasien</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-user"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="nama_pasien" required="">
				                      </div>
				                      <?php echo form_error('nama_pasien','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Tempat Lahir</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-building"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="tempat_lahir" required="">
				                      </div>
				                      <?php echo form_error('tempat_lahir','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Tanggal Lahir</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-calendar"></i>
				                          </div>
				                        </div>
				                        <input type="date" class="form-control" name="tanggal_lahir" required="">
				                      </div>
				                      <?php echo form_error('tanggal_lahir','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Jenis Kelamin</label>
							            <select class="form-control" name="jenis_kelamin" required="">
							            	<option value="">-- Pilih Jenis Kelamin --</option>
							                <option>Laki-laki</option>
							                <option>Perempuan</option>
							            </select>
							            <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>'); ?>
						            </div>
						            <div class="form-group">
				                      <label>No Telepon</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-phone"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="no_hp" maxlength="13" required="">
				                      </div>
				                      <?php echo form_error('no_hp','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                </div>
				                <div class="col-6">
				                    <div class="form-group">
					                    <label>Alamat</label>
					                    <textarea class="form-control" style="height: 137px" name="alamat"></textarea>
					                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Desa</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-building"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="desa" required="">
				                      </div>
				                      <?php echo form_error('desa','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Kecamatan</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-building"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="kecamatan" required="">
				                      </div>
				                      <?php echo form_error('kecamatan','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Kota / Kabupaten</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-building"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="kabupaten" required="">
				                      </div>
				                      <?php echo form_error('kabupaten','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Status</label>
							            <select class="form-control" name="status" required="">
							            	<option value="">-- Pilih Jenis Status --</option>
							                <option>Umum</option>
							                <option>BPJS</option>
							            </select>
							            <?php echo form_error('status','<div class="text-small text-danger">','</div>'); ?>
						            </div>
						            <div class="form-group">
				                      <label>No BPJS</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-user"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="no_bpjs" maxlength="13" required="">
				                      </div>
				                      <?php echo form_error('no_bpjs','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/kelola_pasien') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
				                </div>
				            </div>
			            </form>
	                </div>
                </div>
      		</div>
      	</div>

	</section>
</div>