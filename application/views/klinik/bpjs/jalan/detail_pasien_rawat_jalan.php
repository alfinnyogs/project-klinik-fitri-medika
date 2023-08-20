<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Rawat Jalan</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">BPJS</div>
		        <div class="breadcrumb-item">Rawat Jalan</div>
		        <div class="breadcrumb-item">Detail Data Pasien Rawat Jalan</div>
	      	</div>
		    </div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
      				<?php foreach($rawat_jalan as $rj) : ?>
	                <div class="card-header">
	                    <h4>Detail Data Pasien <?php echo $rj->nama_pasien ?></h4>
	                </div>
	                <div class="card-body">
	                	<div class="row">
    	      					<div class="col-6">
    	      						<div class="table-responsive">
              						<table class="table table-striped">
                            <tr>
                              <th><i class="fas fa-user-tie mr-2"></i>Admin Pengelola</th>
                              <td><?php echo $rj->admin_pengelola ?></td>
                            </tr>
              							<tr>
              								<th><i class="far fa-file-alt mr-2"></i>Nomor Pasien</th>
              								<td><?php echo $rj->nomor_pasien ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-user mr-2"></i>Nama Pasien</th>
              								<td><?php echo $rj->nama_pasien ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-calendar mr-2"></i>Tanggal Rawat Jalan</th>
              								<td><?php echo date('d F Y', strtotime($rj->tanggal_pendaftaran)) ?></td>
              							</tr>
              							<tr>
              								<th><i class="fas fa-clock mr-2"></i>Waktu Rawat Jalan</th>
              								<td><?php echo date('H:i', strtotime($rj->waktu_pendaftaran)) ?></td>
              							</tr>
                            <tr>
                              <th><i class="fas fa-user-md mr-2"></i>Dokter Pemeriksa</th>
                              <td><?php echo $rj->dokter_pemeriksa ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-heartbeat mr-2"></i>Gejala Yang Dialami</th>
                              <td><?php echo $rj->gejala ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Obat 1</th>
                              <td><?php echo $rj->obat_1 ?></td>
                            </tr>
              						</table>
              					</div>
    	      					</div>
    	      					<div class="col-6">
    	      						<div class="table-responsive">
                  						<table class="table table-striped">
                  							<tr>
                                  <th><i class="fas fa-medkit mr-2"></i>Obat 2</th>
                                  <td><?php echo $rj->obat_2 ?></td>
                                </tr>
                                <tr>
                                  <th><i class="fas fa-medkit mr-2"></i>Obat 3</th>
                                  <td><?php echo $rj->obat_3 ?></td>
                                </tr>
                                <tr>
                                  <th><i class="fas fa-medkit mr-2"></i>Obat 4</th>
                                  <td><?php echo $rj->obat_4 ?></td>
                                </tr>
                                <tr>
                                  <th><i class="fas fa-medkit mr-2"></i>Obat 5</th>
                                  <td><?php echo $rj->obat_5 ?></td>
                                </tr>
                                <tr>
                                  <th><i class="fas fa-medkit mr-2"></i>Obat 6</th>
                                  <td><?php echo $rj->obat_6 ?></td>
                                </tr>
                                <tr>
                                  <th><i class="fas fa-money-bill mr-2"></i>Biaya Obat</th>
                                  <td>Rp. <?php echo number_format($rj->biaya_obat,0,',','.') ?></td>
                                </tr>
                                <tr>
                                  <th><i class="fas fa-money-bill mr-2"></i>Biaya Pendaftaran</th>
                                  <td>Rp. <?php echo number_format($rj->biaya_pendaftaran,0,',','.') ?></td>
                                </tr>
                  							<tr>
                  								<th><i class="fa fa-money-bill mr-2"></i>Total Pembayaran</th>
                  								<td>Rp. <?php echo number_format($rj->total_pembayaran,0,',','.') ?></td>
                  							</tr>
                  						</table>
                  					</div>
        	      					</div>
        	      				</div>
    	                </div>
    	            	<?php endforeach; ?>
                  <div class="card-body">
                    <a href="<?php echo base_url('klinik/bpjs/rawat_jalan') ?>" class="btn btn-warning float-right">Kembali</a>
                  </div>
	            </div>
	        </div>
	    </div>

	</section>
</div>