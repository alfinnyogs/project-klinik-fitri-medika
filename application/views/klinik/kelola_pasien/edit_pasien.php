<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Pasien</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Pasien</div>
		        <div class="breadcrumb-item">Edit Data Pasien</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Edit Data Pasien</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/kelola_pasien/edit_data_pasien_aksi') ?>">
	                		<?php foreach($pasien as $ps) : ?>
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
					                        <input type="hidden" name="id_pasien" value="<?php echo $ps->id_pasien ?>">
					                    	<input type="text" class="form-control" name="nomor_pasien" value="<?php echo $ps->nomor_pasien ?>" readonly>
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
				                        <input type="date" class="form-control" name="tanggal_regist" value="<?php echo $ps->tanggal_regist ?>" required="">
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
				                        <input type="text" class="form-control" name="nik" maxlength="16" value="<?php echo $ps->nik ?>" required="">
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
				                        <input type="text" class="form-control" name="nama_pasien" value="<?php echo $ps->nama_pasien ?>" required="">
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
				                        <input type="text" class="form-control" name="tempat_lahir" value="<?php echo $ps->tempat_lahir ?>" required="">
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
				                        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $ps->tanggal_lahir ?>" required="">
				                      </div>
				                      <?php echo form_error('tanggal_lahir','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Jenis Kelamin</label>
							            <input type="hidden" name="jenis_kelamin" value="<?php echo $ps->jenis_kelamin ?>">
							            <select class="form-control" name="jenis_kelamin" required="">
							            	<option value="<?php echo $ps->jenis_kelamin ?>"><?php echo $ps->jenis_kelamin ?></option>
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
				                        <input type="text" class="form-control" name="no_hp" maxlength="13" value="<?php echo $ps->no_hp ?>" required="">
				                      </div>
				                      <?php echo form_error('no_hp','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                </div>
				                <div class="col-6">
				                    <div class="form-group">
					                    <label>Alamat</label>
					                    <textarea class="form-control" style="height: 137px" name="alamat" required=""><?php echo $ps->alamat ?></textarea>
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
				                        <input type="text" class="form-control" name="desa" value="<?php echo $ps->desa ?>" required="">
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
				                        <input type="text" class="form-control" name="kecamatan" value="<?php echo $ps->kecamatan ?>" required="">
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
				                        <input type="text" class="form-control" name="kabupaten" value="<?php echo $ps->kabupaten ?>" required="">
				                      </div>
				                      <?php echo form_error('kabupaten','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Status</label>
							            <input type="hidden" name="status" value="<?php echo $ps->status ?>" required="">
							            <select class="form-control" name="status">
							            	<option value="<?php echo $ps->status ?>"><?php echo $ps->status ?></option>
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
				                        <input type="text" class="form-control" name="no_bpjs" maxlength="13" value="<?php echo $ps->no_bpjs ?>" required="">
				                      </div>
				                      <?php echo form_error('no_bpjs','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/kelola_pasien') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
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