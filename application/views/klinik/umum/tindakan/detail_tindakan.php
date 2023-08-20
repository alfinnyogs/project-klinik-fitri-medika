<!-- Main Content -->
<div class="main-content">
	<section class="section">
	    <div class="section-header">
		    <h1>Tindakan</h1>
	     	<div class="section-header-breadcrumb">
		        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
		        <div class="breadcrumb-item">Umum</div>
		        <div class="breadcrumb-item">Tindakan</div>
		        <div class="breadcrumb-item">Detail Data Pasien Tindakan</div>
	      	</div>
		    </div>

		<div class="row">
      		<div class="col-12">
      			<div class="card">
                <div class="card-body">
                  <?php foreach($tindakan as $ps) : ?>
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
                            <th><i class="fas fa-building mr-2"></i>Tindakan 1</th>
                            <td><?php echo $ps->tindakan_1 ?></td>
                          </tr>
                          <tr>
                            <th><i class="fas fa-building mr-2"></i>Tindakan 2</th>
                            <td><?php echo $ps->tindakan_2 ?></td>
                          </tr>
                        </table>
                      </div>
                  </div>
                  <div class="col-6">
                    <div class="table-responsive">
                        <table class="table table-striped">
                          <tr>
                            <th><i class="fas fa-calendar mr-2"></i>Tindakan 3</th>
                            <td><?php echo $ps->tindakan_3 ?></td>
                          </tr>
                          <tr>
                            <th><i class="fas fa-user mr-2"></i>Tindakan 4</th>
                            <td><?php echo $ps->tindakan_4 ?></td>
                          </tr>
                          <tr>
                            <th><i class="fas fa-calendar mr-2"></i>Tindakan 5</th>
                            <td><?php echo $ps->tindakan_5 ?></td>
                          </tr>
                          <tr>
                            <th><i class="fas fa-building mr-2"></i>Biaya Tindakan</th>
                            <td>Rp. <?php echo number_format($ps->biaya_tindakan,0,',','.') ?></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <?php endforeach; ?>
                  <a href="<?php echo base_url('klinik/umum/tindakan') ?>" class="btn btn-warning float-right">Kembali</a>
                </div>
	            </div>
	        </div>
	    </div>

	</section>
</div>