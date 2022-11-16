<div class="right_col" role="main">
  <div class="flash-maal" data-flashdata="<?= $this->session->flashdata('maal') ?>"></div>
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Zakat Maal</h3>
      </div>
      <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                  <div class="x_title pull-right">
                    <a href="<?php echo base_url('amil/Dashboard') ?>"><i class="fa fa-home"></i>  Dashboard / </a><a href="#">Zakat Maal</a>
                  </div>
                    
                  
                </div>
              </div>


     
    </div>

    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Data Zakat Maal, Infaq dan Shodaqoh</h2>
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
            
             <button class="btn btn-success" data-toggle="modal" data-target="#myModal">
              <i class="fa fa-plus"></i> | Tambah Data
            </button>
            <!-- <a class="btn btn-app" href="<?php echo base_url('amil/Laporan/cetak_laporan_zakat_maal') ?>">
                      <i class="fa fa-print"></i> Cetak
                    </a> -->

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th width="5%">No</th>
                  <th>Nama</th>
                  <th>Maal</th>
                  <th width="13%">Partisipasi Sosial</th>
                  <th width="12%">Infaq / Shodaqoh</th>
                  <th width="10%">Fidyah</th>
                  <th width="10%">Alamat</th>
                  <th width="10%">Petugas</th>
                  <th>Aksi</th>
                </tr>
              </thead>


              <tbody>
                <?php
                $x = 1;
                $no = 1;
                foreach ($maal->result() as $row) { ?>
                  <tr>
                    <td><?php echo $x++; ?></td>
                    <td><?php echo $row->nama_pemberi_zakat; ?></td>

                    <td>
                      <center>
                        <?php
                        $kategori = $row->kategori_zakat;

                        if ($kategori == 'maal') {
                          echo "Rp." . number_format($row->nominal_zakat) . ",-";
                        } else {
                          echo "";
                        }
                        ?>
                    </td>
                    </center>
                    <td>
                      <center>
                        <?php
                        $kategori = $row->kategori_zakat;

                        if ($kategori == 'ps') {
                          echo "Rp." . number_format($row->nominal_zakat) . ",-";
                        } else {
                          echo "";
                        }
                        ?>
                    </td>
                    </center>
                    <td>
                      <center>
                        <?php
                        $kategori = $row->kategori_zakat;

                        if ($kategori == 'is') {
                          echo "Rp." . number_format($row->nominal_zakat) . ",-";
                        } else {
                          echo "";
                        }
                        ?>
                    </td>
                    </center>
                    <td>
                      <center>
                        <?php
                        $kategori = $row->kategori_zakat;

                        if ($kategori == 'fidyah') {
                          echo "Rp." . number_format($row->nominal_zakat) . ",-";
                        } else {
                          echo "";
                        }
                        ?>
                    </td>
                    </center>
                    <td>
                      <?php echo $row->alamat; ?>
                    </td>
                    <td>
                      <?php
                      echo $row->petugas1;
                      ?>
                    </td>
                    <td  width="20%">
                      <center>
                      <a class="btn btn-primary" target="_blank" title="Print Kwitansi" href="<?php echo base_url('amil/maal/print_kwitansi/' . $row->id_zakat_maal) ?>"><i class="fa fa-print"></i></button></a>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalEdit<?php echo $no++; ?>"><i class="fa fa-edit" title="Ubah data"></i></button>
                      <a class="btn btn-danger hapus-maal" title="Hapus Data " href="<?php echo base_url('amil/Maal/hapus_data/' . $row->id_zakat_maal) ?>"><i class="fa fa-trash"></i></button></a>
                    </center>
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

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-bg">
    <div class="modal-content">
      <form method="post" name="zakat_fitrah" action="<?php echo base_url('amil/Maal/tambah_data_zakat_maal') ?>">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">Tambah Data Zakat Maal, Infaq dan Shodaqoh</h4>
        </div>
        <div class="modal-body">

          <label for="fullname">Nama Pemberi Zakat * :</label>
          <input type="text" class="form-control" name="pemberi_zakat" required />

          <label for="fullname">Kategori Zakat * :</label>
          <select class="form-control" name="kategori" required="yes">
            <option value="">Pilih Kategori</option>
            <option value="maal">Maal</option>
            <option value="ps">Partisipasi Sosial</option>
            <option value="is">Infaq / Shodaqoh</option>
            <option value="fidyah">Fidyah</option>
          </select>

          <label for="fullname">Nominal Zakat * :</label>
          <input type="text" class="form-control" name="nominal" />

          <label for="fullname">Alamat * :</label>
          <input type="text" class="form-control" name="alamat" />

          <label for="fullname">Petugas * :</label>
          <input type="text" class="form-control" readonly="yes" name="petugas1" value="<?php echo $name ?>" />

          

          <label>Keterangan/Alasan</label>
          <textarea class="form-control" name="ket" id="ket" placeholder="Keterangan / Alasan Pembayaran Fidyah"></textarea>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- <?php
$y = 1;
foreach ($maal->result() as $row) {
  $petugas2 = $row->petugas2;
  $ket  = $row->keterangan;
?> -->
  <div class="modal fade" id="myModalEdit<?php echo $y++ ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-bg">
      <div class="modal-content">
        <form method="post" name="zakat_fitrah" action="<?php echo base_url('amil/Maal/update_data_maal/') . $row->id_zakat_maal ?>">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Zakat Maal, Infaq dan Shodaqoh</h4>
          </div>
          <div class="modal-body">

            <label for="fullname">Nama Pemberi Zakat * :</label>
            <input type="text" class="form-control" name="pemberi_zakat" required value="<?php echo $row->nama_pemberi_zakat ?>" />

            <label for="fullname">Kategori Zakat * :</label>
            <select class="form-control" name="kategori" required="yes">
              <option value="">Pilih Kategori</option>
              <option <?php if ($row->kategori_zakat == "maal") {
                        echo "selected";
                      } ?> value="maal">Maal</option>
              <option <?php if ($row->kategori_zakat == "ps") {
                        echo "selected";
                      } ?> value="ps">Partisipasi Sosial</option>
              <option <?php if ($row->kategori_zakat == "is") {
                        echo "selected";
                      } ?> value="is">Infaq / Shodaqoh</option>
              <option <?php if ($row->kategori_zakat == "fidyah") {
                        echo "selected";
                      } ?> value="fidyah">Fidyah</option>
            </select>

            <label for="fullname">Nominal Zakat * :</label>
            <input type="text" class="form-control" name="nominal" value="<?php echo $row->nominal_zakat ?>" />

            <label for="fullname">Alamat * :</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat ?>" />

            <label for="fullname">Petugas * :</label>
            <input type="text" class="form-control" readonly="yes" name="petugas1" value="<?php echo $name ?>" />

           

            <label>Keterangan/Alasan</label>

            <textarea class="form-control" name="ket" id="ket" placeholder="Keterangan / Alasan Pembayaran Fidyah"><?= $ket; ?></textarea>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php $no++;
} ?>