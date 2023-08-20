<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Antigen</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Antigen</div>
		        <div class="breadcrumb-item">Input Data Antigen</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Input Data Antigen</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/lab/kelola_antigen/tambah_data_antigen_aksi') ?>">
	                		<?php foreach($pasien as $ps) : ?>
		                	<div class="row">
	      						<div class="col-6">
	      							<div class="form-group">
					                    <label>Admin Pengelola</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            <i class="fas fa-user"></i>
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="admin_pengelola" value="<?php echo $this->session->userdata('nama') ?>" readonly>
					                    </div>
					                    <?php echo form_error('admin_pengelola','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Nomor Antigen</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="nomor_antigen" value="<?php echo $nomor_antigen ?>" readonly>
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
					                    	<input type="text" class="form-control" name="nik" value="<?php echo $ps->nik ?>" readonly>
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
				                        <input type="text" class="form-control" name="nama" value="<?php echo $ps->nama_pasien ?>" readonly>
				                      </div>
				                      <?php echo form_error('nama','<div class="text-small text-danger">','</div>'); ?>
				                     </div>
				                    <div class="form-group">
					                    <label>Tanggal Lahir</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-calendar"></i>
					                          </div>
					                        </div>
					                        <input type="date" class="form-control" name="tanggal_lahir" value="<?php echo $ps->tanggal_lahir ?>" readonly>
					                    </div>
					                    <?php echo form_error('tanggal_lahir','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
							            <label>Jenis Kelamin</label>
							            <div class="input-group">
								            <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            <i class="fas fa-venus-mars"></i>
						                        </div>
					                        </div>
								            <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $ps->jenis_kelamin ?>" readonly>
								        </div>
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
				                        <input type="text" class="form-control" name="no_hp" value="<?php echo $ps->no_hp ?>" readonly>
				                      </div>
				                      <?php echo form_error('no_hp','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                </div>
                                <div class="col-6">
				                    <div class="form-group">
					                    <label>Alamat</label>
					                    <textarea class="form-control" style="height: 137px" name="alamat" readonly><?php echo $ps->alamat ?></textarea>
					                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      	<label>Pekerjaan</label>
				                      	<div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-briefcase"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="pekerjaan" required>
				                      	</div>
				                      	<?php echo form_error('pekerjaan','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
				                      <label>Tanggal Registrasi Antigen</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-calendar"></i>
				                          </div>
				                        </div>
				                        <input type="date" class="form-control" name="tanggal_antigen" required>
				                      </div>
				                      <?php echo form_error('tanggal_antigen','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Dokter Pemeriksa</label>
							            <select class="form-control" name="dokter_pemeriksa">
								            	<option value="">-- Pilih Dokter Pemeriksa --</option>
								            	<?php foreach($dokter as $dt): ?>
								                <option><?php echo $dt->nama_dokter ?></option>
							            		<?php endforeach; ?>
							            </select>
							            <?php echo form_error('dokter_pemeriksa','<div class="text-small text-danger">','</div>'); ?>
						            </div>
				                    <div class="form-group">
                                        <label>Hasil Antigen</label>
                                          <select class="form-control" name="hasil_antigen" required>
                                            <option value="">-- Pilih Hasil Antigen --</option>
                                            <option>Positif</option>
                                            <option>Negatif</option>
                                          </select>
                                        <?php echo form_error('hasil_antigen','<div class="text-small text-danger">','</div>'); ?>
                                    </div>
	                                    <?php foreach($biaya_antigen as $ba) : ?>
	  									<div class="form-group">
					                      <label>Total Harga</label>
					                      <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-money-bill"></i>
					                          </div>
					                        </div>
					                        <input type="text" class="form-control" name="biaya_antigen" value="<?php echo $ba->biaya + $ba->biaya_dokter ?>" readonly>
					                      </div>
					                      <?php echo form_error('biaya_antigen','<div class="text-small text-danger">','</div>'); ?>
					                    </div>
					                	<?php endforeach; ?>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/lab/kelola_antigen/data_pasien') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
				                </div>
				            </div>
				        <?php endforeach; ?>
			            </form>
	                </div>
                </div>
      		</div>
      	</div>
    </div>

	</section>
</div>