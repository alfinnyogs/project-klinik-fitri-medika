<!-- <!-- Main Content
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Dokter</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Dokter</div>
		        <div class="breadcrumb-item">Detail Data Dokter</div>
	      	</div>
		</div>
		
		<br>
		<div class="card profile-widget">
			<?php foreach($dokter as $dt) : ?>
	        <div class="profile-widget-header">
	            <img alt="image" src="<?php echo base_url().'/assets/upload/dokter/'.$dt->gambar ?>" class="rounded-circle profile-widget-picture">
	            <div class="profile-widget-items">
	              	<div class="profile-widget-item">
	                	<div class="profile-widget-item-label">Total Pelayanan</div>
	                	<div class="profile-widget-item-value">187</div>
	              	</div>
	              	<div class="profile-widget-item">
	                	<div class="profile-widget-item-label">Total Rawat Jalan</div>
	                	<div class="profile-widget-item-value">6,8K</div>
	              	</div>
	              	<div class="profile-widget-item">
	                	<div class="profile-widget-item-label">Total Rawat Inap</div>
	                	<div class="profile-widget-item-value">2,1K</div>
	              	</div>
	            </div>
	        </div>
	        <div class="profile-widget-description">
	            <div class="profile-widget-name"><?php echo $dt->nama_dokter ?> 
	            	<div class="text-muted d-inline font-weight-normal">
	            		<div class="slash"></div> <?php echo $dt->spesialis ?>
	            	</div>
	            </div>
	            <div class="table-responsive">
					<table class="table table-striped">
						<tr>
							<th>Tempat Tanggal Lahir</th>
							<th>Jenis Kelamin</th>
							<th>Alamat</th>
						</tr>
						<tr>
							<td>
								<?php echo $dt->tempat_lahir ?>, <?php echo date('d F Y', strtotime($dt->tanggal_lahir)) ?>	
							</td>
							<td>
								<?php if($dt->jenis_kelamin == "Laki-laki") { ?>
			                      	<div class="badge badge-primary"><?php echo $dt->jenis_kelamin ?></div>
			                    <?php }else{ ?>
			                      	<div class="badge badge-info"><?php echo $dt->jenis_kelamin ?></div>
			                    <?php } ?>
							</td>
							<td><?php echo $dt->alamat ?></td>
						</tr>
					</table>
				</div>
	        </div>
          	<div class="card-footer text-center">
	            <div class="font-weight-bold mb-2">Follow Ujang On</div>
	            <a href="#" class="btn btn-social-icon btn-facebook mr-1">
	              <i class="fab fa-facebook-f"></i>
	            </a>
	            <a href="#" class="btn btn-social-icon btn-twitter mr-1">
	              <i class="fab fa-twitter"></i>
	            </a>
	            <a href="#" class="btn btn-social-icon btn-github mr-1">
	              <i class="fab fa-github"></i>
	            </a>
	            <a href="#" class="btn btn-social-icon btn-instagram">
	              <i class="fab fa-instagram"></i>
	            </a>
          	</div>
          	<?php endforeach; ?>
	    </div>

	</section>
</div> -->