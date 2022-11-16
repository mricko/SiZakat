<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Data User</h3>
              </div>

             <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                  <div class="x_title pull-right">
                    <a href="<?php echo base_url('amil/Dashboard') ?>"><i class="fa fa-home"></i>  Dashboard / </a><a href="#">Data User</a>
                  </div>
                    
                  
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Tambah User</h2>
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
                  	<form method="post" action="<?php echo base_url('amil/Setting/tambah_user') ?>">
                      <label for="fullname">Nama Lengkap User * :</label>
                      <input type="text" id="fullname" class="form-control" name="nama_user" required />
                      <label for="fullname">Nama Panggilan User * :</label>
                      <input type="text" id="fullname" class="form-control" name="panggilan" required />
                      <label for="fullname">Username * :</label>
                      <input type="text" id="fullname" class="form-control" name="username" required />
                      <label for="fullname">Jabatan * :</label>
                      <select name="jabatan" class="form-control" required="yes">
                      	<option value="">Pilih Jabatan</option>
                      	<option value="2">Admin</option>                      	
                        <option value="4">Petugas</option>
                      </select><br>
                      <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> | Simpan</button>
                      <button type="reset" class="btn btn-warning"><i class="fa fa-refresh"></i> | Reset</button>
                  </form>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data User </h2>
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
                      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama User</th>
                          <th>Username</th>
                          <th>Password</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>


                      <tbody>
                      	<?php
                      	$x=1; 
                      	$no=1;
                      	foreach ($user->result() as $row) { ?>
                      		
                        <tr>
                          <td><?php echo  $x++; ?></td>
                          <td><?php echo $row->nama_lengkap; ?></td>
                          <td><?php echo $row->username; ?></td>
                          <td><?php echo $row->ket_pass; ?></td>
                          <td><button type="button" class="btn btn-warning" title="Edit Data" data-toggle="modal" data-target=".bs-example-modal-sm<?php echo $no++; ?>"><i class="fa fa-edit"></i></button>
                          <a class="btn btn-danger hapus-maal" title="Hapus Data " href="<?php echo base_url('amil/setting/hapus_petugas/' . $row->id_user) ?>"><i class="fa fa-trash"></i></button></a>
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



<?php 
$y=1;
foreach ($user->result() as $row) {?>
	

<div class="modal fade bs-example-modal-sm<?php echo $y++ ?>" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                      	<form method="post" action="<?php echo base_url('amil/Setting/update_user/'.$row->id_user) ?>">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Edit Data <?php echo  $row->nama_lengkap; ?></h4>
                        </div>
                        <div class="modal-body">
                          <label for="fullname">Nama Lengkap User * :</label>
                      	  <input type="text" id="fullname" class="form-control" name="nama_user"  value="<?php echo $row->nama_lengkap ?>" />
                      	  <label for="fullname">Username * :</label>
                      	  <input type="text" id="fullname" class="form-control" name="username" value="<?php echo $row->username ?>" />
                      	  <label for="fullname">Password Baru * :</label>
                      	  <input type="text" id="fullname" class="form-control" name="password" required="yes" value="<?php echo $row->ket_pass ?>" />
                      	  <label for="fullname">Jabatan * :</label>
                      	  <select class="form-control" name="jabatan">
                      	  	<option value=""></option>
                      	  	<option <?php if ($row->level == '2') {echo "selected";} ?> value="2" >Admin</option>
                      	  	<option <?php if ($row->level == '4') {echo "selected";} ?> value="4" >Petugas</option>
                      	  </select>
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