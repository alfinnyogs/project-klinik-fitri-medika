<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Admin</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Admin</div>
		        <div class="breadcrumb-item">Tambah Data Admin</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Tambah Data Admin</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/kelola_admin/tambah_data_admin_aksi') ?>">
		                    <div class="form-group">
			                    <label>Nama Admin</label>
			                    <div class="input-group">
			                        <div class="input-group-prepend">
			                          <div class="input-group-text">
			                            <i class="far fa-file-alt"></i>
			                          </div>
			                        </div>
			                    	<input type="text" class="form-control" name="nama" required>
			                    </div>
			                    <?php echo form_error('nama','<div class="text-small text-danger">','</div>'); ?>
		                    </div>
		                    <div class="form-group">
		                      <label>Username</label>
		                      <div class="input-group">
		                        <div class="input-group-prepend">
		                          <div class="input-group-text">
		                            <i class="fas fa-capsules"></i>
		                          </div>
		                        </div>
		                        <input type="Username" class="form-control" name="username" required>
		                      </div>
		                      <?php echo form_error('username','<div class="text-small text-danger">','</div>'); ?>
		                    </div>
		                    <div class="form-group">
		                      <label>Password</label>
		                      <div class="input-group">
		                        <div class="input-group-prepend">
		                          <div class="input-group-text">
		                            <i class="fas fa-prescription-bottle"></i>
		                          </div>
		                        </div>
		                        <input type="Password" class="form-control" name="password" required>
		                      </div>
		                      <?php echo form_error('password','<div class="text-small text-danger">','</div>'); ?>
		                    </div>
		                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
		                    <a href="<?php echo base_url('klinik/kelola_admin') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
			            </form>
	                </div>
                </div>
      		</div>
      	</div>

	</section>
</div>