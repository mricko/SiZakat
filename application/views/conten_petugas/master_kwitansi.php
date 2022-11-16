<?php 
foreach ($get_data->result() as $row) {
  $nama_organisasi = $row->nama_organisasi;
  $nama_lembaga    = $row->nama_lembaga;
  $logo            = $row->logo_organisasi;
  $pembayaran      = $row->pembayaran;
  $kota_kwitansi   = $row->kota_kwitansi;
}
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Plain Page</h3>
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
            <form method="post" action="<?php echo base_url('admin/Setting/update_master') ?>"  enctype="multipart/form-data" accept-charset="utf-8">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master Kwitansi</h2>
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
                      <?php
                              if($this->session->flashdata('gagal')==TRUE){ ?>
                                    <div class="alert alert-danger alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <?php echo $this->session->flashdata('gagal') ?>
                                    </div>
                              <?php } ?>
                              <?php
                              if($this->session->flashdata('berhasil')==TRUE){ ?>
                                    <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <?php echo $this->session->flashdata('berhasil') ?>
                                    </div>
                              <?php } ?>
                              <?php
                              if($this->session->flashdata('success')==TRUE){ ?>
                                    <div class="alert alert-success alert-dismissable">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                      <?php echo $this->session->flashdata('success') ?>
                                    </div>
                              <?php } ?>
                        <label for="fullname">Logo Organisasi * :</label>
                        <input type="file" class="form-control" name="filefoto" /><br>
                        <img width="25%" src="<?php echo base_url('assets/img/'.$logo) ?>">
                        <br><br>

                        <label for="fullname">Nama Organisasi * :</label>
                        <input type="text" class="form-control" name="nama_organisasi" value="<?php echo $nama_organisasi ?>" required /><br>

                        <label for="fullname">Nama Lembaga * :</label>
                        <input type="text" class="form-control" name="nama_lembaga" value="<?php echo $nama_lembaga ?>" required /><br>

                      
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master Kwitansi</h2>
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
                      

                        <label for="fullname">Pembayaran * :</label>
                        <input type="text" class="form-control" name="pembayaran" value="<?php echo $pembayaran ?>" required /><br>

                        <label for="fullname">Kota Organisasi * :</label>
                        <input type="text" class="form-control" name="kota_organisasi" value="<?php echo $kota_kwitansi ?>" required /><br>

                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>