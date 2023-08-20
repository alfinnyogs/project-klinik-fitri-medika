<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Pasien Rawat Inap Selesai</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">BPJS</div>
		        <div class="breadcrumb-item">Rawat Inap</div>
		        <div class="breadcrumb-item">Form Pasien Rawat inap Selesai</div>
	      	</div>
		</div>

		<div class="card">
			<div class="card-body" align="center">
				<div class="col-12 col-md-6 col-lg-4">
	                <div class="card card-primary">
	                  <div class="card-header">
	                    <h4>Pasien Rawat Inap Selesai</h4>
	                  </div>
	                  <div class="card-body">
	                    <form method="post" action="<?php echo base_url('klinik/bpjs/rawat_inap/rawat_inap_selesai_aksi') ?>">
	                    	<?php foreach($selesai as $ss) : ?>
			        			<div class="custom-control custom-switch" style="margin-top: 10px">
			        				<input class="custom-control-input" type="hidden" name="id_rawat_inap" value="<?php echo $ss->id_rawat_inap ?>">
								  	<input class="custom-control-input" type="checkbox" id="customSwitch1" value="1" name="status">
								  	<label class="custom-control-label" for="customSwitch1">Selesai Rawat Inap</label>
								</div>
			
								<hr>
								<div class="btn-group" role="group" aria-label="Basic example">
	                          		<button type="submit" class="btn btn-primary">Simpan</button>
	                      		</div>
                      		<?php endforeach; ?>
			        	</form>
	                  </div>
	                </div>
              	</div>
			</div>
		</div>

	</section>
</div>