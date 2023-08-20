<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="#">KLINIK FITRI MEDIKA</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="#">KFM</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>
        <li class="nav-item">
          <a href="<?php echo base_url('klinik/dashboard') ?>" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>
        <li class="menu-header">Kelola</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Kelola Data</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/kelola_dokter') ?>">Kelola Dokter</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/kelola_pasien') ?>">Kelola Pasien</a></li>
            <!-- <li><a class="nav-link" href="<?php echo base_url('klinik/kelola_pegawai') ?>">Kelola Pegawai</a></li> -->
            <li><a class="nav-link" href="<?php echo base_url('klinik/kelola_obat') ?>">Kelola Obat</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/kelola_biaya') ?>">Kelola Biaya</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/kelola_admin') ?>">Kelola Admin</a></li>
          </ul>
        </li>
        <li class="menu-header">Pendaftaran</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-notes-medical"></i> <span>Umum</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/umum/rawat_jalan') ?>">Rawat Jalan</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/umum/rawat_inap') ?>">Rawat Inap</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/umum/tindakan') ?>">Tindakan</a></li>
            <!-- <li><a class="nav-link" href="<?php echo base_url('klinik/umum/penjualan') ?>">Penjualan</a></li> -->
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>BPJS</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/bpjs/rawat_jalan') ?>">Rawat Jalan</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/bpjs/rawat_inap') ?>">Rawat Inap</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/bpjs/tindakan') ?>">Tindakan</a></li>
            <li><a class="nav-link" href="https://pcarejkn.bpjs-kesehatan.go.id/eclaim" target="_blank">Web BPJS</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-vials"></i> <span>Lab</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/lab/kelola_rapidtes') ?>">Rapid Test</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/lab/kelola_antigen') ?>">Antigen</a></li>
          </ul>
        </li>
        <li class="menu-header">Laporan</li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-pdf"></i> <span>Laporan Dokter</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_dokter/kwitansi') ?>">Kwitansi</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_dokter/keseluruhan') ?>">Keseluruhan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-pdf"></i> <span>Laporan Umum</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_umum/rawat_jalan') ?>">Rawat Jalan</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_umum/rawat_inap') ?>">Pendaftaran Rawat Inap</a></li>
            <!-- <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_umum/data_rawatinap') ?>">Data Rawat Inap</a></li> -->
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_umum/tindakan') ?>">Tindakan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-pdf"></i> <span>Laporan BPJS</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_bpjs/rawat_jalan') ?>">Rawat Jalan</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_bpjs/rawat_inap') ?>">Pendaftaran Rawat Inap</a></li>
            <!-- <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_bpjs/data_rawatinap') ?>">Data Rawat Inap</a></li> -->
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_bpjs/tindakan') ?>">Tindakan</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link has-dropdown"><i class="fas fa-file-pdf"></i> <span>Laporan Lab</span></a>
          <ul class="dropdown-menu">
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_lab/rapidtest') ?>">Rapid Test</a></li>
            <li><a class="nav-link" href="<?php echo base_url('klinik/laporan_lab/antigen') ?>">Antigen</a></li>
          </ul>
        </li>
      </ul>

  </aside>
</div>