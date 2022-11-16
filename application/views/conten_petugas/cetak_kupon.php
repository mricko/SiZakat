<?php 
foreach ($kop->result() as $row) {
  $jabatan = $row->jabatan_laporan;
  $nama = $row->nama_pemilik_jabatan;
  $hijriyah = $row->hijriyah;
  $masehi = $row->masehi;
}

foreach ($lokasi->result() as $row) {
  $nama   = $row->nama_lokasi;
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
<title>Cetak Kupon Qurban</title>
    <link rel="shortcut icon" href="../../img/icon.png" type="image/x-icon">
  <style type="text/css">
    body{
      font-family: calibri;
    }
  </style>
<style type="text/css">
<!--
.garis_tepi1 {     border: 4px solid black;
}
-->
</style>
</head>

<body onclick="Print()">
<table width="916" height="1609" align="center">
  <tr>
    <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
       	<td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>

  <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>

    <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>  
</table>
<table width="916" height="1609" align="center">
  <tr>
    <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>

  <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>

    <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>  
</table>

<table width="916" height="1609" align="center">
  <tr>
    <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>

  <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>

    <td><table  class="garis_tepi1">
      <tr>
        <td colspan="4"><div align="center"><strong> PANITIA QURBAN MASJID BESAR BAITURRAHMAH <br> TAHUN <?php echo $M-578; ?> H / <?php echo $M; ?> M </strong> </div></td>

      </tr>
      <tr>
        <td colspan="4"><div align="center">Kp. Baru Pawenang, Muka, Kabupaten Cianjur, Jawa Barat</div></td>
        
      </tr>
      <tr>
        <td colspan="4"><div align="center"></div></td>
      </tr>
      <tr>
        <td height="40" colspan="4"><div align="center"><b>
          <hr thick="thick"/>
          KUPON QURBAN</b> </div></td>
      </tr>
      <tr>
        <td colspan="4" height="60"><div align="center">No</div></td>
        
      </tr>
      
     <tr>
        <td height="40">Catatan:</td> 
       </tr>
       <tr>
        <td style="font-size: 12px;">Untuk Pengambilan Daging Qurban Tidak Dapat Diwakili </td>
       </tr>
      <tr>
        <td height="28">&nbsp;</td>
        <td><div align="center"></div></td>
        <td><br></td>
        <td>Panitia Qurban </td>
      </tr>
      
      <tr>
        <td height="21">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><hr /></td>
      </tr>
    </table></td>  
</table>
</body>
</html>