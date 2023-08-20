<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Rawat Jalan</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">BPJS</div>
		        <div class="breadcrumb-item">Rawat Jalan</div>
		        <div class="breadcrumb-item">Detail Data Pasien</div>
	      	</div>
		    </div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
      				<?php foreach($pasien as $ps) : ?>
	                <div class="card-header">
	                    <h4>Detail Data Pasien <?php echo $ps->nama_pasien ?></h4>
	                </div>
	                <div class="card-body">
	                	<div class="row">
	      					<div class="col-6">
	      						<div class="table-responsive">
              						<table class="table table-striped">
              							<tr>
              								<th><i class="far fa-file-alt mr-2"></i>Nomor Pasien</th>
              								<td><?php echo $ps->nomor_pasien ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-user mr-2"></i>Nama Pasien</th>
              								<td><?php echo $ps->nama_pasien ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-building mr-2"></i>Tempat Lahir</th>
              								<td><?php echo $ps->tempat_lahir ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-building mr-2"></i>Alamat</th>
              								<td><?php echo $ps->alamat ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-building mr-2"></i>Kecamatan</th>
              								<td><?php echo $ps->kecamatan ?></td>
              							</tr>
              							<tr>
              								<th><i class="far fa-file-alt mr-2"></i>Status Pasien</th>
              								<td><div class="badge badge-primary"><?php echo $ps->status ?></div></td>
              							</tr>
              						</table>
              					</div>
	      					</div>
	      					<div class="col-6">
	      						<div class="table-responsive">
              						<table class="table table-striped">
              							<tr>
              								<th><i class="fas fa-calendar mr-2"></i>Tanggal Registrasi</th>
              								<td><?php echo date('d F Y', strtotime($ps->tanggal_regist)) ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-user mr-2"></i>Jenis Kelamin</th>
              								<td><?php echo $ps->jenis_kelamin ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-calendar mr-2"></i>Tanggal Lahir</th>
              								<td><?php echo date('d F Y', strtotime($ps->tanggal_lahir)) ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-building mr-2"></i>Desa</th>
              								<td><?php echo $ps->desa ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-building mr-2"></i>Kabupaten</th>
              								<td><?php echo $ps->kabupaten ?></td>
              							</tr>
              							<tr>
              								<th></th>
              								<td><a href="<?php echo base_url('klinik/bpjs/rawat_jalan/data_pasien') ?>" class="btn btn-warning float-right">Kembali</a></td>
              							</tr>
              						</table>
              					</div>
	      					</div>
	      				</div>
	                </div>
	            	<?php endforeach; ?>
	            </div>
	        </div>
	    </div>

	</section>
</div>