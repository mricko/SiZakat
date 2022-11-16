<div class="right_col" role="main">
  <div class="flash-qurban" data-flashdata='<?= $this->session->flashdata('qurban') ?>'></div>
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Qurban</h3>
              </div>

                <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right">
                  <div class="x_title pull-right">
                    <a href="<?php echo base_url('amil/Dashboard') ?>"><i class="fa fa-home"></i>  Dashboard / </a><a href="#">Data Qurban</a>
                  </div>
                    
                  
                </div>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Qurban</h2>
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

                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a class="btn btn-success" data-toggle="modal" data-target="#myModal1">
                      <i class="fa fa-plus"></i> | Tambah Data
                    </a>
                    <a class="btn btn-primary" target="_blank" href="<?php echo base_url('amil/qurban/cetak_kupon') ?>">
                      <i class="fa fa-print"></i> Cetak Kupon
                    </a>

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="5%">No</th>
                          <th>Mudhohi</th>
                          <th >alamat</th>
                          <th >status</th>
                          <th >hewan</th>
                          <th >petugas</th>
                          
                          <th width="15%">Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $x=1;
                        $no = 1;
                        foreach ($fitrah->result() as $row) { ?>
                        <tr>
                          <td><?php echo $x++; ?></td>
                          <td><?php echo $row->mudhohi; ?></td>
                          <td><?php echo $row->alamat; ?></td>
                          <td><?php echo $row->status; ?></td>
                           <td><?php echo $row->hewan; ?></td>
                          <td><?php echo $row->petugas; ?></td>
                         
                          <td width="12%">
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#ModalEdit<?php echo $no++; ?>"><i class="fa fa-edit" title="Ubah data"></i></button>
                            <!-- <a href="<?php echo base_url('amil/qurban/edit_data/'.$row->id_qurban) ?>"><button type="button" class="btn btn-warning"><i class="fa fa-edit"></i></button></a> -->
                            <a class="btn btn-danger hapus-qurban" title="Hapus Data Qurban" href="<?php echo base_url('amil/qurban/hapus_data/'.$row->id_qurban) ?>"><i class="fa fa-trash"></i></a>
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
        

<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-bg">
    <div class="modal-content">
      <form method="post" name="qurban" action="<?php echo base_url('amil/qurban/tambah_qurban') ?>">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Tambah Data Qurban</h4>
      </div>
      <div class="modal-body">

        <label for="fullname">Nama Mudhohi * :</label>
        <input type="text" class="form-control" name="mudhohi_qurban" required />

        <label for="fullname">Alamat * :</label>
        <input type="text" class="form-control" name="alamat" required />

        <label for="fullname">Status * :</label>
        <select class="form-control" name="status" required="yes">
            <option value="">Pilih Status</option>
            <option value="Pribadi">Pribadi</option>
            <option value="Kelompok">Kelompok</option>            
        </select>
        


        <label for="fullname">Hewan * :</label>
        <select class="form-control" name="hewan" required="yes">
            <option value="">Pilih Hewan</option>
            <option value="Kambing">Kambing</option>
            <option value="Sapi">Sapi</option>            
        </select>

        <label for="fullname">Petugas * :</label>
        <input type="text" class="form-control" name="petugas"  value="<?php echo $name ?>" readonly="yes" />


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>

<?php
$y = 1;
foreach ($fitrah->result() as $row) {
  // $petugas2 = $row->petugas2;
  // $ket  = $row->keterangan;
?> 
<div class="modal fade" id="ModalEdit<?php echo $y++ ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-bg">
      <div class="modal-content">
        <form method="post" name="qurban" action="<?php echo base_url('amil/qurban/edit_data/') . $row->id_qurban ?>">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
            </button>
            <h4 class="modal-title" id="myModalLabel">Edit Data Qurban</h4>
          </div>
          <div class="modal-body">

            <label for="fullname">Nama Mudhohi * :</label>
            <input type="text" class="form-control" name="mudhohi_qurban" required value="<?php echo $row->mudhohi ?>" />

            <label for="fullname">Alamat * :</label>
            <input type="text" class="form-control" name="alamat" value="<?php echo $row->alamat ?>" />

            <label for="fullname">Status * :</label>
             <select class="form-control" name="status" required="yes">
              <option value="">Pilih Status</option>
              <option <?php if ($row->status == "pribadi") {
                        echo "selected";
                      } ?> value="Pribadi">Pribadi</option>
              <option <?php if ($row->status == "Kelompok") {
                        echo "selected";
                      } ?> value="Kelompok">Kelompok</option>
              
            </select>

            <label for="fullname">Hewan * :</label>
             <select class="form-control" name="hewan" required="yes">
              <option value="">Pilih Status</option>
              <option <?php if ($row->hewan == "Kambing") {
                        echo "selected";
                      } ?> value="Kambing">Kambing</option>
              <option <?php if ($row->hewan == "Sapi") {
                        echo "selected";
                      } ?> value="Sapi">Sapi</option>
              
            </select>

            <label for="fullname">Petugas * :</label>
            <input type="text" class="form-control" name="petugas"  value="<?php echo $name ?>" readonly="yes" />

            
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