<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Kelola Biaya Umum</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="<?php echo base_url('klinik/dashboard') ?>">Dashboard</a></div>
        <div class="breadcrumb-item">Kelola Data</div>
        <div class="breadcrumb-item">Kelola Biaya Umum</div>
      </div>
    </div>

    <?php echo $this->session->flashdata('pesan') ?>

    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-3">
            <div class="list-group" id="list-tab" role="tablist">
              <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-biaya-rawatjalan-umum" role="tab">Rawat Jalan Umum</a>
              <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-biaya-rawatinap-umum" role="tab">Rawat Inap Umum</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-biaya-rawatjalan-bpjs" role="tab">Rawat Jalan BPJS</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-biaya-rawatinap-bpjs" role="tab">Rawat Inap BPJS</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-antigen" role="tab">Antigen</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-rapidtes" role="tab">Rapid Tes</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-visite-umum" role="tab">Biaya Visite Umum</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-visite-bpjs" role="tab">Biaya Visite BPJS</a>
              <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-dokter" role="tab">Biaya Dokter</a>
            </div>
          </div>
          <div class="col-9">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="list-biaya-rawatjalan-umum" role="tabpanel" aria-labelledby="list-home-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya Dokter</th>
                        <th>Biaya Klinik</th>
                        <th>Total Biaya Umum</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($biaya_rawatjalan_umum as $bu) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($bu->biaya_dokter,0,',','.') ?></td>
                        <td>Rp. <?php echo number_format($bu->biaya_klinik,0,',','.') ?></td>
                        <td>
                          Rp. <?php echo number_format($bu->total,0,',','.') ?>
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_rawatjalan_umum/').$bu->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade show" id="list-biaya-rawatinap-umum" role="tabpanel" aria-labelledby="list-home-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya Dokter</th>
                        <th>Biaya Klinik</th>
                        <th>Total Biaya Umum</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($biaya_rawatinap_umum as $bu) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($bu->biaya_dokter,0,',','.') ?></td>
                        <td>Rp. <?php echo number_format($bu->biaya_klinik,0,',','.') ?></td>
                        <td>
                          Rp. <?php echo number_format($bu->total,0,',','.') ?>
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_rawatinap_umum/').$bu->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="list-biaya-rawatjalan-bpjs" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya Dokter</th>
                        <th>Biaya Klinik</th>
                        <th>Total Biaya BPJS</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($biaya_rawatjalan_bpjs as $bb) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($bb->biaya_dokter,0,',','.') ?></td>
                        <td>Rp. <?php echo number_format($bb->biaya_klinik,0,',','.') ?></td>
                        <td>
                        Rp. <?php echo number_format($bb->total,0,',','.') ?>
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_rawatjalan_bpjs/').$bb->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="list-biaya-rawatinap-bpjs" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya Dokter</th>
                        <th>Biaya Klinik</th>
                        <th>Total Biaya BPJS</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($biaya_rawatinap_bpjs as $bb) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($bb->biaya_dokter,0,',','.') ?></td>
                        <td>Rp. <?php echo number_format($bb->biaya_klinik,0,',','.') ?></td>
                        <td>
                        Rp. <?php echo number_format($bb->total,0,',','.') ?>
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_rawatinap_bpjs/').$bb->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="list-antigen" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya</th>
                        <th>Biaya Dokter</th>
                        <th>Total Harga Antigen</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($biaya_antigen as $ba) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($ba->biaya,0,',','.') ?></td>
                        <td>Rp. <?php echo number_format($ba->biaya_dokter,0,',','.') ?></td>
                        <td>
                          Rp. <?php echo number_format($ba->biaya + $ba->biaya_dokter,0,',','.') ?>
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_antigen/').$ba->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="list-rapidtes" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya</th>
                        <th>Biaya Dokter</th>
                        <th>Total Harga Rapid Tes</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($biaya_rapidtes as $br) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($br->biaya,0,',','.') ?></td>
                        <td>Rp. <?php echo number_format($br->biaya_dokter,0,',','.') ?></td>
                        <td>
                          Rp. <?php echo number_format($br->biaya + $br->biaya_dokter,0,',','.') ?>
                        </td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_rapidtes/').$br->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="list-visite-umum" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya Visite</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($visite_umum as $br) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($br->biaya_visite,0,',','.') ?></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_visiteumum/').$br->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="list-visite-bpjs" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya Visite</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($visite_bpjs as $br) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($br->biaya_visite,0,',','.') ?></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_visitebpjs/').$br->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
                          </div>
                        </td>
                      </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="tab-pane fade" id="list-dokter" role="tabpanel" aria-labelledby="list-profile-list">
                <div class="table-responsive">
                  <table class="table table-striped" id="sortable-table">
                    <thead>
                      <tr align="center">
                        <th width="5%">No</th>
                        <th>Biaya Uang Duduk</th>
                        <th>Biaya Uang Makan</th>
                        <th width="10%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                        $no=1;
                        foreach ($biaya_dokter as $bd) : ?>
                      <tr align="center">
                        <td><?php echo $no++ ?></td>
                        <td>Rp. <?php echo number_format($bd->uang_duduk,0,',','.') ?></td>
                        <td>Rp. <?php echo number_format($bd->uang_makan,0,',','.') ?></td>
                        <td>
                          <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="<?php echo base_url('klinik/kelola_biaya/edit_biaya_dokter/').$bd->id_biaya ?>" class="btn btn-sm btn-warning">Edit</a>
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
      </div>
    </div>

  </section>
</div>