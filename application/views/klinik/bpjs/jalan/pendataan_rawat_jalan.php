<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Pendataan Rawat Jalan</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">BPJS</div>
		        <div class="breadcrumb-item">Rawat Jalan</div>
		        <div class="breadcrumb-item">Form Pendataan Rawat Jalan</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Form Pendataan Rawat Jalan</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/bpjs/rawat_jalan/pendataan_rawat_jalan_aksi') ?>">
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
					                    <label>Tanggal Rawat Jalan</label>
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
					                    <label>Jam Rawat Jalan</label>
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
					                    <label>Gejala</label>
					                    <textarea class="form-control" style="height: 137px" name="gejala" required></textarea>
					                    <?php echo form_error('gejala','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
	      						</div>
	      						<div class="col-6">
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
				                    <div class="row">
				                    	<div class="col-6">
				                    		<div class="form-group">
							                    <label>Obat 1</label>
							                    <select class="form-control" name="obat_1">
										            <option value="">-- Pilih Obat --</option>
										            	<?php foreach($obat as $ot): ?>
										                <option><?php echo $ot->nama_obat ?></option>
									            		<?php endforeach; ?>
									            </select>
						                    </div>
						                    <div class="form-group">
							                    <label>Obat 3</label>
							                    <select class="form-control" name="obat_3">
										            <option value="">-- Pilih Obat --</option>
										            	<?php foreach($obat as $ot): ?>
										                <option><?php echo $ot->nama_obat ?></option>
									            		<?php endforeach; ?>
									            </select>
						                    </div>
						                    <div class="form-group">
							                    <label>Obat 5</label>
							                    <select class="form-control" name="obat_5">
										            <option value="">-- Pilih Obat --</option>
										            	<?php foreach($obat as $ot): ?>
										                <option><?php echo $ot->nama_obat ?></option>
									            		<?php endforeach; ?>
									            </select>
						                    </div>
				                    	</div>
				                    	<div class="col-6">
				                    		<div class="form-group">
							                    <label>Obat 2</label>
							                    <select class="form-control" name="obat_2">
										            <option value="">-- Pilih Obat --</option>
										            	<?php foreach($obat as $ot): ?>
										                <option><?php echo $ot->nama_obat ?></option>
									            		<?php endforeach; ?>
									            </select>
						                    </div>
						                    <div class="form-group">
							                    <label>Obat 4</label>
							                    <select class="form-control" name="obat_4">
										            <option value="">-- Pilih Obat --</option>
										            	<?php foreach($obat as $ot): ?>
										                <option><?php echo $ot->nama_obat ?></option>
									            		<?php endforeach; ?>
									            </select>
						                    </div>
						                    <div class="form-group">
							                    <label>Obat 6</label>
							                    <select class="form-control" name="obat_6">
										            <option value="">-- Pilih Obat --</option>
										            	<?php foreach($obat as $ot): ?>
										                <option><?php echo $ot->nama_obat ?></option>
									            		<?php endforeach; ?>
									            </select>
						                    </div>
				                    	</div>
				                    </div>
				                    <div class="form-group">
					                    <label>Biaya Obat Rawat Jalan</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="biaya_obat" onkeyup="penjumlahanrawatjalan()">
					                    </div>
					                    <?php echo form_error('biaya_obat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <?php foreach($biaya as $by): ?>
				                    <div class="form-group">
					                    <label>Biaya Pendaftaran Rawat Jalan</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="biaya_pendaftaran" value="<?php echo $by->total ?>" onkeyup="penjumlahanrawatjalan()" readonly>
					                    </div>
					                    <?php echo form_error('biaya_pendaftaran','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <?php endforeach; ?>
				                    <div class="form-group">
					                    <label>Total Pembayaran Rawat Jalan</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="total_pembayaran" readonly>
					                    </div>
					                    <?php echo form_error('total_pembayaran','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/bpjs/rawat_jalan/data_pasien') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
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