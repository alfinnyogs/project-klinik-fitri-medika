<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Pendataan Pasien Rawat Inap</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">BPJS</div>
		        <div class="breadcrumb-item">Rawat Inap</div>
		        <div class="breadcrumb-item">Form Pendataan Pasien Rawat inap</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Form Pendataan Pasien Rawat Inap</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/bpjs/rawat_inap/data_pasien_rawat_inap_aksi') ?>">
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
	      							<?php foreach($pasien as $ps) : ?>
	      							<div class="form-group">
					                    <label>Nomor Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                        <input type="hidden" class="form-control" name="id_rawat_inap" value="<?php echo $ps->id_rawat_inap ?>" readonly>
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
				                    <?php endforeach; ?>
				                    <div class="form-group">
					                    <label>Kategori Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            <i class="fas fa-user"></i>
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="kategori_pasien" value="BPJS" readonly>
					                    </div>
					                    <?php echo form_error('nama_pasien','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Tanggal Pendataan Rawat Inap</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          	<div class="input-group-text">
					                            	<i class="fas fa-calendar"></i>
					                          	</div>
					                        </div>
					                        <input type="date" class="form-control" name="tanggal_pendataan" value="<?php echo date("Y-m-d"); ?>" readonly>
					                    </div>
					                    <?php echo form_error('tanggal_pendataan','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Kondisi Pasien</label>
                                            <select class="form-control" name="kondisi_pasien" required>
                                                <option value="">-- Pilih Kondisi Pasien --</option>
                                                <option>Sembuh</option>
                                                <option>Belum Sembuh</option>
                                            </select>
					                    <?php echo form_error('kondisi_pasien','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Dokter Pemeriksa</label>
							            <select class="form-control" name="dokter_pemeriksa" required="">
								            	<option value="">-- Pilih Dokter Pemeriksa --</option>
								            	<?php foreach($dokter as $dt): ?>
								                <option><?php echo $dt->nama_dokter ?></option>
							            		<?php endforeach; ?>
							            </select>
							            <?php echo form_error('dokter_pemeriksa','<div class="text-small text-danger">','</div>'); ?>
						            </div>
	      						</div>
	      						<div class="col-6">
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
					                    <label>Biaya Lain-lain</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="jumlah_biaya" required onkeyup="penjumlahanrawatinap()">
					                    </div>
					                    <?php echo form_error('jumlah_biaya','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Biaya Visite</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<?php foreach($biaya_visite_bpjs as $vu) : ?>
					                    	<input type="text" class="form-control" name="biaya_visite" value="<?php echo $vu->biaya_visite ?>" readonly onkeyup="penjumlahanrawatinap()">
					                    	<?php endforeach; ?>
					                    </div>
					                    <?php echo form_error('biaya_visite','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Total Biaya</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="total_biaya" readonly>
					                    </div>
					                    <?php echo form_error('total_biaya','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/bpjs/rawat_inap') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
	      						</div>
	      					</div>
	      				</form>
	      			</div>
	      		</div>
	      	</div>
	    </div>

	</section>
</div>