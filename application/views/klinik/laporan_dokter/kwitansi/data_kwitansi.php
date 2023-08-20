<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Pendataan Kwitansi Dokter</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Laporan Dokter</div>
		        <div class="breadcrumb-item">Kwitansi</div>
		        <div class="breadcrumb-item">Form Pendataan Kwitansi Dokter</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Form Pendataan Kwitansi Dokter</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/laporan_dokter/kwitansi/data_kwitansi_aksi') ?>">
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
				                    <?php foreach($dokter as $ps) : ?>
	      							<div class="form-group">
					                    <label>Kode Dokter</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="kode_dokter" value="<?php echo $ps->kode_dokter ?>" readonly>
					                    </div>
					                    <?php echo form_error('kode_dokter','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Nama Dokter</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            <i class="fas fa-user"></i>
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="nama_dokter" value="<?php echo $ps->nama_dokter ?>" readonly>
					                    </div>
					                    <?php echo form_error('nama_dokter','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <?php endforeach; ?>
				                    <div class="form-group">
					                    <label>Tanggal Kwitansi</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          	<div class="input-group-text">
					                            	<i class="fas fa-calendar"></i>
					                          	</div>
					                        </div>
					                        <input type="date" class="form-control" name="tanggal_kwitansi" value="<?php echo date("Y-m-d"); ?>" readonly>
					                    </div>
					                    <?php echo form_error('tanggal_kwitansi','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <?php foreach($biaya_dokter as $bd) : ?>
				                    <div class="form-group">
					                    <label>Uang Duduk</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="uang_duduk" value="<?php echo $bd->uang_duduk ?>" readonly onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('uang_duduk','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Uang Makan</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="uang_makan" value="<?php echo $bd->uang_makan ?>" readonly onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('uang_makan','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                	<?php endforeach; ?>
				                	<div class="form-group">
					                    <label>Rawat Jalan Umum</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="rawat_jalan_umum" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('rawat_jalan_umum','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Rawat Jalan BPJS</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="rawat_jalan_bpjs" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('rawat_jalan_bpjs','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Rawat Inap Umum</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="rawat_inap_umum" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('rawat_inap_umum','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Rawat Inap BPJS</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="rawat_inap_bpjs" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('rawat_inap_bpjs','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
	      						</div>
	      						<div class="col-6">
	      							<div class="form-group">
					                    <label>Antigen</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="antigen" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('antigen','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Rapid Test</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="rapidtest" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('rapidtest','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Tindakan Umum</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="tindakan_umum" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('tindakan_umum','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Tindakan BPJS</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="tindakan_bpjs" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('tindakan_bpjs','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Visite Umum</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="visite_umum" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('visite_umum','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Visite BPJS</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="visite_bpjs" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('visite_bpjs','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Observasi</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="observasi" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('observasi','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Home Visite</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="home_visite" required onkeyup="penjumlahankwitansi()">
					                    </div>
					                    <?php echo form_error('home_visite','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
					                    <label>Total Pembayaran Kwitansi</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
						                        <div class="input-group-text">
						                            Rp.
						                        </div>
					                        </div>
					                    	<input type="text" class="form-control" name="total_bayar" readonly>
					                    </div>
					                    <?php echo form_error('total_bayar','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/laporan_dokter/kwitansi/data_dokter') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
	      						</div>
	      					</div>
	      				</form>
	      			</div>
	      		</div>
	      	</div>
	    </div>

	</section>
</div>