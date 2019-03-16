<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h4">Forms</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#Tambah"><span data-feather="plus-square"></span> Add</button>
            <button type="button" class="btn btn-sm btn-info"><span data-feather="printer"></span> Print</button>
          </div>
          <div class="btn-group" role="group">
            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span data-feather="calendar"></span> <?php $tanggal = date('l, d M Y'); echo $tanggal; ?>
            </button>
          </div>
        </div>
      </div>
      <div id="content-wrapper">

        <div class="container-fluid">
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <span data-feather="layers"></span>
              Data Produk</div>
                <div class="card-body">
                    <table class="table table-sm table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead align="center">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Harga</th>
                          <th>Jumlah</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tfoot align="center">
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Harga</th>
                          <th>Jumlah</th>
                          <th>Aksi</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <?php
                          $no=0;
                          foreach($data->result_array() as $tampilkan):
                            $no++;
                            $id = $tampilkan['id'];
                            $nama = $tampilkan['nama'];
                            $harga = $tampilkan['harga'];
                            $jumlah = $tampilkan['jumlah'];
                        ?>
                        <tr>
                          <td align="center" width="30"><?php echo $no; ?></td>
                          <td>&nbsp;&nbsp;<?php echo $nama; ?></td>
                          <td align="center">Rp. <?php echo $harga; ?></td>
                          <td align="center"><?php echo $jumlah; ?> unit</td>
                          <td align="center" width="50">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#Detail<?php echo $id; ?>"><span data-feather="zoom-in"></span></button>
                                <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#Ubah<?php echo $id; ?>"> <span data-feather="edit"></span></button>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#Hapus<?php echo $id; ?>"><span data-feather="trash-2"></span></button>
                            </div>

                            <!-- Modal Start Detail-->
                            <div class="modal fade" id="Detail<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Detail Produk</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                        <div class="modal-body">
                                        <ul class="list-group">
                                            <li class="list-group-item d-flex left-content-between align-items-center">
                                            <b>Nama - &nbsp;</b><?php echo $nama; ?>
                                            </li>
                                            <li class="list-group-item d-flex left-content-between align-items-center">
                                            <b>Harga - &nbsp;</b><?php echo $harga; ?>
                                            </li>
                                            <li class="list-group-item d-flex left-content-between align-items-center">
                                            <b>Jumlah - &nbsp;</b><?php echo $jumlah; ?>
                                            </li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End Detail -->

                            <!-- Modal Start Ubah-->
                            <div class="modal fade" id="Ubah<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Produk</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?php echo base_url('index.php/forms/ubahproduk'); ?>" method="post">
                                            <div class="modal-body">
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="harga" class="form-control" value="<?php echo $harga; ?>">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah</label>
                                                    <div class="col-sm-10">
                                                    <input type="text" name="jumlah" class="form-control" value="<?php echo $jumlah; ?>">
                                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><span data-feather="x-square"></span> Close</button>
                                                <button type="submit" class="btn btn-sm btn-success"><span data-feather="save"></span> Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End Ubah -->

                            <!-- Modal Start Hapus-->
                            <div class="modal fade" id="Hapus<?php echo $id; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Ubah Produk</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="<?php echo base_url('index.php/forms/hapusproduk'); ?>" method="post">
                                            <div class="modal-body">
                                                Apakah anda yakin ingin menghapus ? <?php echo $nama; ?>
                                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><span data-feather="x-square"></span> Close</button>
                                                <button type="submit" class="btn btn-sm btn-danger"><span data-feather="trash"></span> Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal End Hapus -->
                          </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                </div>
          </div>
        </div>

        <!-- /.container-fluid -->
        </div>
    </div>
    </main>
  </div>
</div>

<!-- Modal Tambah-->
<div class="modal fade" id="Tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('index.php/forms/tambahproduk'); ?>" method="post">
        <div class="modal-body">
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                <input type="text" name="harga" class="form-control" placeholder="Harga">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah</label>
                <div class="col-sm-10">
                <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal"><span data-feather="x-square"></span> Close</button>
            <button type="submit" class="btn btn-sm btn-success"><span data-feather="plus-circle"></span> Add</button>
        </div>
      </form>
    </div>
  </div>
</div>