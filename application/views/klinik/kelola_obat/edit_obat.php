<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Obat</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Obat</div>
		        <div class="breadcrumb-item">Edit Data Obat</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
	                <div class="card-header">
	                    <h4>Edit Data Obat</h4>
	                </div>
	                <div class="card-body">
	                	<form method="post" action="<?php echo base_url('klinik/kelola_obat/edit_data_obat_aksi') ?>">
	                		<?php foreach($obat as $ob) : ?>
		                	<div class="row">
	      						<div class="col-6">
				                    <div class="form-group">
					                    <label>Kode Obat</label>
					                    <div class="input-group">
					                        <div class="input-group-prepend">
					                          <div class="input-group-text">
					                            <i class="far fa-file-alt"></i>
					                          </div>
					                        </div>
					                        <input type="hidden" name="id_obat" value="<?php echo $ob->id_obat ?>">
					                    	<input type="text" class="form-control" name="kode_obat" value="<?php echo $ob->kode_obat ?>" readonly>
					                    </div>
					                    <?php echo form_error('kode_obat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Nama Obat</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-capsules"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="nama_obat" value="<?php echo $ob->nama_obat ?>" required>
				                      </div>
				                      <?php echo form_error('nama_obat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <div class="form-group">
				                      <label>Dosis Obat</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-prescription-bottle"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="dosis_obat" value="<?php echo $ob->dosis_obat ?>" required>
				                      </div>
				                      <?php echo form_error('dosis_obat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                </div>
				                <div class="col-6">
				                	<div class="form-group">
							            <label>Jenis Obat</label>
										<input type="hidden" name="jenis_obat" value="<?php echo $ob->jenis_obat ?>">
							            <select class="form-control" name="jenis_obat"  required >
							            	<option value="<?php echo $ob->jenis_obat ?>"><?php echo $ob->jenis_obat ?> </option>
							                <option>Tablet</option>
							                <option>Kapsul</option>
							                <option>Sirup</option>
							            </select>
							            <?php echo form_error('jenis_obat','<div class="text-small text-danger">','</div>'); ?>
						            </div>
				                    <div class="form-group">
				                      <label>Harga Obat</label>
				                      <div class="input-group">
				                        <div class="input-group-prepend">
				                          <div class="input-group-text">
				                            <i class="fas fa-money-bill"></i>
				                          </div>
				                        </div>
				                        <input type="text" class="form-control" name="harga_obat" value="<?php echo $ob->harga_obat ?>" required>
				                      </div>
				                      <?php echo form_error('harga_obat','<div class="text-small text-danger">','</div>'); ?>
				                    </div>
				                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
				                    <a href="<?php echo base_url('klinik/kelola_obat') ?>" class="btn btn-warning float-right mr-2">Kembali</a>
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