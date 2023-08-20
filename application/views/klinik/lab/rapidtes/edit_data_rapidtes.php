<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Rapid Test</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Rapid Test</div>
		        <div class="breadcrumb-item">Edit Data Rapid Test</div>
	      	</div>
		</div>

        <div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Edit Data Rapid Test</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/lab/kelola_rapidtes/edit_data_rapidtes_aksi') ?>">
                            <?php foreach($rapidtest as $rt) : ?>
		                	<div class="row">
	      						<div class="col-6">
				                    <div class="form-group">
					                    <label>Nomor Rapid Test</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                    	<input type="hidden" name="id_rapidtes" value="<?php echo $rt->id_rapidtes ?>">
					                    	<input type="text" class="form-control" name="nomor_rapidtes" value="<?php echo $rt->nomor_rapidtes ?>" readonly>
					                    </div>
					                    <?php echo form_error('nomor_rapidtes','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
					                    <label>NIK</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-id-card"></i>
					                          </div>
					                        </div>
					                    	<input type="text" class="form-control" name="nik"  value="<?php echo $rt->nik ?>" required>
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
                                            <input type="text" class="form-control" name="nama"  value="<?php echo $rt->nama ?>" required>
                                        </div>
                                        <?php echo form_error('nama','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control" name="jenis_kelamin"  value="<?php echo $rt->jenis_kelamin ?>" required>
                                            <option value="<?php echo $rt->jenis_kelamin ?>"><?php echo $rt->jenis_kelamin ?></option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                        </select>
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
                                            <input type="text" class="form-control" name="no_hp" value="<?php echo $rt->no_hp ?>" required>
                                        </div>
                                        <?php echo form_error('no_hp','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                </div>
                                <div class="col-6">
				                    <div class="form-group">
					                    <label>Alamat</label>
					                    <textarea class="form-control" style="height: 137px" name="alamat" required><?php echo $rt->alamat ?></textarea>
					                    <?php echo form_error('alamat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
				                      <label>Tanggal Registrasi Rapid Test</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-calendar"></i>
				                          </div>
				                        </div>
				                        <input type="date" class="form-control" name="tanggal_rapidtes" value="<?php echo $rt->tanggal_rapidtes ?>" required>
				                      </div>
				                      <?php echo form_error('tanggal_rapidtes','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
                                    <div class="form-group">
                                        <label>Hasil Rapid Test</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-file"></i>
                                            </div>
                                            </div>
                                            <input type="text" class="form-control" name="hasil_rapidtes" value="<?php echo $rt->hasil_rapidtes ?>" required>
                                        </div>
				                      <?php echo form_error('hasil_rapidtes','<div class="text-small text-danger">','</div>'); ?>
				                     </div>
				                      <?php foreach($biaya_rapidtes as $br) : ?>
	  									<div class="form-group">
					                      <label>Total Harga</label>
					                      <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="fas fa-money-bill"></i>
					                          </div>
					                        </div>
					                        <input type="text" class="form-control" name="harga" value="<?php echo number_format($br->biaya + $br->biaya_dokter,0,',','.') ?>" readonly>
					                      </div>
					                      <?php echo form_error('harga','<div class="text-small text-danger">','</div>'); ?>
					                    </div>
					                	<?php endforeach; ?>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/lab/kelola_Rapidtes') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
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