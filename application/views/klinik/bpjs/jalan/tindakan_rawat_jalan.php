<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Tindakan Rawat Jalan</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">BPJS</div>
		        <div class="breadcrumb-item">Rawat Jalan</div>
		        <div class="breadcrumb-item">Form Tindakan Rawat Jalan</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Form Tindakan Rawat Jalan</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/bpjs/rawat_jalan/tindakan_rawat_jalan_aksi') ?>">
	                		
	                		<div class="row">
	                			<div class="col-md-6">
	                				<?php foreach($pasien as $ps) : ?>
	                				<div class="form-group">
					                    <label>Nomor Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                        <input type="hidden" class="form-control" name="id_rawat_jalan" value="<?php echo $ps->id_rawat_jalan ?>">
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
					                    <label>Kategori Pasien</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            <i class="fas fa-user"></i>
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="kategori_pasien" value="BPJS" readonly>
					                    </div>
					                    <?php echo form_error('kategori_pasien','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Tanggal Tindakan</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          	<div class="input-group-text">
					                            	<i class="fas fa-calendar"></i>
					                          	</div>
					                        </div>
					                        <input type="date" class="form-control" name="tanggal_tindakan" value="<?php echo date("Y-m-d"); ?>" readonly>
					                    </div>
					                    <?php echo form_error('tanggal_tindakan','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
	                				<div class="form-group">
					                    <label>Tindakan 1</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-medkit"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="tindakan_1" required="">
					                    </div>
					                    <?php echo form_error('tindakan_1','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <?php endforeach; ?>
	                			</div>
	                			<div class="col-md-6">
	                				<div class="form-group">
					                    <label>Tindakan 2</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-medkit"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="tindakan_2" required="">
					                    </div>
					                    <?php echo form_error('tindakan_2','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
	                				<div class="form-group">
					                    <label>Tindakan 3</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-medkit"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="tindakan_3" required="">
					                    </div>
					                    <?php echo form_error('tindakan_3','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
	                				<div class="form-group">
					                    <label>Tindakan 4</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-medkit"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="tindakan_4" required="">
					                    </div>
					                    <?php echo form_error('tindakan_4','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Tindakan 5</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-medkit"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="tindakan_5" required="">
					                    </div>
					                    <?php echo form_error('tindakan_5','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Total Biaya Tindakan</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-money-bill"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="biaya_tindakan" required="">
					                    </div>
					                    <?php echo form_error('biaya_tindakan','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
		                    		<a href="<?php echo base_url('klinik/bpjs/rawat_jalan') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
	                			</div>
	                		</div>
	      				</form>
	      			</div>
	      		</div>
	      	</div>
	    </div>

	</section>
</div>