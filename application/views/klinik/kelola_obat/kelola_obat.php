<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Obat</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Obat</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Obat</h4>
            <div class="card-header-form">
              <a href="<?php echo base_url('klinik/kelola_obat/tambah_data_obat') ?>" class="btn btn-primary">Tambah Data Obat</a>
            </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th width="15%">Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Dosis Obat</th>
                    <th>Jenis Obat</th>
                    <th>Harga Obat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th width="15%">Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Dosis Obat</th>
                    <th>Jenis Obat</th>
                    <th>Harga Obat</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php 
                    $no=1;
                    foreach ($obat as $ob) : ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $ob->kode_obat ?></td>
                    <td><?php echo $ob->nama_obat ?></td>
                    <td><?php echo $ob->dosis_obat ?></td>
                    <td>
                      <?php if($ob->jenis_obat == "Tablet") { ?>
                        <div class="badge badge-primary"><?php echo $ob->jenis_obat ?></div>
                      <?php }elseif($ob->jenis_obat == "Kapsul") { ?>
                        <div class="badge badge-success"><?php echo $ob->jenis_obat ?></div>
                      <?php }else{ ?>
                        <div class="badge badge-info"><?php echo $ob->jenis_obat ?></div>
                      <?php } ?>
                    </td>
                    <td>Rp. <?php echo number_format($ob->harga_obat,0,',','.') ?></td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="<?php echo base_url('klinik/kelola_obat/edit_data_obat/').$ob->id_obat ?>" class="btn btn-sm btn-warning">Edit</a>
                        <a onclick="return confirm('Yakin Akan Menghapus?')" href="<?php echo base_url('klinik/kelola_obat/hapus_data_obat/').$ob->id_obat ?>" class="btn btn-sm btn-danger">Hapus</a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</div>