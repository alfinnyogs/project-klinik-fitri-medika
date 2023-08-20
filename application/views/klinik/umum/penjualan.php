Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Rawat Jalan Umum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Umum</div>
        <div class="breadcrumb-item">Rawat Jalan</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Data Obat</h4>
          </div>
          <div class="card-body">
            <form action="action/action?act=add-cart-penjualan" method="POST" name="form_penjualan">
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Cari Obat Di Tombol Search" readonly="" style="border-top-right-radius : 0px; border-bottom-right-radius : 0px;">
                        <button class="btn btn-outline-primary" type="button" data-toggle="modal" data-target=".bs-example-modal-lg" style="border-top-left-radius: 0px;border-bottom-left-radius: 0px; background-color: #F4F6F9"><span class="fa fa-search"></span></button>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <input type="text" name="nama_obat" class="form-control" placeholder="Nama Obat" value="" required readonly>
                </div>
                <div class="col-lg-2">
                  <input type="number" min="0" name="qty"  required="required" class="form-control" placeholder="Qty">
                </div>
                <div class="col-lg-1">
                  <button type="submit" class="btn btn-primary" name="add-cart"><span class="fa fa-shopping-cart "></span></button>
                </div>
              </div>
            </form>
          </div>

          <div class="card-header">
            <h4>Detail Penjualan Obat</h4>
          </div>
          

        </div>
      </div>
    </div>

  </section>
</div>



<!-- modal view data obat ------------------------------------------------------------------------------------------- -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="exampleModal">
  <div class="modal-dialog modal-dialog-centered modal-xl modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Data Obat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
                <th>Stok</th>
                <th width="13%">Total Harga</th>
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
                <th>Stok</th>
                <th width="13%">Total Harga</th>
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
                <td><input type="hidden" name="nama_obat" value="<?php echo $ob->nama_obat ?>"><?php echo $ob->nama_obat ?></td>
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
                <td><?php echo $ob->stok ?></td>
                <td>Rp. <?php echo number_format($ob->total_harga,0,',','.') ?></td>
                <td>
                  <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="" method="post" class="btn btn-sm btn-primary"></a>
                    <button class="btn btn-sm btn-primary">Tambah</button>
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
<!-- end view data obat ---------------------------------------------------------------------------------------------