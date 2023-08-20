<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Dokter</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Dokter</div>
		        <div class="breadcrumb-item">Tambah Data Dokter</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Tambah Data Dokter</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/kelola_dokter/tambah_data_dokter_aksi') ?>" enctype="multipart/form-data">
	                		<div class="form-group">
		                       	<label>Kode Dokter</label>
		                       	<div class="input-group">
		                        <div class="input-group-prepend">
		                          	<div class="input-group-text">
		                            	<i class="fas fa-user"></i>
		                          	</div>
		                        </div>
		                        <input type="text" class="form-control" name="kode_dokter" value="<?php echo $kode_dokter ?>" readonly>
		                      	</div>
		                      <?php echo form_error('kode_dokter','<div class="text-small text-danger">','</div>'); ?>
		                    </div>
		                    <div class="form-group">
		                      <label>Nama Dokter</label>
		                      <div class="input-group">
		                        <div class="input-group-prepend">
		                          <div class="input-group-text">
		                            <i class="fas fa-user-md"></i>
		                          </div>
		                        </div>
		                        <input type="text" class="form-control" name="nama_dokter" required>
		                      </div>
		                      <?php echo form_error('nama_dokter','<div class="text-small text-danger">','</div>'); ?>
		                    </div>
		                    <div class="form-group">
					            <label>Jenis Kelamin</label>
					            <select class="form-control" name="jenis_kelamin" required>
					            	<option value="">-- Pilih Jenis Kelamin --</option>
					                <option>Laki-laki</option>
					                <option>Perempuan</option>
					            </select>
					            <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>'); ?>
				            </div>
		                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
		                    <a href="<?php echo base_url('klinik/kelola_dokter') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
			            </form>
	                </div>
                </div>
      		</div>
      	</div>

	</section>
</div>