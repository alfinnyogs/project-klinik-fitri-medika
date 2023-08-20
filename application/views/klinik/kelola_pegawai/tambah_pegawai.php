<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Pegawai</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Pegawai</div>
		        <div class="breadcrumb-item">Tambah Data Pegawai</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Tambah Data Pegawai</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/kelola_pegawai/tambah_data_pegawai_aksi') ?>" enctype="multipart/form-data">
		                	<div class="row">
	      						<div class="col-6">
				                    <div class="form-group">
				                      <label>Nama Pegawai</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-user"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="nama_pegawai">
				                      </div>
				                      <?php echo form_error('nama_pegawai','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Tempat Lahir</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-building"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="tempat_lahir">
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
				                        <input type="date" class="form-control" name="tanggal_lahir">
				                      </div>
				                      <?php echo form_error('tanggal_lahir','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Jenis Kelamin</label>
							            <select class="form-control" name="jenis_kelamin">
							            	<option value="">-- Pilih Jenis Kelamin --</option>
							                <option>Laki-laki</option>
							                <option>Perempuan</option>
							            </select>
							            <?php echo form_error('jenis_kelamin','<div class="text-small text-danger">','</div>'); ?>
						            </div>
						            <div class="form-group">
					                    <label>Alamat</label>
					                    <textarea class="form-control" style="height: 137px" name="alamat"></textarea>
					                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                </div>
				                <div class="col-6">
				                    <div class="form-group">
				                      <label>Desa</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-building"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="desa">
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
				                        <input type="text" class="form-control" name="kecamatan">
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
				                        <input type="text" class="form-control" name="kabupaten">
				                      </div>
				                      <?php echo form_error('kabupaten','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
							            <label>Jabatan</label>
							            <div class="input-group">
				                        <div class="input-group-prepend">
				                          	<div class="input-group-text">
				                            	<i class="fa fa-user-md"></i>
				                          	</div>
				                        </div>
				                        	<input type="text" class="form-control" name="jabatan">
				                      	</div>
							            <?php echo form_error('jabatan','<div class="text-small text-danger">','</div>'); ?>
						            </div>
						            <div class="form-group">
				                      	<label>Gambar</label>
				                      	<input type="file" class="form-control" name="gambar">
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/kelola_dokter') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
				                </div>
				            </div>
			            </form>
	                </div>
                </div>
      		</div>
      	</div>

	</section>
</div>