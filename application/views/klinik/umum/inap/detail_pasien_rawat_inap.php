<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Detail Data Pasien Rawat Inap</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Umum</div>
		        <div class="breadcrumb-item">Rawat Inap</div>
		        <div class="breadcrumb-item">Detail Data Pasien Rawat Inap</div>
	      	</div>
		    </div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
      				<?php foreach($rawat_inap as $ri) : ?>
	                <div class="card-header">
	                    <h4>Rawat Inap Pada Tanggal <?php echo date('d F Y', strtotime($ri->tanggal_pendataan)) ?></h4>
	                </div>
	                <div class="card-body">
	                	<div class="row">
	      					<div class="col-6">
	      						<div class="table-responsive">
          						<table class="table table-striped">
                        <tr>
                          <th><i class="fas fa-user-tie mr-2"></i>Admin Pengelola</th>
                          <td><?php echo $ri->admin_pengelola ?></td>
                        </tr>
          							<tr>
          								<th><i class="far fa-file-alt mr-2"></i>Nomor Pasien</th>
          								<td><?php echo $ri->nomor_pasien ?></td>
          							</tr>
          							<tr>
          								<th><i class="fas fa-user mr-2"></i>Nama Pasien</th>
          								<td><?php echo $ri->nama_pasien ?></td>
          							</tr>
          							<tr>
          								<th><i class="fas fa-calendar mr-2"></i>Tanggal Rawat Inap</th>
          								<td><?php echo date('d F Y', strtotime($ri->tanggal_pendataan)) ?></td>
          							</tr>
          							<tr>
          								<th><i class="fas fa-user-md mr-2"></i>Dokter Pemeriksa</th>
          								<td><?php echo $ri->dokter_pemeriksa ?></td>
          							</tr>
                        <tr>
                          <th><i class="fas fa-medkit mr-2"></i>Kondisi Pasien</th>
                          <td><?php echo $ri->kondisi_pasien ?></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-medkit mr-2"></i>Obat 1</th>
                          <td><?php echo $ri->obat_1 ?></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-medkit mr-2"></i>Obat 2</th>
                          <td><?php echo $ri->obat_2 ?></td>
                        </tr>
          						</table>
          					</div>
	      					</div>
	      					<div class="col-6">
	      						<div class="table-responsive">
              						<table class="table table-striped">
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Obat 3</th>
                              <td><?php echo $ri->obat_3 ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Obat 4</th>
                              <td><?php echo $ri->obat_4 ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Obat 5</th>
                              <td><?php echo $ri->obat_5 ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Obat 6</th>
                              <td><?php echo $ri->obat_6 ?></td>
                            </tr>
              							<tr>
                              <th><i class="fa fa-money-bill-wave mr-2"></i>Biaya Visite</th>
                              <td>Rp. <?php echo number_format($ri->biaya_visite,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fa fa-money-bill-wave mr-2"></i>Biaya Lain-lain</th>
                              <td>Rp. <?php echo number_format($ri->jumlah_biaya,0,',','.') ?></td>
                            </tr>
                            <tr>
                              <th><i class="fa fa-money-bill-wave mr-2"></i>Total Biaya</th>
                              <td>Rp. <?php echo number_format($ri->total_biaya,0,',','.') ?></td>
                            </tr>
              						</table>
              					</div>
	      					    </div>
	      				    </div>
	                </div>
	            	<?php endforeach; ?>

                <?php foreach($tindakan as $ri) : ?>
                  <div class="card-header">
                      <h4>Tindakan Pada Tanggal <?php echo date('d F Y', strtotime($ri->tanggal_tindakan)) ?></h4>
                  </div>
                  <div class="card-body">
                    <div class="row">
                  <div class="col-6">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th><i class="fas fa-user-tie mr-2"></i>Admin Pengelola</th>
                          <td><?php echo $ri->admin_pengelola ?></td>
                        </tr>
                        <tr>
                          <th><i class="far fa-file-alt mr-2"></i>Nomor Pasien</th>
                          <td><?php echo $ri->nomor_pasien ?></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-user mr-2"></i>Nama Pasien</th>
                          <td><?php echo $ri->nama_pasien ?></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-calendar mr-2"></i>Tanggal Tindakan</th>
                          <td><?php echo date('d F Y', strtotime($ri->tanggal_tindakan)) ?></td>
                        </tr>
                        <tr>
                          <th><i class="fas fa-medkit mr-2"></i>Tindakan 1</th>
                          <td><?php echo $ri->tindakan_1 ?></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="table-responsive">
                          <table class="table table-striped">
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Tindakan 2</th>
                              <td><?php echo $ri->tindakan_2 ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Tindakan 3</th>
                              <td><?php echo $ri->tindakan_3 ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Tindakan 4</th>
                              <td><?php echo $ri->tindakan_4 ?></td>
                            </tr>
                            <tr>
                              <th><i class="fas fa-medkit mr-2"></i>Tindakan 5</th>
                              <td><?php echo $ri->tindakan_5 ?></td>
                            </tr>
                            <tr>
                              <th><i class="fa fa-money-bill-wave mr-2"></i>Biaya Tindakan</th>
                              <td>Rp. <?php echo number_format($ri->biaya_tindakan,0,',','.') ?></td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
                <div class="card-footer">
                  <a href="<?php echo base_url('klinik/umum/rawat_inap') ?>" class="btn btn-warning float-right">Kembali</a>
                </div>
	            </div>
	        </div>
	    </div>

	</section>
</div>