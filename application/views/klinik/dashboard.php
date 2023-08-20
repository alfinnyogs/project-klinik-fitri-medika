<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Pasien</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_pasien ?> Orang
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-notes-medical"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Rawat Inap Umum</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_rawat_inap_umum ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-notes-medical"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Rawat Inap BPJS</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_rawat_inap_bpjs ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-notes-medical"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Rawat Jalan Umum</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_rawat_jalan_umum ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-notes-medical"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Rawat Jalan BPJS</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_rawat_jalan_bpjs ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Rapid Test</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_rapid_test ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-secondary">
                  <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Antigen</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_antigen ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-notes-medical"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Tindakan Umum</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_tindakan_umum ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-notes-medical"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Tindakan BPJS</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_tindakan_bpjs ?> Pendaftar
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-user-md"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Dokter</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_dokter ?> Orang
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-capsules"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Obat Tersedia</h4>
                  </div>
                  <div class="card-body">
                    <?php echo $total_obat ?> Obat
                  </div>
                </div>
              </div>
            </div>
          </div>


  </section>
</div>