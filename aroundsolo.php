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
                <td><h2 class="style1">Around Solo </h2>
                </td>
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
                      <td width="476" valign="top" class="green"><p align="center"><img src="images/arround-solo.jpg" width="450" height="250"></p>
                        <p>
						<?
						include "incl/connect.inc.php" ;
					
						$kueri = "select * from tb_manag_site where menu = 'Around Solo'";
						$qr  = mysql_query($kueri);
						while($data = mysql_fetch_array($qr))
						{
						$isi_menu=$data['isi_menu'];	
						}	
							
						echo"$isi_menu";		
						?>
						</p></td>
                      <td width="7" background="images/gif/corner6-1.gif" tppabs="images/gif/corner6.gif">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td background="images/gif/corner7-1.gif" tppabs="images/gif/corner7.gif"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner8-1.gif" tppabs="images/gif/corner8.gif"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner9-1.gif" tppabs="images/gif/corner9.gif"><img src="images/gif/spacer.gif" tppabs="images/gif/spacer.gif" width="1" height="7"></td>
                    </tr>
                  </table></td>
              </tr>
              <tr> 
                <td>&nbsp;</td>
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
