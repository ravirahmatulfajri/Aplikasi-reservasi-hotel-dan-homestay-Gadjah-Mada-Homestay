<link href="images/styles.css" rel="stylesheet" type="text/css"> 
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<table width="538" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="23"><img src="images/gif/corner_1-1.gif" tppabs="images/images/gif/corner_1.gif" width="23" height="23"></td>
          <td width="490" background="images/gif/corner_1bg.gif" tppabs="images/images/gif/corner_1bg.gif">&nbsp;</td>
          <td width="25"><img src="images/gif/corner_2-1.gif" tppabs="images/images/gif/corner_2.gif" width="25" height="23"></td>
        </tr>
        <tr> 
          <td background="images/gif/corner_2bg.gif" tppabs="images/images/gif/corner_2bg.gif">&nbsp;</td>
          <td><table width="490" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0','width','475','height','314','src','images/header','quality','high','pluginspage','http://www.macromedia.com/go/getflashplayer','movie','images/header' ); //end AC code
                </script>
                  <noscript>
                  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="475" height="314">
                    <param name="movie" value="images/header.swf" />
                    <param name="quality" value="high" />
                    <embed src="images/header.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="475" height="314"></embed>
                  </object>
                  </noscript>
                </td>
              </tr>
			  <tr> 
                <td bgcolor="#006600"><img src="images/gif/spacer.gif" tppabs="images/images/gif/spacer.gif" width="1" height="1"></td>
              </tr>
            </table>
            <table width="490" border="0" cellspacing="0" cellpadding="0">
              
              <tr> 
                <td><table width="490" border="0" cellspacing="0" cellpadding="0">
                    <tr> 
                      <td width="7"><img src="images/gif/corner1-1.gif" tppabs="images/images/gif/corner1.gif" width="7" height="20"></td>
                      <td width="218" background="images/gif/corner2-1.gif" tppabs="images/images/gif/corner2.gif">&nbsp;</td>
                      <td width="37"><img src="images/gif/corner3.gif" tppabs="images/images/gif/corner3.gif" width="37" height="20"></td>
                      <td width="219" background="images/gif/corner2-1.gif" tppabs="images/images/gif/corner2.gif">&nbsp;</td>
                      <td width="7"><img src="images/gif/corner4-1.gif" tppabs="images/images/gif/corner4.gif" width="7" height="20"></td>
                    </tr>
                  </table>
                  <table width="490" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr> 
                      <td width="7" background="images/gif/corner5-1.gif" tppabs="images/images/gif/corner5.gif">&nbsp;</td>
                      <td width="476" valign="top"><table width="476" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr valign="top">
                            <td class="green"><div align="justify">
  <?php 
include "incl/connect.inc.php" ;
			
$kueri = "select * from tb_manag_site where menu = 'Home'";
$qr  = mysqli_query($connect,$kueri);
while($data = mysqli_fetch_array($qr)) {
$isi_menu=$data['isi_menu'];	
}	
echo"$isi_menu";
?>
                          </div></td>
                          </tr>
                        </table></td>
                      <td width="7" background="images/gif/corner6-1.gif" tppabs="images/images/gif/corner6.gif">&nbsp;</td>
                    </tr>
                    <tr> 
                      <td background="images/gif/corner7-1.gif" tppabs="images/images/gif/corner7.gif"><img src="images/gif/spacer.gif" tppabs="images/images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner8-1.gif" tppabs="images/images/gif/corner8.gif"><img src="images/gif/spacer.gif" tppabs="images/images/gif/spacer.gif" width="1" height="7"></td>
                      <td background="images/gif/corner9-1.gif" tppabs="images/images/gif/corner9.gif"><img src="images/gif/spacer.gif" tppabs="images/images/gif/spacer.gif" width="1" height="7"></td>
                    </tr>
                  </table></td>
              </tr>
            </table></td>
          <td background="images/gif/corner_2bgA.gif" tppabs="images/images/gif/corner_2bgA.gif">&nbsp;</td>
        </tr>
        <tr>
          <td><img src="images/gif/corner_3-1.gif" tppabs="images/images/gif/corner_3.gif" width="23" height="23"></td>
          <td background="images/gif/corner_3bg.gif" tppabs="images/images/gif/corner_3bg.gif">&nbsp;</td>
          <td><img src="images/gif/corner_4-1.gif" tppabs="images/images/gif/corner_4.gif" width="25" height="23"></td>
        </tr>
</table>
