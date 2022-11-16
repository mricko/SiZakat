<?php 
foreach ($edit_data->result() as $row) {
	$id   = $row->id_zakat_fitrah;
	$nama = $row->nama_pemberi_zakat;
	$jiwa = $row->besaran_jiwa;
	$beras= $row->beras;
	$uang = $row->uang;
	$alamat=$row->alamat;

}
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Data</h3>
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
                    <h2>Edit Data</h2>
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
                    <form method="post" action="<?php echo base_url('/Fitrah/update_data/'.$id) ?>" name="zakat_fitrah">
                  	<label for="fullname">Nama Pemberi Zakat * :</label>
			        <input type="text" class="form-control" name="pemberi_zakat" required value="<?php echo $nama ?>" />

			        <label for="fullname">Besaran Jiwa * :</label>
			        <input type="text" class="form-control" name="jiwa" required value="<?php echo $jiwa ?>" />

			        <label for="fullname">Beras Seberat * :</label>
			        <input type="text" class="form-control" name="beras"  onfocus="jumlah_zakat()" value="<?php echo $beras ?>" />

			        <label for="fullname">Uang Sebesar * :</label>
			        <input type="text" class="form-control" name="uang"  value="<?php echo $uang ?>" />

			        <label for="fullname">Alamat * :</label>
			        <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>" />

              <label for="fullname">Petugas * :</label>
              <input type="text" class="form-control" name="petugas" readonly="yes" value="<?php echo $name ?>" />
			        <br>
			        <button type="button" class="btn btn-danger" onclick="goBack()">Kembali</button>
			        <button type="submit" class="btn btn-warning">Update</button>
			        </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>