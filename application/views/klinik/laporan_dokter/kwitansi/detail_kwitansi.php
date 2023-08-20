<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Kwitansi Dokter</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Laporan Dokter</div>
		        <div class="breadcrumb-item">Kwitansi</div>
		        <div class="breadcrumb-item">Detail Kwitansi Dokter</div>
	      	</div>
		</div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
      				<?php foreach($dokter as $a) : ?>
	                <div class="card-header">
	                    <h4>Detail Kwitansi Dokter <?php echo $a->nama_dokter ?></h4>
	                </div>
	                <div class="card-body">
	                	<div class="row">
	      					<div class="col-6">
	      						<div class="table-responsive">
              						<table class="table table-striped">
                            <tr>
                              <th><i class="fas fa-user-tie mr-2"></i>Admin Pengelola</th>
                              <td><?php echo $a->admin_pengelola ?></td>
                            </tr>
              							<tr>
              								<th><i class="far fa-file-alt mr-2"></i>Kode Dokter</th>
              								<td><?php echo $a->kode_dokter ?></td>
              							</tr>
                            <tr>
                              <th><i class="fas fa-calendar mr-2"></i>Tanggal Kwitansi</th>
                              <td><?php echo date("d F Y", strtotime($a->tanggal_kwitansi)) ?></td>
                            </tr>
              							<tr>
              								<th><i class="fas fa-money-bill mr-2"></i>Uang Duduk</th> 
              								<td>Rp. <?php echo number_format($a->uang_duduk,0,',','.') ?></td>
              							</tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Uang Makan</th> 
                              <td>Rp. <?php echo number_format($a->uang_makan,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Rawat Jalan Umum</th> 
                              <td>Rp. <?php echo number_format($a->rawat_jalan_umum,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Rawat Jalan BPJS</th> 
                              <td>Rp. <?php echo number_format($a->rawat_jalan_bpjs,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Rawat Inap Umum</th> 
                              <td>Rp. <?php echo number_format($a->rawat_inap_umum,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Rawat Inap BPJS</th> 
                              <td>Rp. <?php echo number_format($a->rawat_inap_bpjs,0,',','.') ?></td>
                            </tr>
              						</table>
              					</div>
	      					</div>
	      					<div class="col-6">
	      						<div class="table-responsive">
              						<table class="table table-striped">
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Antigen</th> 
                              <td>Rp. <?php echo number_format($a->antigen,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Rapid Test</th> 
                              <td>Rp. <?php echo number_format($a->rapidtest,0,',','.') ?></td>
                            </tr>
              							<tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Tindakan Umum</th> 
                              <td>Rp. <?php echo number_format($a->tindakan_umum,0,',','.') ?></td>
                            </tr>
              							<tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Tindakan BPJS</th> 
                              <td>Rp. <?php echo number_format($a->tindakan_bpjs,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Visite Umum</th> 
                              <td>Rp. <?php echo number_format($a->visite_umum,0,',','.') ?></td>
                            </tr>
              							<tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Visite BPJS</th> 
                              <td>Rp. <?php echo number_format($a->visite_bpjs,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Observasi</th> 
                              <td>Rp. <?php echo number_format($a->observasi,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Home Visite</th> 
                              <td>Rp. <?php echo number_format($a->home_visite,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-money-bill mr-2"></i>Total Pembayaran</th> 
                              <td>Rp. <?php echo number_format($a->total_bayar,0,',','.') ?></td>
                            </tr>
              						</table>
              					</div>
    	      					</div>
    	      				</div>
	                </div>
	            	<?php endforeach; ?>
                <div class="card-body">
                  <a href="<?php echo base_url('klinik/laporan_dokter/kwitansi') ?>" class="btn btn-warning float-right">Kembali</a>
                </div>
	            </div>
	        </div>
	    </div>

	</section>
</div>