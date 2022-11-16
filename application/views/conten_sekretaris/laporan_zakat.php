<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Laporan Zakat</h3>
              </div>

                <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                  <div class="x_title pull-right">
                    <a href="<?php echo base_url('amil/Dashboard') ?>"><i class="fa fa-home"></i>  Dashboard / </a><a href="#">Laporan Zakat </a>
                  </div>
                    
                  
                </div>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Laporan Zakat</h2>
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
                  <a target="_blank" href="<?php echo base_url('amil/Laporan/cetak_laporan_zakat_fitrah') ?>">
                  <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-clipboard"></i></div>
                    <?php 
                    foreach ($jumlah_beras->result() as $row) { ?>
                      
                    <div class="count"><?php echo number_format($row->total_beras,2); ?> Kg</div>
                    <?php } ?>
                    <h3>Zakat Fitrah</h3>
                    <p>Cetak Laporan</p>
                  </div>
                </div>
                </a>
                <a target="_blank" href="<?php echo base_url('amil/Laporan/cetak_laporan_zakat_maal') ?>">
                <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-money"></i></div>
                    <?php 
                    foreach ($jumlah_maal->result() as $row) { ?>
                    <div class="count">Rp. <?php echo number_format($row->total_maal); ?>,-</div>
                    <?php } ?>
                    <h3>Zakat Maal</h3>
                    <p>Cetak Laporan</p>
                  </div>
                </div>
              </a>
              <form method="post" target="_blank" action="<?php echo base_url('amil/Laporan/laporan_penerima_zakat') ?>">
              <div class="col-md-6 col-sm-6 col-xs-6">
                  <select class="form-control" name="rt" required="yes">
                    <option value="">Pilih RT</option>
                    <option value="RT01">RT 01</option>
                    <option value="RT02">RT 02</option>
                    <option value="RT03">RT 03</option>
                    <option value="Lainnya">Lainnya</option>
                    
                  </select>
                </div>
                <div class="animated flipInY col-lg-6 col-md-12 col-sm-6 col-xs-12">
                  <div class="tile-stats">
                    <div class="icon"><i class="fa fa-wheelchair"></i></div>
                    <div class="count">Penerima</div>
                    <button type="submit" name="cek" id="cek" style="border: none;">
                    <h3>Penerima Zakat</h3>
                    </button>
                    <p>Cetak Laporan Penerima Zakat</p>
                  </div>
                </div>
                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>