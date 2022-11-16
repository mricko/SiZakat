<?php 
foreach ($hadir->result() as $row) {
	// $nama_lengkap 		= $row->nama_lengkap;
	// $nama_user			= $row->nama_user;
	// $username 			= $row->username;
	$oldpass 			= $row->password;
}
?>
<div class="right_col" role="main">
  <div class="flash-sandi" data-flashdata='<?= $this->session->flashdata('sandi') ?>'></div>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Setting User</h3>
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
                    <h2>Setting User</h2>
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
                  	<form method="post" action="<?php echo base_url('petugas/Setting/update_sandi') ?>">
                      <!-- <label for="fullname">Nama Lengkap * :</label>
                      <input type="text" id="fullname" class="form-control" name="nama_legkap" required readonly="yes" value="<?= $lengkap ?>" />
                      <label for="fullname">Panggilan * :</label>
                      <input type="text" id="fullname" class="form-control" name="panggilan" required  readonly="yes" value="<?= $name ?>" />
                      <label for="fullname">Username * :</label>
                      <input type="text" id="fullname" class="form-control" name="username" required value="<?= $username ?>" /> -->
                      <label for="fullname">Password Lama * :</label>
                      <input type="password" id="fullname" class="form-control" name="oldpass" required value="<?= $oldpass ?>" />
                      <label for="fullname">Password Baru * :</label>
                      <input type="password" id="newpass" class="form-control" name="newpass" />

                      <label for="fullname">Ulangi Password * :</label>
                      <input type="password" id="fullname" class="form-control" name="repeat" required />
                      <br>
                      <button type="submit" class="btn btn-warning fa fa-upload"> | Update</button>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

