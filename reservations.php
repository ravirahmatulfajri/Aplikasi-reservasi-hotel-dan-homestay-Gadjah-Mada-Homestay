<html>
<head>

<?php
include "incl/connect.inc.php" ;
include_once("incl/function.php");

$kueri = "select * from tb_kamar_tipe where id_tipe = $_GET[id]";
$qr  = mysqli_query($connect,$kueri);
while($data = mysqli_fetch_array($qr))
{
$id_tipe = $data['id_tipe'];
$tipe_kamar=$data['tipe_kamar'];	
}

$tglp = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y")); 
$no_pesan = date("00jnYHis",$tglp);

$bulan = array(1=>'Januari',2=>'Febuari',3=>'Maret',4=>'April',5=>'Mei',6=>'Juni',7=>'Juli',8=>'Agustus',9=>'September',10=>'Oktober',11=>'November',12=>'Desember');
$checkin = mktime(0,0,0,date("m") ,date("d"),date("Y")); 
$indate = date("j", $checkin);
$inmonth = date("n", $checkin);
$inyear = date("Y", $checkin);
$checkout = mktime(0,0,0,date("m") ,date("d")+3,date("Y"));
$outdate = date("j", $checkout);
$outmonth = date("n", $checkout);
$outyear = date("Y", $checkout);

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
                                    <td colspan="2" class="green"><div align="center">Mardliyyah Islamic Centre UGM</div></td>
                                  </tr>
                                  <tr class="green"> 
                                    <td colspan="2" class="green"><div align="center">
                                      <p>YOGYAKARTA - INDONESIA<br>
                                       </p>
                                      </div></td>
                                  </tr>
                                  <tr> 
                                    <td height="20" colspan="2" class="green"></td>
                                  </tr>
                                  <tr> 
                                    <td colspan="2" class="green"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="1"></td>
                                  </tr>
                                  <tr>
                                    <td height="25" colspan="2" class="blue"><strong>Cek Status Kamar </strong></td>
                                  </tr>
								  <tr>
								      <td height="25" class="blue">Tipe Kamar</td>
                                      <td class="blue"><b><?php echo"$tipe_kamar" ?></b>
									  <input name="id_tipe" type="hidden" value="<?php echo"$id_tipe" ?>"></td>
								  </tr>
								  <tr>
								  <td width="146" height="25" class="blue">Tgl Chek In</td>
                                    <td width="384" class="blue">		
									
									   <select name="required_tgl_cekin" size="1" class="green" >
                                        <?php
										for($i=1; $i<= 31; $i++){
										if ($i == $indate){ $selectdate ="selected";} else {$selectdate="";}
										echo"<option value=\"$i\" $selectdate>$i</option>"."\n";
										}
										?>
                                      </select>
									  									  
                                      <select name="required_bln_cekin" size="1" id="bln" class="green" >
                                        <?php
										for ($i=1; $i <= 12; $i++) {
										if ($i == $inmonth){ $selectmonth ="selected";} else {$selectmonth="";}
										echo"<option value=\"$i\" $selectmonth>$bulan[$i]</option>"."\n";
										}
										?>
                                      </select>									  
                                      <select name="required_thn_cekin" size="1" id="thn" class="green" >
                                        <?php
										for($i=$inyear; $i <= $inyear + 1; $i++){
										if ($i == $inyear){ $selectyear ="selected";} else {$selectyear="";}
										echo"<option value=\"$i\" $selectyear>$i</option>"."\n";
										}
										?>
                                      </select><span class="red"> *</span></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue">Tgl Cek Out</td>
                                    <td class="blue">
                                      <select name="required_tgl_cekout" size="1" id="tgl_cekout" class="green">
                                        <?php
										for($i=1; $i<= 31; $i++){
										if ($i == $outdate){ $selectdate ="selected";} else {$selectdate="";}
										echo"<option value=\"$i\" $selectdate>$i</option>"."\n";
										}
										?>
                                      </select>
                                      <select name="required_bln_cekout" size="1" id="select" class="green">
                                        <?php
										for ($i=1; $i <= 12; $i++) {
										if ($i == $outmonth){ $selectmonth ="selected";} else {$selectmonth="";}
										echo"<option value=\"$i\" $selectmonth>$bulan[$i]</option>"."\n";
										}
										?>
                                      </select>
                                      <select name="required_thn_cekout" size="1" id="select2" class="green">
                                        <?php
										for($i=$outyear; $i <= $outyear + 1; $i++){
										if ($i == $outyear){ $selectyear ="selected";} else {$selectyear="";}
										echo"<option value=\"$i\" $selectyear>$i</option>"."\n";
										}
										?>
                                      </select><span class="red"> *</span></td>
								  </tr>
								  <tr>
								      <td height="25" class="blue"></td>
									  <td class="blue"></td>
								  </tr>
                                  <tr valign="top"> 
                                    <td colspan="2" class="green"><p>
                                      <input name="checking_room" type="submit" class="green" id="kirim" value="Cek Kamar">
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

</head>
</html>
