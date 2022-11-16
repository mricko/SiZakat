<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>User Koordinator</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Setting User Koordinator</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-smTambah"><i class="fa fa-plus"></i> | Tambah</button>
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Koor</th>
                          <th>Alamat Koor</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $x=1;
                        $no=1;
                        foreach ($koor->result() as $row) {?>
                          
                        <tr>
                          <td><?php echo  $x++; ?></td>
                          <td><?php echo $row->nama_koor; ?></td>
                          <td><?php echo $row->alamat_koor; ?></td>
                          <td><?php echo $row->username; ?></td>
                          <td><?php echo $row->ket_pass; ?></td>
                          <td>
                            <button type="button" class="btn btn-warning" title="edit user" data-toggle="modal" data-target=".bs-example-modal-smEdit<?php echo $no++; ?>"><i class="fa fa-edit"></i></button>
                            <a href="<?php echo base_url('amil/Setting/hapus_user/'.$row->id_koor) ?>"><button type="button" class="btn btn-danger" title="hapus user"><i class="fa fa-trash"></i></button></a>
                          </td>
                        </tr>

                        <?php } ?>

                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

<div class="modal fade bs-example-modal-smTambah" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <form method="post" action="<?php echo base_url('amil/Setting/tambah_user_koor') ?>">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Tambah Data</h4>
                        </div>
                        <div class="modal-body">
                        <label for="fullname">Nama Koordinator * :</label>
                        <input type="text" id="fullname" class="form-control" name="nama_koor" required />
                        <label for="fullname">Panggilan Koor * :</label>
                        <input type="text" id="fullname" class="form-control" name="panggilan" required />
                        <label for="fullname">Alamat Koor * :</label>
                        <select class="form-control" name="alamat_koor">
                          <option value="">Pilih satu</option>
                          <option value="RT01">RT 01</option>
                          <option value="RT02">RT 02</option>
                          <option value="RT03">RT 03</option>
                          <option value="RT03">Lainnya</option>
                         
                        </select>
                      <!--   <label for="fullname">Username * :</label>
                        <input type="text" id="fullname" class="form-control" name="username" required /> -->

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>

<?php 
$y=1;
foreach ($koor->result() as $row) { ?>
  

<div class="modal fade bs-example-modal-smEdit<?php echo $y++; ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <form method="post" action="#">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Data</h4>
                        </div>
                        <div class="modal-body">
                        <label for="fullname">Nama Koordinator * :</label>
                        <input type="text" id="fullname" class="form-control" name="nama_koor" required value="<?php echo $row->nama_koor ?>" />
                        <label for="fullname">Panggilan Koor * :</label>
                        <input type="text" id="fullname" class="form-control" name="panggilan" required value="<?php echo $row->panggilan_koor ?>" />
                        <label for="fullname">Alamat Koor * :</label>
                        <select class="form-control" name="alamat_koor">
                          <option value="">Pilih satu</option>
                          <option <?php if ($row->alamat_koor == 'RT01') {echo "selected";} ?> value="RT01">RT 01</option>
                          <option <?php if ($row->alamat_koor == 'RT02') {echo "selected";} ?> value="RT02">RT 02</option>
                          <option <?php if ($row->alamat_koor == 'RT03') {echo "selected";} ?> value="RT03">RT 03</option>
                          <option <?php if ($row->alamat_koor == 'RT18') {echo "selected";} ?> value="RT18">RT 18</option>
                          <option <?php if ($row->alamat_koor == 'RT19') {echo "selected";} ?> value="RT19">RT 19</option>
                          <option <?php if ($row->alamat_koor == 'RT20') {echo "selected";} ?> value="RT20">RT 20</option>
                        </select>
                        <label for="fullname">Username * :</label>
                        <input type="text" id="fullname" class="form-control" name="username" required value="<?php echo $row->username ?>" />
                        <label for="fullname">Password * :</label>
                        <input type="text" id="fullname" class="form-control" name="password" required value="<?php echo $row->ket_pass ?>" />

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
<?php $no++;}?>