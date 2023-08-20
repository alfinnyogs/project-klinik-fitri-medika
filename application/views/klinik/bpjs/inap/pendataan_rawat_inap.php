<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Pendataan Rawat Inap</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">BPJS</div>
		        <div class="breadcrumb-item">Rawat Inap</div>
		        <div class="breadcrumb-item">Form Pendataan Rawat Inap</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Form Pendaftaran Rawat Inap</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/bpjs/rawat_inap/pendataan_rawat_inap_aksi') ?>">
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
					                    <label>Nomor Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          	<div class="input-group-text">
					                          		<i class="far fa-file-alt"></i>
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="nama_pasien" value="<?php echo $ps->nama_pasien ?>" readonly>
					                    </div>
					                    <?php echo form_error('nama_pasien','<div class="text-small text-danger">','</div>'); ?>
					                </div>
					                <div class="form-group">
					                    <label>Nama Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            <i class="fas fa-user"></i>
					                        	</div>
					                        </div>
					                    	<input type="text" class="form-control" name="nomor_pasien" value="<?php echo $ps->nomor_pasien ?>" readonly>
					                    </div>
					                    <?php echo form_error('nomor_pasien','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Nama Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            <i class="fas fa-user"></i>
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="nama_pasien" value="<?php echo $ps->nama_pasien ?>" readonly>
					                    </div>
					                    <?php echo form_error('nama_pasien','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
	      						</div>
	      						<div class="col-6">
	      							<div class="form-group">
					                    <label>Tanggal Pendaftaran Rawat Inap</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          	<div class="input-group-text">
					                            	<i class="fas fa-calendar"></i>
					                          	</div>
					                        </div>
					                        <input type="date" class="form-control" name="tanggal_pendaftaran" value="<?php echo date("Y-m-d"); ?>" readonly>
					                    </div>
					                    <?php echo form_error('tanggal_pendaftaran','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Jam Pendaftaran Rawat Inap</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          	<div class="input-group-text">
					                            	<i class="fas fa-clock"></i>
					                          	</div>
					                        </div>
					                        <input type="time" class="form-control" name="waktu_pendaftaran" value="<?php echo date('H:i'); ?>" readonly>
					                    </div>
					                    <?php echo form_error('waktu_pendaftaran','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
	      							<div class="form-group">
					                    <label>Status Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          	<div class="input-group-text">
					                            	<i class="fas fa-user"></i>
					                          	</div>
					                        </div>
					                        <input type="text" class="form-control" name="status" value="Pasien Rawat Inap" readonly>
					                    </div>
					                    <?php echo form_error('status','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Biaya Pendaftaran Rawat inap</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                        <?php foreach($biaya_rawatinap_bpjs as $bru) : ?>
					                    	<input type="text" class="form-control" name="biaya_pendaftaran" value="<?php echo $bru->biaya_klinik + $bru->biaya_dokter ?>" readonly>
					                    	<?php endforeach; ?>
					                    </div>
					                    <?php echo form_error('biaya_pendaftaran','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/bpjs/rawat_inap/data_pasien') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
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