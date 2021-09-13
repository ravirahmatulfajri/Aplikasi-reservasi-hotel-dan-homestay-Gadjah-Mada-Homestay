<?php
include "incl/connect.inc.php" ;
include_once("incl/function.php");

//print_r($_GET);
$kueri = "select * from tb_kamar_tipe where id_tipe = $_GET[id]";
$qr  = mysqli_query($connect,$kueri);
while($data = mysqli_fetch_array($qr))
{
$id_tipe = $data['id_tipe'];
$tipe_kamar=$data['tipe_kamar'];	
}


$tglp = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y")); 
$no_pesan = date("00jnYHis",$tglp);

$tgl_ci = date("j/n/Y",$_GET['in']);
$tgl_co = date("j/n/Y",$_GET['out']);
$tgl_cci = $_GET['in'];
$tgl_cco = $_GET['out'];
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
                                    <td colspan="2" class="green"><div align="center">Mardliyyah Islamic Centre UGM<</div></td>
                                  </tr>
                                  <tr class="green"> 
                                    <td colspan="2" class="green"><div align="center"><br />
telp: +62-274-488288 fax: +62-274-489682
								    </div></td>
                                  </tr>
                                  <tr> 
                                    <td height="20" colspan="2" class="green"></td>
                                  </tr>
                                  <tr> 
                                    <td colspan="2" class="green"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="1"></td>
                                  </tr>
                                  <tr>
                                    <td height="25" colspan="2" class="blue"><strong>Silahkan isi Data Pribadi Anda </strong></td>
                                  </tr>
                                  <tr> 
                                    <td width="146" height="25" class="blue">Tanggal</td>
                                    <td width="384" class="blue"><b><?php echo"$tanggal" ?></b></td>
                                  </tr>
								  <tr> 
                                    <td width="146" height="25" class="blue">No Pesan</td>
                                    <td width="384" class="blue"><b><?php echo"REC-$no_pesan" ?></b>
									<input name="no_pesan" type="hidden" value="<?php echo"REC-$no_pesan" ?>"></td>
                                  </tr>
                                  <tr> 
                                    <td height="25" class="blue">Nama</td>
                                    <td class="blue"><input name="required_nama" type="text" class="green" size="48"><span class="red"> *</span></td>
                                  </tr>
                                  <tr> 
                                    <td height="25" class="blue">Email</td>
                                    <td class="blue"><input name="required_email" type="text" class="green" size="25"><span class="red"> *</span></td>
                                  </tr>
								  <tr>
								      <td height="25" class="blue">Phone</td>
                                      <td class="blue"><input name="required_phone" type="text" class="green" size="25"><span class="red"> *</span></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">City</td>
                                      <td class="blue"><input name="required_city" type="text" class="green" size="25"><span class="red"> *</span></td>
								  </tr>
                                  <tr> 
                                    <td height="25" class="blue">Alamat</td>
                                    <td class="blue"><textarea name="required_alamat" cols="50" rows="2" class="green"></textarea><span class="red"> *</span></td>
                                  </tr>
								  <tr>
								      <td height="25" class="blue">Tgl Chek In</td>
                                    <td class="blue"><b><?php echo"$tgl_ci" ?></b>
									<input name="tgl_cci" type="hidden" value="<?php echo"$tgl_cci" ?>"></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">Tgl Cek Out</td>
                                    <td class="blue"><b><?php echo"$tgl_co" ?></b>
									<input name="tgl_cco" type="hidden" value="<?php echo"$tgl_cco" ?>"></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">Tipe Kamar</td>
                                      <td class="blue"><b><?php echo"$tipe_kamar" ?></b>
									  <input name="id_tipe" type="hidden" value="<?php echo"$id_tipe" ?>"></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">No Kamar <span class="red"> *</span></td>
									  <td class='blue'>
									  
									  <?php
									  $kueri1 = "select * from tb_kamar where tipe = $id_tipe order by nm_kamar";
									  $qr1  = mysqli_query($connect,$kueri1);
									  while($data1 = mysqli_fetch_array($qr1))
									  {
									  $id_kamar = $data1['id_kamar'];
									  $nm_kamar=$data1['nm_kamar'];	
									  $status=$data1['status'];	
									  					
											  
										if ($status <> 'use')
										{
											$perintahnya = "select * from tb_pesan_kamar where id_kamar = $id_kamar and tgl_checkin = $tgl_cci ";
											$jalankanperintahnya = mysqli_query($connect,$perintahnya);											
											$ada_apa_enggak = mysqli_num_rows($jalankanperintahnya);
											
											if ($ada_apa_enggak >= 1 )
											{
											  echo"<b><input type='checkbox' name='kamar_in_user' checked='checked' disabled='disabled' />Kamar No $nm_kamar</b> (status = <span class='red'>use/booking</span>)<br />";  
											}	
											else
											{
											  echo"<b><input type='checkbox' name='required_id_kamar[]' id='required_id_kamar' value='$id_kamar' />Kamar No $nm_kamar</b> (status = <span class='green'>kosong</span>)<br />";  
											}
										}else
										{
											echo"<b><input type='checkbox' name='kamar_in_user' checked='checked' disabled='disabled' />Kamar No $nm_kamar</b> (status = <span class='red'>use/booking</span>)<br />";
										}
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
                                  <tr valign="top"> 
                                    <td colspan="2" class="green"><p>
                                      <input name="reservation_new" type="submit" class="green" id="kirim" value="Kirim">
                                      <input name="reset" type="reset" class="green" id="Reset" value="Reset"> 
                                    <span class="red"> (*) Harus diisi.</span></p></td>	
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
