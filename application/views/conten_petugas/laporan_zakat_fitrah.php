<?php 
foreach ($kop->result() as $row) {
  $jabatan = $row->jabatan_laporan;
  $nama = $row->nama_pemilik_jabatan;
  $hijriyah = $row->hijriyah;
  $masehi = $row->masehi;
}

foreach ($lokasi->result() as $row) {
  $nama_lok   = $row->nama_lokasi;
  $alamat = $row->alamat_lokasi;
  $kontak = $row->kontak_lokasi;
  $foto   = $row->foto_lokasi;
}

$M = date('Y');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Zakat Fitrah</title>
<style type="text/css">
<!--
.style4 {
  font-size: 16px;
  font-weight: bold;
}
.style5 {
  font-size: 24px;
  font-weight: bold;
}
-->
</style>
</head>

<body onclick="Print()">
<br /><br />
<center>

<table width="905" height="auto">
  <tr>
    <td width="263"><div align="center"><img src="<?php echo base_url('') ?>assets/lokasi/lok_1584763265.png" width="171" height="149" /></div></td>
    <td width="622"> <span class="style4"><strong>DATA PEMBERI ZAKAT FITRAH</strong> </span>    
  <br />
  <span class="style5"><strong><?php echo strtoupper($nama_lok); ?></strong></span>    
  <br />
  <span class="style4">TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M</span><br>
  <span class="style1">Sekretariat : <?php echo $alamat; ?> Telp : <?= $kontak ?>    
      </span> </td>
  </tr>
 <!--  <tr>
    <td colspan="2">
    <div align="center">Sekretariat : <?php echo $alamat; ?> Telp : <?= $kontak ?>    
      </div></td>
  </tr> -->
</table>
<br />

<table width="905" height="129" border="1" class="laporan" style="border-collapse: collapse;">
  <tr>
    <th width="27" rowspan="2"><div align="center">NO</div></th>
    <th width="130" rowspan="2"><div align="center">NAMA</div></th>
    <th width="74" rowspan="2"><div align="center">JUMLAH JIWA  </div></th>
    <th height="23" colspan="2"><div align="center">ZAKAT</div></th>
    <th width="110" rowspan="2"><div align="center">ALAMAT</div></th>
    <th width="113" rowspan="2"><div align="center">PETUGAS</div></th>
    <th width="109" rowspan="2"><div align="center">TANGGAL</div></th>
  </tr>
  <tr>
    <th width="118" height="23"><div align="center">BERAS</div></th>
    <th width="119"><div align="center">UANG</div></th>
  </tr>
  <tr>
  <?php 
  $x=1;
foreach ($cetak_laporan_fitrah->result() as $row) { ?>
    <td height="23" align="center"><?php echo $x++; ?></td>
    <td><?php echo $row->nama_pemberi_zakat; ?></td>
    <td align="center"><?php echo $row->besaran_jiwa; ?></td>
     <td>
       <?php 
      $beas = $row->beras;
      if ($beas == '') {
      echo "---";
      }else{
      echo number_format($beas,2)." Kg" ;
                          
      }
     ?>  
     </td>
   <!--  <td align="center"><?php echo number_format($row->beras,2); ?></td> -->
    <td> &nbsp;
      <?php 
      $dana = $row->uang;
      if ($dana == '') {
        echo "---";
      }else{
        echo "Rp. " .number_format($dana).",-";
      }
      ?>  
    </td>
    <td>&nbsp;<?php echo $row->alamat; ?></td>
    <td>&nbsp; <?php echo $row->petugas; ?> </td>
    <td align="center">
      <?php 
      $tanggal = $row->tanggal;  
      $tanggal1 = date('d M Y', strtotime($tanggal));
       if ($tanggal == '') {
          echo "--";
        }else{
          echo $tanggal1;
        }?>
    </td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="3" style="text-align: center"><strong> Total </strong></td>
    <?php 
    foreach ($total->result() as $row) { ?>
      
    <td style="text-align: center;"><strong><?php 
    $jadi = $row->total_beras;
    echo number_format($jadi,2). " Kg"?></strong></td>
    <td style="text-align: center;"><strong>Rp. <?php echo number_format($row->total_uang) ?>,-</strong></td>
    <td colspan="3"><small>*Cek Kembali Jika Ada Kekeliruan Data</small></td>
    <?php } ?>
  </tr>
</table>

<br><br>
    <table width="338"  align="right">
      <tr>
        <td><div align="center">Cianjur, <?php echo date('d F Y'); ?></div></td>
      </tr>
      <tr>
        <td><div align="center"><?php echo $jabatan; ?> </div></td>
      </tr>
      <tr>
        <td height="72"><div align="center"></div>      <div align="center"></div></td>
      </tr>

      <tr>
        <td><div align="center"><strong><?php echo $nama ?></strong></div></td>
      </tr>
    </table>
    </center>
</body>
</html>

<script>
function Print() { 
  window.print();
}
</script>
