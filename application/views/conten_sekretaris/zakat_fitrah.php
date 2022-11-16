<div class="right_col" role="main">
  <div class="flash-fitrah" data-flashdata='<?= $this->session->flashdata('fitrah') ?>'></div>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Zakat Fitrah</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                  <div class="x_title pull-right">
                    <a href="<?php echo base_url('amil/Dashboard') ?>"><i class="fa fa-home"></i>  Dashboard / </a><a href="#">Zakat Fitrah</a>
                  </div>
                   </div>
              </div>  
            
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Zakat Fitrah</h2>
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
                    <!-- <a class="btn btn-app" href="<?php echo base_url('sekretaris/Laporan/cetak_laporan_zakat_fitrah') ?>">
                      <i class="fa fa-print"></i> Cetak
                    </a> -->

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="5%">No</th>
                          <th>Nama</th>
                          <th width="10%">Jumlah Jiwa</th>
                          <th width="7%">Beras</th>
                          <th width="12%">Uang</th>
                          <th>Alamat</th>
                          <th>Tanggal</th>
                          <th>Petugas</th>
                          <th width="15%">Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $x=1;
                        foreach ($fitrah->result() as $row) { ?>
                        <tr>
                          <td><?php echo $x++; ?></td>
                          <td><?php echo $row->nama_pemberi_zakat; ?></td>
                          <td><?php echo $row->besaran_jiwa; ?></td>
                           <td>
                             <?php 
                            $beas = $row->beras;
                            if ($beas == '') {
                              echo "---";
                            }else{
                              echo number_format($beas,2) ;
                              
                            }
                            ?>  
                          </td>
                          <!-- <td><?php echo number_format($row->beras,2); ?> Kg</td> -->
                          <td> 
                            <?php 
                            $dana = $row->uang;
                            if ($dana == '') {
                              echo "---";
                            }else{
                              echo "Rp. " .number_format($dana).",-";
                            }
                            ?>  
                          </td>
                          <td><?php echo $row->alamat; ?></td>
                          <td>
                            <?php 
                              $tanggal = $row->tanggal;  
                              $tanggal1 = date('d M Y', strtotime($tanggal));
                               if ($tanggal == '') {
                                  echo "---";
                                }else{
                                  echo $tanggal1;
                                }?>
                          </td>
                          <td><?php echo $row->petugas; ?></td>
                          <td width="20%">
                            <center>
                            <a class="btn btn-primary" title="Print Kwitansi" target="_blank" href="<?php echo base_url('amil/fitrah/print_kwitansi_fitrah/' . $row->id_zakat_fitrah) ?>"><i class="fa fa-print"></i></button></a>
                            <a href="<?php echo base_url('amil/Fitrah/vedit/'.$row->id_zakat_fitrah) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></a>
                            <a class="btn btn-danger hapus-fitrah" title="Hapus Data Zakat Fitrah" href="<?php echo base_url('amil/Fitrah/hapus_data/'.$row->id_zakat_fitrah) ?>"><i class="fa fa-trash"></i></a>
                          </center>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                    <small>*data di urutkan berdasarkan data terbaru</small>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-bg">
    <div class="modal-content">
      <form method="post" name="zakat_fitrah" action="<?php echo base_url('amil/Fitrah/tambah_data_zakat_fitrah') ?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Zakat Fitrah</h4>
      </div>
      <div class="modal-body">

        <label for="fullname">Nama Pemberi Zakat * :</label>
        <input type="text" class="form-control" name="pemberi_zakat" required />

        <label for="fullname">Besaran Jiwa * :</label>
        <input type="text" class="form-control" name="jiwa" required />

        <label for="fullname">Beras Seberat * :</label>
        <input type="text" class="form-control" name="beras" readonly="yes" onfocus="jumlah_zakat()" />

        <label for="fullname">Uang Sebesar * :</label>
        <input type="text" class="form-control" name="uang" placeholder="Sesuai harga beras saat ini /kg"  />

        <label for="fullname">Alamat * :</label>
        <input type="text" class="form-control" name="alamat"  />

        <label for="fullname">Petugas * :</label>
        <input type="text" class="form-control" readonly="yes" name="petugas" value="<?php echo $name ?>" />

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

