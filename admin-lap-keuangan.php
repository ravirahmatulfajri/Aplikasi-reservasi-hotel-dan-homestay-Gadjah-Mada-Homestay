<!--<script language="JavaScript">
function printit(){
	if (window.print) {
	window.print(); }
	}
</script>-->

<td class="main">
	<div class="contentContainer">
	<div class="boxCont">
	<div class="boxHeader">
		<div class="boxHeaderItem"><img src="images/box03.gif" alt="" /></div>
	</div>
	<div class="contentCell" align="center">
	<div class="rooms">
		<div class="roomsHeader">Laporan Keuangan Hotel Kusuma</div>										
		<div class="roomsCell">
			<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="5" height="35" align="right">
			  	<!--<form onSubmit="print_trans()" id="form1" name="form1" method="post" action="functions.php">-->	
				<form action="print-lap-keuangan" method="post" name="form1" id="form1" target="_blank" >
				<?php
				if(isset($filter))
				{	
					?>
					<input name="filter_bln" type="hidden" value="<?php echo"$required_bln_lap"?>" />
					<input name="filter_thn" type="hidden" value="<?php echo"$required_thn_lap"?>" />
					<input name="filter_cetak_lap_keuangan" type="submit" class="formButton" value="Preview" />	  	
				<?php
				}
				else
				{	?>
			  		<input name="cetak_lap_keuangan" type="submit" class="formButton" value="Preview" />
				<?php } ?>
				</form>
			  	</td>
			</tr>
			<tr>				
				<td colspan="5" height="35" align="right">
					<form action="menu.php?menu=admin-lap-keuangan&filter" method="post" name="form" id="form" target="_self">
					<div align="left">
					  <p><b>Filter Periode </b>
					        <select name="required_bln_lap" size="1" id="required_bln_lap" class="formSelect">
				              <?php
					if($act=="filter"){
					echo"<option value='$bln[$required_bln_lap]' selected>$bln[$required_bln_lap]</option>";
					}
					?>
					              <option value="01">Januari</option>
					              <option value="02">Pebruari</option>
					              <option value="03">Maret</option>
					              <option value="04">April</option>
					              <option value="05">Mei</option>
					              <option value="06">Juni</option>
					              <option value="07">Juli</option>
					              <option value="08">Agustus</option>
					              <option value="09">September</option>
					              <option value="10">Oktober</option>
					              <option value="11">Nopember</option>
					              <option value="12">Desember</option>
			                </select>
					        <select name="required_thn_lap" size="1" id="required_thn_lap" class="formSelect">
				              <?php
					$th=date("Y");
					for($s=$th-1; $s<=$th+1; $s++){
					echo"<option value=\"$s\">$s</option>";
					}
					?>
			                </select>
				        <input name="filter_lap_keuangan" type="submit" class="formButton" value="Filter" />
				        <br />
						<?php
						if(isset($filter))
						{
							/* if ($required_bln_lap = 01)
							{ $nm_bln = 'Januari';	}
							else if ($required_bln_lap = 02)
							{ $nm_bln = 'Pebruari';	}
							else if ($required_bln_lap = 03)
							{ $nm_bln = 'Maret';	}
							else if ($required_bln_lap = 04)
							{ $nm_bln = 'April';	}
							else if ($required_bln_lap = 05)
							{ $nm_bln = 'Mei';	}
							else if ($required_bln_lap = 06)
							{ $nm_bln = 'Juni';	}
							else if ($required_bln_lap = 07)
							{ $nm_bln = 'Juli';	}
							else if ($required_bln_lap = 08)
							{ $nm_bln = 'Agustus';	}
							else if ($required_bln_lap = 09)
							{ $nm_bln = 'September';	}
							else if ($required_bln_lap = 10)
							{ $nm_bln = 'Oktober';	}
							else if ($required_bln_lap = 11)
							{ $nm_bln = 'Nopember';	}
							else if ($required_bln_lap = 12)
							{ $nm_bln = 'Desember';	} */
								  
				        	echo"<p><b>Periode ( Bulan : $required_bln_lap - Tahun : $required_thn_lap )</b>";
						}
						?>
					  </p>
					  </div>
				    </form>  
			      </td>
				
			  </tr>
					<td valign="top" width="70%">
						<table border="0" cellpadding="0" cellspacing="0" width="100%">
							<tr>
							<td class="bgtbl" height="35" align="center">
								<div class="texttbl"><b>Tanggal</b></div></td>
							<td class="bgtbl" align="center">
								<div class="texttbl"><b>No Transaksi</b></div></td>
							<td class="bgtbl" align="center">
								<div class="texttbl"><b>Total Pemasukkan</b></div></td>
							<td class="bgtbl" align="center">
								<div class="texttbl"><b>Aksi</b></div></td>
							</tr>
						<?php	
						include "../incl/connect.inc.php" ;						

						$total=0;
						if(isset($filter))
						{	
							$kueri = "select * from tb_trans_tot where bln_trans = $required_bln_lap and thn_trans = $required_thn_lap order by tgl_trans";
						}
						else 
						{
							$kueri = "select * from tb_trans_tot order by tgl_trans";
						}
						$proses = mysql_query($kueri);
						while ($data = mysql_fetch_array($proses))
						{
						$no_trans = $data['no_trans'];
						$tgl_trans = $data['tgl_trans'];
						$bln_trans = $data['bln_trans'];
						$thn_trans = $data['thn_trans'];
						$tot_pemasukkan = $data['total'];
						$total++;
						
						echo"<tr>
							<td class='bg2tbl' height='30'>
								<div class='texttbl'>$tgl_trans/$bln_trans/$thn_trans</div></td>
							<td class='bg2tbl' align='center'>
								<div class='texttbl'>$no_trans</div></td>
							<td class='bg2tbl' align='center'>
								<div class='texttbl'>Rp. <b>$tot_pemasukkan</b>,-</div></td>
							<td class='bg2tbl' align='center'>
								<div class='texttbl'>[<b>DETAIL</b>]</div></td>
							</tr>";
						}						
						
						if(isset($filter))
						{	
							$kueri1 = "select sum(total) from tb_trans_tot where bln_trans = $required_bln_lap and thn_trans = $required_thn_lap order by tgl_trans";
						}
						else 
						{
						$kueri1 = "select sum(total) from tb_trans_tot";
						}
						$proses1 = mysql_query($kueri1);
						while ($data1 = mysql_fetch_array($proses1))
						{
						$grand_total = $data1['sum(total)'];
						}
						
						if ($total < 1 )
						{
						
						echo"<tr>
							<td height='30' colspan='3'>
								<div align='center' style='border:1px solid #9ecf5a;padding-top:15px;padding-bottom:15px;'>Belum ada data </div></td>
						  	</tr>";
						}
						?>
					</table>					</td>											
				</tr>
				<td height="40"> <br />
				<div align="center" style="border:1px solid #9ecf5a;padding-top:5px;padding-bottom:5px;">TOTAL PEMASUKKAN Rp. <b><?php echo"$grand_total" ?></b>,-</div>				</td>
				<tr>				</tr>
			</table>
		  </div>
		<div class="roomsBottom"></div>
	</div>
	</div>
		<div class="boxFooter">
		<div class="boxFooterItem"></div>
		</div>
	</div>
	</div>
</td>
