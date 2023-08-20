<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kelola Antigen</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Kelola Data</div>
		        <div class="breadcrumb-item">Kelola Antigen</div>
		        <div class="breadcrumb-item">Detail Data Antigen</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
      				<?php foreach($antigen as $a) : ?>
	                <div class="card-header">
	                    <h4>Detail Data Antigen <?php echo $a->nama ?></h4>
	                </div>
	                <div class="card-body">
	                	<div class="row">
	      					<div class="col-6">
	      						<div class="table-responsive">
              						<table class="table table-striped">
              							<tr>
              								<th><i class="far fa-file-alt mr-2"></i>Nomor Antigen</th>
              								<td><?php echo $a->nomor_antigen ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-id-card mr-2"></i>Nomor Induk Kependudukan</th>
              								<td><?php echo $a->nik ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-user mr-2"></i>Nama Lengkap</th>
              								<td><?php echo $a->nama ?></td>
              							</tr>
                            <tr>
                              <th><i class="fas fa-calendar mr-2"></i>Tanggal Lahir</th>
                              <td><?php echo date("d F Y", strtotime($a->tanggal_lahir)) ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-calendar mr-2"></i>Umur</th>
                              <td>
                                <?php
                                  // tanggal lahir
                                  $tanggal = new DateTime($a->tanggal_lahir);

                                  // tanggal hari ini
                                  $today = new DateTime('today');

                                  // tahun
                                  $y = $today->diff($tanggal)->y;

                                  // bulan
                                  $m = $today->diff($tanggal)->m;

                                  // hari
                                  $d = $today->diff($tanggal)->d;
                                  echo $y . " tahun " . $m . " bulan " . $d . " hari";
                                ?>
                              </td>
                            </tr>
              							<tr>
              								<th><i class="fas fa-venus-mars mr-2"></i>Jenis Kelamin</th> 
              								<td><?php echo $a->jenis_kelamin ?></td>
              							</tr>
              						</table>
              					</div>
	      					</div>
	      					<div class="col-6">
	      						<div class="table-responsive">
              						<table class="table table-striped">
                            <tr>
                              <th><i class="fas fa-phone-square mr-2"></i>No Handphone</th>
                              <td><?php echo $a->no_hp ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-briefcase mr-2"></i>Perkerjaan</th>
                              <td><?php echo $a->pekerjaan ?></td>
                            </tr>
              							<tr>
              								<th><i class="fas fa-building mr-2"></i>Alamat Lengkap</th>
              								<td><?php echo $a->alamat ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-calendar mr-2"></i>Tanggal Registrasi Antigen</th>
              								<td><?php echo $a->tanggal_antigen ?></td>
              							</tr>
                            <tr>
                              <th><i class="fas fa-user-md mr-2"></i>Dokter Pemeriksa</th>
                              <td><?php echo $a->dokter_pemeriksa ?></td>
                            </tr>
              							<tr>
              								<th><i class="fas fa-file mr-2"></i>Hasil Antigen</th>
              								<td><?php echo $a->hasil_antigen ?></td>
              							</tr>
            							<tr>
              								<th></th>
              								<td><a href="<?php echo base_url('klinik/lab/kelola_antigen') ?>" class="btn btn-warning float-right">Kembali</a></td>
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