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
                <td><h2 class="style1">Lihat Kamar</h2></td>
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

                      <tr  align="center"  bgcolor="#CCCCCC">
						     <td width="30%"> TIPE</td>
							 <td width="10%"> KAMAR</td>
							 <td width="120%"> FASILITAS</td>
							 <td width="13%"> STATUS</td>
							 </tr>
                               <tr  align="center"  bgcolor="#333333">
						     <td width="30%"> </td>
							 <td width="10%"></td>
							 <td width="120%"></td>
							 <td width="13%"></td>
							 </tr>
							 <?php	
						include "incl/connect.inc.php" ;
						
						$total=0;
						$kueri = "select a.id_kamar, a.nm_kamar, b.tipe_kamar, a.fasilitas, a.status from tb_kamar a, tb_kamar_tipe b
									where a.tipe = b.id_tipe order by a.tipe, a.nm_kamar asc";
						$proses = mysqli_query($connect,$kueri);
						while ($data = mysqli_fetch_array($proses))
						{
						$id_kamar = $data['id_kamar'];
						$nm_kamar = $data['nm_kamar'];
						$tipe_kamar = $data['tipe_kamar'];
						$fasilitas = $data['fasilitas'];
						$status = $data['status'];						
						$total++;
						
						if ($status == 'use')
						{
							$color = 'background-color:#ff3366;';
						}
						else if (($status <> 'use') and ($status <> 'free'))
						{
							$color = 'background-color:#ffcc66;';
						}
						else
						{
							$color = '';
						}
						echo"
							 <tr>
							<td width=30%><div style='$color'>$tipe_kamar</div></td>
							<td width=10%><div style='$color'>$nm_kamar</div></td>
							<td width=120%><div style='$color'>$fasilitas</div></td>
							<td width=30><div style='$color'>$status</div></td>
							<td width=10%>
								<div style='$color'></div></td>
							</tr>";
						}						
						
						if ($total < 1 )
						{
						
						echo"<tr>
							<td colspan='4>
								<div>Belum ada data </div></td>
						  	</tr>";
						}
						?>
                               <tr  align="center"  bgcolor="#333333">
							 </tr>
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
