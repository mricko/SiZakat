<?php 

foreach ($get_data->result() as $row) {
    $koor          = $row->nama_koor;



}

foreach ($ttd->result() as $row) {
  $nama_ketua = $row->nama_pemilik_jabatan;
  $jabatan_ketua = $row->jabatan_laporan;
  $masehi = $row->masehi;
  $hijriyah = $row->hijriyah;
  $jabatan = $row->jabatan;
  $sekretaris = $row->nama_sekretaris;
}

foreach ($lokasi->result() as $row) {
  $nama   = $row->nama_lokasi;
  $alamat = $row->alamat_lokasi;
  $kontak = $row->kontak_lokasi;
  $foto   = $row->foto_lokasi;
}

$M = date('Y');

if (isset($_POST['cek'])) {
  $rt=$_POST['rt'];
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Laporan Penerima Zakat Fitrah</title>
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
<body>
<table width="912" >
  <tr>
    <td width="263"><div align="center"><img src="<?php echo base_url('') ?>assets/lokasi/lok_1584763265.png" width="171" height="149" /></div></td>
    <td width="622"> <span class="style4">PANITIA PENERIMA DAN PENYALUR ZAKAT FITRAH, ZAKAT MAAL, INFAQ DAN SHODAQOH SERTA PARTISIPASI SOSIAL</span>    
	<br />
	<span class="style5"><strong><?php echo strtoupper($nama); ?></strong></span>   
	<br />
	<span class="style4">TAHUN <?php echo $M-579; ?> H / <?php echo $M; ?> M</span> 
  <div align="left">Sekretariat : <?php echo $alamat; ?> <br> Telp : <?= $kontak ?>
</td>
  </tr>
  <tr>
	  <!-- <td colspan="2">
		<div align="center">Sekretariat : <?php echo $alamat; ?> Telp : <?= $kontak ?>		
      </div></td> -->
  </tr>
</table>
<table width="912">
  <tr>
    <td width="902"><div align="center">DAFTAR PENERIMA ZAKAT FITRAH/ZAKAT MAAL</div></td>
  </tr>
  <tr>
    <td><div align="center">TAHUN : <?php echo $hijriyah; ?> H / <?php echo $masehi; ?> M</div></td>
  </tr>
  <tr>
    <td><strong>Wilayah : <?= $rt ?></strong></td>
  </tr>
  <tr>
    <td><strong>Koordinator : 
       <?php 
       if ($koor == '') {
       echo "--";
       }else{
       echo ($koor) ;                              
       }?> 
     </strong></td>
  </tr>
</table>
<table width="912" border="1" style="border-collapse: collapse;">
  <tr>
    <td width="34" rowspan="2"><div align="center"><strong>NO</strong></div></td>
    <td width="268" rowspan="2"><div align="center"><strong>Nama</strong></div></td>
    <td colspan="3"><div align="center"><strong>Kategori</strong></div></td>
    <td width="138" rowspan="2"><div align="center"><strong>Keterangan</strong></div></td>
  </tr>
  <tr>
    <td width="145"><div align="center"><strong>Berat</strong></div></td>
    <td width="142"><div align="center"><strong>Ringan</strong></div></td>
    <td width="145"><div align="center"><strong>Sabilillah</strong></div></td>
  </tr>
  <?php 
    $x=1;
    foreach ($get_data->result() as $row) {
      $nama_penerima = $row->nama_penerima;
      $penerima  = $row->ket_penerima;
      $nama_ket      = $row->nama_ket;
      /*$koor          = $row->nama_koor;*/
      $alamat        = $row->alamat_koor;
    ?>
  <tr>
    <td align="center"><?php echo $x++; ?></td>
    <td><?php echo $nama_penerima; ?></td>
    <td>
      <?php if ($penerima == 1) {
        echo "<center>&#9989;</center>";
      }else{
        echo "";
      }?>
    </td>
    <td>
      <?php if ($penerima == 2) {
        echo "<center>&#9989;</center>";
      }else{
        echo "";
      }?>
    </td>
    <td>
      <?php if ($penerima == 3) {
        echo "<center>&#9989;</center>";
      }else{
        echo "";
      }?>
    </td>
    <td>&nbsp;</td>
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2"><div align="center"><strong>TOTAL</strong></div></td>
    <td align="center"><?php echo $berat; ?></td>
    <td align="center"><?php echo $ringan; ?></td>
    <td align="center"><?php echo $sabilillah; ?></td>
    <td>&nbsp;</td>
  </tr>
</table>

<table width="200">
  <tr>
    <td width="77">Berat</td>
    <td width="14"><div align="center">:</div></td>
    <td width="87"><?php echo $berat; ?></td>
  </tr>
  <tr>
    <td>Ringan</td>
    <td><div align="center">:</div></td>
    <td><?php echo $ringan; ?></td>
  </tr>
  <tr>
    <td>Sabilillah</td>
    <td><div align="center">:</div></td>
    <td><?php echo $sabilillah; ?></td>
  </tr>
  <tr>
    <td colspan="3"><strong><hr></strong></td>
    
  </tr>
  <tr>
    <td><strong>Total</strong></td>
    <td><div align="center">:</div></td>
    <td><?php echo $berat + $ringan + $sabilillah; ?></td>
  </tr>
</table>
<table width="338"  align="right">
      <tr>
        <td><div align="center">Cianjur, <?php echo date('d F Y'); ?></div></td>
      </tr>
      <tr>
        <td><div align="center">Ketua Panitia </div></td>
      </tr>
      <tr>
        <td height="72"><div align="center"></div> <div align="center"></div></td>
      </tr>

      <tr>
        <td><div align="center"><strong><?php echo $nama_ketua ?></strong></div></td>
      </tr>
</table>


</body>
</html>
