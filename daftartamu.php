<link href="images/styles.css" rel="stylesheet" type="text/css"> 
<table width="538" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="23"><img src="images/gif/corner_1-1.gif" tppabs="images/gif/corner_1.gif" width="23" height="23"></td>
          <td width="490" background="images/gif/corner_1bg.gif" tppabs="images/gif/corner_1bg.gif">&nbsp;</td>
          <td width="25"><img src="images/gif/corner_2-1.gif" tppabs="images/gif/corner_2.gif" width="25" height="23"></td>
        </tr>
        <tr> 
          <td background="images/gif/corner_2bg.gif" tppabs="images/gif/corner_2bg.gif">&nbsp;</td>
          <td><table width="490" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><h2 class="style1">DAFTAR TAMU</h2></td>
              </tr>
			  <tr> 
                <td bgcolor="#006600"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="1"></td>
              </tr>
            </table>
            <table width="490" border="0" cellspacing="0" cellpadding="0">
              <tr>              </tr>
             
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
                      <td width="476" valign="top"><div align="center">			
					   <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">

		<tr>
							<td class="bgtbl" height="35" align="center">
								<div class="texttbl"><b>Nama Tamu </b></div></td>
							<td class="bgtbl" align="center">
								<div class="texttbl"><b>(Tgl | Jam) Check In </b></div></td>
							<td class="bgtbl" align="center">
								<div class="texttbl"><b>Tipe Kamar </b></div></td>
							<td class="bgtbl" align="center">
								<div class="texttbl"><b>Nama Kamar</b></div></td>
							</tr>
                            <?php	
						include "incl/connect.inc.php" ;
						
						$total=0;
						$kueri = "select a.id_tamu, a.nm_tamu, a.checkin, c.tipe_kamar, b.nm_kamar from tb_tamu a, tb_kamar b, tb_kamar_tipe c
									where a.id_kamar = b.id_kamar and b.tipe = c.id_tipe order by a.nm_tamu, a.checkin asc";
						$proses = mysqli_query($connect,$kueri);
						while ($data = mysqli_fetch_array($proses))
						{
						$id_tamu = $data['id_tamu'];
						$nm_tamu = $data['nm_tamu'];
						$checkin = date("j/n/Y | H:i",$data['checkin']);						
						$tipe_kamar = $data['tipe_kamar'];
						$nm_kamar = $data['nm_kamar'];						
						$total++;
						
						echo"<tr>
							<td class='bg2tbl' height='30'>
								<div class='texttbl'>$nm_tamu</div></td>
							<td class='bg2tbl' align='center'>
								<div class='texttbl'>$checkin</div></td>
							<td class='bg2tbl' align='center'>
								<div class='texttbl'>$tipe_kamar</div></td>
							<td class='bg2tbl' align='center'>
								<div class='texttbl'>$nm_kamar</div></td>
							</tr>";
						}						
						
						if ($total < 1 )
						{
						
						echo"<tr>
							<td height='30' colspan='4'>
								<div align='center' style='border:1px solid #9ecf5a;padding-top:15px;padding-bottom:15px;'>Belum ada data </div></td>
						  	</tr>";
						}
						?>
	                        </table>
   <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
                        Total Records = <?php echo"$total" ?>
                        </table>
			</div></td>
                      <td width="7" background="images/gif/corner6-1.gif" tppabs="images/gif/corner6.gif">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td background="images/gif/corner7-1.gif" tppabs="images/gif/corner7.gif"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner8-1.gif" tppabs="images/gif/corner8.gif"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner9-1.gif" tppabs="images/gif/corner9.gif"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                    </tr>
                </table></td>
              </tr>
         
            </table></td>
          <td background="images/gif/corner_2bgA.gif" tppabs="images/gif/corner_2bgA.gif">&nbsp;</td>
        </tr>
        <tr>
          <td><img src="images/gif/corner_3-1.gif" tppabs="images/gif/corner_3.gif" width="23" height="23"></td>
          <td background="images/gif/corner_3bg.gif" tppabs="images/gif/corner_3bg.gif">&nbsp;</td>
          <td><img src="images/gif/corner_4-1.gif" tppabs="images/gif/corner_4.gif" width="25" height="23"></td>
        </tr>
</table>
