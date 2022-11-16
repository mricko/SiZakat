<?php 
foreach ($lokasi->result() as $row) {
	$nama 		= $row->nama_lokasi;
	$alamat 	= $row->alamat_lokasi;
	$kontak 	= $row->kontak_lokasi;
	$foto 		= $row->foto_lokasi;	
}
?>

<div class="right_col" role="main">
  <div class="flash-lokasi" data-flashdata='<?= $this->session->flashdata('lokasi') ?>'></div>
   <?php
      if($this->session->flashdata('gagal')==TRUE){ ?>
            <div class="flash-gagal-gambar" data-flashdata="<?= $this->session->flashdata('gagal') ?>"></div>
      <?php } ?>
      <?php
      if($this->session->flashdata('berhasil')==TRUE){ ?>
            <div class="flash-berhasil-gambar" data-flashdata="<?= $this->session->flashdata('berhasil') ?>"></div>
      <?php } ?>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Master Lokasi</h3>
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
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Setting Lokasi</h2>
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
                      <form method="post" action="<?php echo base_url('sekretaris/Setting/update_master_lokasi') ?>"  enctype="multipart/form-data" accept-charset="utf-8">
                      <label for="fullname">Logo Lokasi * :</label>
                      <input type="file" id="fullname" class="form-control" name="filefoto" />
                      <label for="fullname">Nama Lokasi * :</label>
                      <textarea name="nama_lokasi" class="form-control" required="yes"><?php echo $nama; ?></textarea>
                      <!-- <input type="text" id="fullname" class="form-control" name="nama_lokasi" required value="<?php echo $nama ?>" /> -->
                      <label for="fullname">Alamat Lokasi * :</label>
                      <input type="text" id="fullname" class="form-control" name="alamat_lokasi" required value="<?php echo $alamat ?>" />
                      <label for="fullname">Kontak Lokasi * :</label>
                      <input type="text" id="fullname" class="form-control" name="kontak_lokasi" required value="<?php echo $kontak ?>" />
                      <br>
                      <button type="submit" class="btn btn-warning"><i class="fa fa-upload"></i> | Update</button>
                  </form>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Logo Lokasi</h2>
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
                  	<div class="text-center">
                      <img src="<?php echo base_url('assets/lokasi/'.$foto) ?>">
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>