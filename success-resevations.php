<?php
include "incl/connect.inc.php" ;
include_once("incl/function.php");

$kueri = "select a.*, b.tipe_kamar from tb_pesan a, tb_kamar_tipe b where a.id_tipe = b.id_tipe and a.no_pesan = '$_GET[no_pesan]'";
$qry  = mysqli_query($connect,$kueri);
while($data = mysqli_fetch_array($qry))
{
$id_pesan = $data['id_pesan'];
$no_pesan = $data['no_pesan'];
$tgl_pesan = date("j/n/Y | H:i",$data['tgl_pesan']);
$nama = $data['nama'];
$email=$data['email'];
$phone = $data['phone'];
$kota=$data['kota'];
$alamat = $data['alamat'];
$tgl_cekin = date("j/n/Y",$data['tgl_cekin']);
$tgl_cekout = date("j/n/Y",$data['tgl_cekout']);
$id_tipe=$data['id_tipe'];
$tipe_kamar=$data['tipe_kamar'];
}
?>
<link href="images/styles.css" rel="stylesheet" type="text/css"><td width="555" bgcolor="#CCF2E9" class="style7"><table width="530" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="1"></td>
        </tr>
      </table>
      <table width="555" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="23"><img src="images/gif/corner_1-1.gif" tppabs="images/gif/corner_1.gif" width="23" height="23"></td>
          <td width="490" background="images/gif/corner_1bg.gif" tppabs="images/gif/corner_1bg.gif">&nbsp;</td>
          <td width="25"><img src="images/gif/corner_2-1.gif" tppabs="images/gif/corner_2.gif" width="25" height="23"></td>
        </tr>
        <tr> 
          <td background="images/gif/corner_2bg.gif" tppabs="images/gif/corner_2bg.gif">&nbsp;</td>
          <td><table width="490" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td height="45"><img src="images/gif/text_reservations.gif" tppabs="images/gif/text_reservations.gif" width="207" height="44"></td>
              </tr>
              <tr> 
                <td bgcolor="#006600"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="1"></td>
              </tr>
            </table>
            <table width="490" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><table width="490" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="7"><img src="images/gif/corner1-1.gif" tppabs="images/gif/corner1.gif" width="7" height="20"></td>
                      <td width="218" background="images/gif/corner2-1.gif" tppabs="images/gif/corner2.gif">&nbsp;</td>
                      <td width="37"><img src="images/gif/corner3.gif" tppabs="images/gif/corner3.gif" width="37" height="20"></td>
                      <td width="219" background="images/gif/corner2-1.gif" tppabs="images/gif/corner2.gif">&nbsp;</td>
                      <td width="7"><img src="images/gif/corner4-1.gif" tppabs="images/gif/corner4.gif" width="7" height="20"></td>
                    </tr>
                  </table>
                  <table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td width="7" background="images/gif/corner5-1.gif" tppabs="images/gif/corner5.gif">&nbsp;</td>
                      <td width="476"><table width="476" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td>
							<form onSubmit="return checkrequired(this)" id="form1" name="form1" method="post" action="functions.php">
                                <table width="476" border="0" cellspacing="0" cellpadding="0">
                                  <tr> 
                                    <td colspan="2" class="green"></td>
                                  </tr>                                  
                                  <tr> 
                                    <td colspan="2" class="green"><div align="center">HOTEL SRIWEDARI</div></td>
                                  </tr>
                                  <tr class="green"> 
                                    <td colspan="2" class="green"><div align="center">YOGYAKARTA - INDONESIA<br />
Jl. Laksda Adisucipto No. 6 Yogyakarta INDONESIA 55281 telp: +62-274-488288 fax: +62-274-489682</div></td>
                                  </tr>
                                  <tr> 
                                    <td height="20" colspan="2" class="green"></td>
                                  </tr>
                                  <tr> 
                                    <td colspan="2" class="green"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="1"></td>
                                  </tr>
                                  <tr>
                                    <td height="25" colspan="2" class="blue"><b>Berikut Adalah Isi Data Pemesanan Anda </b></td>
                                  </tr>
                                  <tr> 
                                    <td width="146" height="25" class="blue">Tanggal Pesan</td>
                                    <td width="384" class="blue"><b><?php echo"$tgl_pesan" ?></b></td>
                                  </tr>
								  <tr> 
                                    <td width="146" height="25" class="blue">No Pesan</td>
                                    <td width="384" class="blue"><b><?php echo"$no_pesan" ?></b></td>
                                  </tr>
                                  <tr> 
                                    <td height="25" class="blue">Nama</td>
                                    <td width="384" class="blue"><b><?php echo"$nama" ?></b></td>
                                  </tr>
                                  <tr> 
                                    <td height="25" class="blue">Email</td>
                                    <td width="384" class="blue"><b><?php echo"$email" ?></b></td>
                                  </tr>
								  <tr>
								      <td height="25" class="blue">Phone</td>
                                      <td width="384" class="blue"><b><?php echo"$phone" ?></b></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">City</td>
                                      <td width="384" class="blue"><b><?php echo"$kota" ?></b></td>
								  </tr>
                                  <tr> 
                                    <td height="25" class="blue">Alamat</td>
                                    <td width="384" class="blue"><b><?php echo"$alamat" ?></b></td>
                                  </tr>
								  <tr>
								      <td height="25" class="blue">Tgl Chek In</td>
									  <td width="384" class="blue"><b><?php echo"$tgl_cekin" ?></b></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">Tgl Cek Out</td>
									  <td width="384" class="blue"><b><?php echo"$tgl_cekout" ?></b></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">Tipe Kamar</td>
                                      <td class="blue"><b><?php echo"$tipe_kamar" ?></b></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">No Kamar</td>
									  <td class='blue'>
									  
									  <?php
									   $no=0;
									  $kueri1 = "select a.no_pesan, a.id_kamar, b.nm_kamar from tb_pesan_kamar a, tb_kamar b 
									  				where a.id_kamar = b.id_kamar and a.no_pesan = '$no_pesan' order by id_kamar";
									  $qr1  = mysqli_query($connect,$kueri1);
									  while($data1 = mysqli_fetch_array($qr1))
									  {									 
									  $no_pesan = $data1['no_pesan'];
									  $id_kamar=$data1['id_kamar'];	
									  $nm_kamar=$data1['nm_kamar'];	
									  $no++;
									  
									  echo"$no. <b>$nm_kamar<br /></b>";
									  }
									  ?>	
									  </td>
								  </tr>
								  <tr>
								      <td height="25" class="blue"></td>
									  <td class="blue"></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue"></td>
									  <td class="blue"></td>
								  </tr>
                              </table>
                              </form>
							  </td>
                          </tr>
                        </table></td>
                      <td width="7" background="images/gif/corner6-1.gif" tppabs="images/gif/corner6.gif">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td background="images/gif/corner7-1.gif" tppabs="images/gif/corner7-1.gif"><img src="gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner8-1.gif" tppabs="images/gif/corner8-1.gif"><img src="gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner9-1.gif" tppabs="images/gif/corner9-1.gif"><img src="gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
          <td background="images/gif/corner_2bgA.gif" tppabs="images/gif/corner_2bgA.gif">&nbsp;</td>
        </tr>
        <tr>
          <td><img src="images/gif/corner_3-1.gif" tppabs="images/gif/corner_3-1.gif" width="23" height="23"></td>
          <td background="images/gif/corner_3bg.gif" tppabs="images/gif/corner_3bg.gif">&nbsp;</td>
          <td><img src="images/gif/corner_4-1.gif" tppabs="images/gif/corner_4-1.gif" width="25" height="23"></td>
        </tr>
</table></td>
