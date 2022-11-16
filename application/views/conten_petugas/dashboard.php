<div class="right_col" role="main">
          <div class="">
                        <div class="page-title">
              <div class="title_left">
                <h2>Sistem Informasi Qurban dan Zakat</h2>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                  <div class="x_title pull-right">
                    <a href="#"><i class="fa fa-home"></i>  Dashboard </a>
                  </div>
                    
                  
                </div>
              </div>
            </div>
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                    <?php 
                    foreach ($jumlah_beras->result() as $row) { ?>
                      
                    <div class="count"><?php echo number_format($row->total_beras,2); ?> Kg</div>
                    <?php } ?>
                    <h3>Zakat Fitrah</h3>
                    <p>Penerimaan Zakat Fitrah Sampai Saat Ini</p>
                </div>
              </div>

               <div class="animated flipInY col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-sort-amount-desc"></i></div>
                   <?php 
                    foreach ($jumlah_uang->result() as $row) { ?>
                  <div class="count">Rp. <?php echo number_format($row->total_uang); ?></div>
                   <?php } ?>
                  <h3>Zakat Fitrah Uang</h3>
                  <p>Lorem ipsum psdea itgum rixt.</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
                  <?php 
                    foreach ($jumlah_maal->result() as $row) { ?>
                    <div class="count">Rp. <?php echo number_format($row->total_maal); ?>,-</div>
                    <?php } ?>
                    <h3>Zakat Maal</h3>
                    <p>Penerima Zakat Maal Sampai Saat Ini</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa  fa-child"></i></div>
                  <div class="count"><?php echo $fitrah; ?> Orang</div>
                  <h3>Muzaki Fitrah</h3>
                  <p>Jumlah Muzaki Fitrah Sampai saat ini</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-asterisk"></i></div>
                  <div class="count"><?php echo $maal; ?> Orang</div>
                  <h3> Muzaki Maal</h3>
                  <p>Jumlah Muzaki Maal Sampai saat ini</p>
                </div>
              </div>

             <!--  <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
                  <div class="count"><?php echo $user; ?></div>
                  <h3>Jumlah User</h3>
                  <p>Jumlah User yang bisa Login</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-users"></i></div>
                  <div class="count"><?php echo $koor; ?></div>
                  <h3>Jumlah Koordinator</h3>
                  <p>Jumlah Koordinator RW 01</p>
                </div>
              </div> -->

            <!--   <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-wheelchair"></i></div>
                  <div class="count"><?php echo $rt01; ?></div>
                  <h3>Jumlah Penerima RT 01</h3>
                  <p>Jumlah Penerima Zakat RT 01</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-wheelchair"></i></div>
                  <div class="count"><?php echo $rt02; ?></div>
                  <h3>Jumlah Penerima RT 02</h3>
                  <p>Jumlah Penerima Zakat RT 02</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-wheelchair"></i></div>
                  <div class="count"><?php echo $rt03; ?></div>
                  <h3>Jumlah Penerima RT 03</h3>
                  <p>Jumlah Penerima Zakat RT 03</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-wheelchair"></i></div>
                  <div class="count"><?php echo $rt18; ?></div>
                  <h3>Jumlah Penerima RT 18</h3>
                  <p>Jumlah Penerima Zakat RT 18</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-wheelchair"></i></div>
                  <div class="count"><?php echo $rt19; ?></div>
                  <h3>Jumlah Penerima RT 19</h3>
                  <p>Jumlah Penerima Zakat RT 19</p>
                </div>
              </div>

              <div class="animated flipInY col-lg-6 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-wheelchair"></i></div>
                  <div class="count"><?php echo $rt20; ?></div>
                  <h3>Jumlah Penerima RT 20</h3>
                  <p>Jumlah Penerima Zakat RT 20</p>
                </div>
              </div>
            </div>
 -->
</div>
          </div>
        </div>
