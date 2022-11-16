<?php 
foreach ($edit_data->result() as $row) {
  $id   = $row->id_zakat_maal;
  $nama = $row->nama_pemberi_zakat;
  $kategori = $row->kategori_zakat;
  $nominal = $row->nominal_zakat;
  $alamat = $row->alamat;
  $petugas  =$row->petugas;
}
?>

<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Data Zakat Maal, Infaq dan Shodaqoh</h3>
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
                    <h2>Edit Data Zakat Maal, Infaq dan Shodaqoh</h2>
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
                    <form method="post" action="<?php echo base_url('admin/Maal/update_data_maal/'.$id) ?>">
                      
                    <label for="fullname">Nama Pemberi Zakat * :</label>
                    <input type="text" class="form-control" name="pemberi_zakat" required value="<?php echo $nama ?>" />

                    <label for="fullname">Kategori Zakat * :</label>
                    <select name="kategori" class="form-control">
                        <option <?php if ($kategori == "") {
                          echo "";} ?>></option>
                        <option <?php if ($kategori == "maal") {
                          echo "selected";} ?> value="maal">Maal</option>
                        <option <?php if ($kategori == "ps") {
                          echo "selected";} ?> value="ps">Partisipasi Sosial</option>
                        <option <?php if ($kategori == "is") {
                          echo "selected";} ?> value="is">Infaq / Shodaqoh</option>
                        <option <?php if ($kategori == "fidyah") {
                          echo "selected";} ?> value="fidyah">Fidyah</option>
                    </select>

                    <label for="fullname">Nominal Zakat * :</label>
                    <input type="text" class="form-control" name="nominal" value="<?php echo $nominal ?>" />

                    <label for="fullname">Alamat * :</label>
                    <input type="text" class="form-control" name="alamat" value="<?php echo $alamat ?>" />

                    <label for="fullname">Petugas * :</label>
                    <select class="form-control" name="petugas">
                      <option>Pilih Petugas</option>
                      <?php
                      foreach ($petugas_zakat->result() as $row) { ?>
                      
                        <option value="<?php echo $row->nama_koor ?>"><?php echo $row->nama_koor; ?></option>
                      
                      <?php } ?>
                      
                    </select>

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