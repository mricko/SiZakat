<div class="right_col" role="main">
  <div class="flash-kop" data-flashdata='<?= $this->session->flashdata('kop') ?>'></div>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Setting Kop Laporan</h3>
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
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kop Laporan</h2>
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
                    <form method="post" action="<?php echo base_url('sekretaris/setting/edit') ?>">
                    <?php 
                    foreach ($kop->result() as $row) { ?>
                      
                      <label for="email">Jabatan Laporan :</label>
                      <input type="text" class="form-control" name="header" value="<?php echo $row->jabatan_laporan; ?>" />
                      <label for="email">Pemilik Jabatan :</label>
                      <input type="text" class="form-control" name="bidang" value="<?php echo $row->nama_pemilik_jabatan; ?>" /><br>
                      <!-- <label for="email">Tahun Hijriyah :</label>
                      <input type="text" class="form-control" name="hijriyah" value="<?php echo $row->hijriyah; ?>" /><br>
                      <label for="email">Tahun Masehi :</label>
                      <input type="text" class="form-control" name="masehi" value="<?php echo $row->masehi; ?>" /><br> -->
                      <label for="email">Jabatan Sekretaris :</label>
                      <input type="text" class="form-control" name="jabatan" value="<?php echo $row->jabatan; ?>" /><br>
                      <label for="email">Nama Sekretaris :</label>
                      <input type="text" class="form-control" name="sekretaris" value="<?php echo $row->nama_sekretaris; ?>" /><br>
                    <?php } ?>
                      <br>
                      <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>