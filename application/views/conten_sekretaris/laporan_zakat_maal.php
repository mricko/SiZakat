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
<title>Laporan Zakat Maal</title>
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
    <td width="622"> <span class="style4"><strong>DATA PEMBERI ZAKAT MAAL, PARTISIPASI SOSIAL, INFAQ / SHODAQOH, <br>DAN FIDYAH</strong> </span>    
  <br />
  <span class="style5"><strong><?php echo strtoupper($nama_lok); ?></strong></span>    
  <br />
  <span class="style4">TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M</span> <br>
  <span class="style1">Sekretariat : <?php echo $alamat; ?> Telp : <?= $kontak ?>    
      </span>
</td>
  </tr>
  <tr>
    <td colspan="2">
   
  </tr>
</table>
<br />

<table width="935" height="129" border="1" class="laporan" style="border-collapse: collapse;">
  <tr>
    <th width="27" rowspan="2"><div align="center">NO</div></th>
    <th width="130" rowspan="2"><div align="center">NAMA</div></th>
    <th height="23" colspan="4"><div align="center">ZAKAT</div></th>
    <th width="110" rowspan="2"><div align="center">ALAMAT</div></th>
    <th width="109" rowspan="2"><div align="center">TANGGAL</div></th>
    <th width="113" rowspan="2"><div align="center">PETUGAS</div></th>
   <!--  <th width="113" rowspan="2"><div align="center">PETUGAS2</div></th> -->
  </tr>
  <tr>
    <th width="118" height="23"><div align="center">Maal</div></th>
    <th width="119"><div align="center">Partisipasi Sosial</div></th>
    <th width="119"><div align="center">Infaq / Shodaqoh</div></th>
    <th width="119"><div align="center">Fidyah</div></th>
  </tr>
  <tr>
  <?php 
  $x=1;
foreach ($cetak_laporan_maal->result() as $row) { 
  ?>
    <td height="23" align="center"><?php echo $x++; ?></td>
    <td><?php echo $row->nama_pemberi_zakat; ?></td>
    <td align="center"><?php 
    $kategori = $row->kategori_zakat;
    if ($kategori == 'maal') {
      echo "Rp." .number_format($row->nominal_zakat). ",-";
    }else{
      echo "";
    }?></td>
    <td align="center"><?php 
    $kategori = $row->kategori_zakat;
    if ($kategori == 'ps') {
      echo "Rp." .number_format($row->nominal_zakat). ",-";
    }else{
      echo "";
    }?></td>
    <td align="center"><?php 
    $kategori = $row->kategori_zakat;
    if ($kategori == 'is') {
      echo "Rp." .number_format($row->nominal_zakat). ",-";
    }else{
      echo "";
    }?></td>
    <td align="center"><?php 
    $kategori = $row->kategori_zakat;
    if ($kategori == 'fidyah') {
      echo "Rp." .number_format($row->nominal_zakat). ",-";
    }else{
      echo "";
    }?></td>
    <td>&nbsp;<?php echo $row->alamat; ?></td>
    <td align="center">
      <?php 
      $tanggal = $row->tanggal;  
      $tanggal1 = date('d M Y', strtotime($tanggal));
       if ($tanggal == '') {
          echo "---";
        }else{
          echo $tanggal1;
        }?>
    </td>
    <td>&nbsp; <?php echo $row->petugas1; ?> </td>
    <!-- <td>&nbsp; <?php echo $row->nama_koor; ?> </td> -->
  </tr>
  <?php } ?>
  <tr>
    <td colspan="2" style="text-align: center"><strong> Total </strong></td>
    <?php 
    foreach ($total_maal->result() as $row) { ?>
    <td style="text-align: center;"><strong>Rp. <?php echo number_format($row->total) ?>,-</strong></td>
    <?php } ?>
    <?php 
    foreach ($total_ps->result() as $row) { ?>
    <td style="text-align: center;"><strong>Rp. <?php echo number_format($row->total) ?>,-</strong></td>
    <?php } ?>
    <?php 
    foreach ($total_is->result() as $row) { ?>
    <td style="text-align: center;"><strong>Rp. <?php echo number_format($row->total) ?>,-</strong></td>
    <?php } ?>
    <?php 
    foreach ($total_fidyah->result() as $row) { ?>
    <td style="text-align: center;"><strong>Rp. <?php echo number_format($row->total) ?>,-</strong></td>
    <?php } ?>
    <td colspan="4"><small><strong>*Cek Kembali Jika Ada Kekeliruan Data</strong></small></td>
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
