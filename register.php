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
$pict=$data['pict'];
}


$tglp = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("Y")); 
$no_pesan = date("00jnYHis",$tglp);

$tgl_ci = date("j/n/Y",$_GET['in']);
$tgl_co = date("j/n/Y",$_GET['out']);
$tgl_cci = $_GET['in'];
$tgl_cco = $_GET['out'];
?>

<!-- CSS here -->
<link rel="stylesheet" href="assets/css/style.css">
           
        
            
                        

             
   <!--================Blog Area =================-->
<form onSubmit="return checkrequired(this)" id="form1" name="form1" method="post" action="functions.php">
   <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" alt="">        
                                    <?php
									echo"<a href='index.php?menu=reservations&id=$id_tipe'>
                                    <img src='$pict' width='600' height='300' /></a>";
                                   
                                    ?></td>
                                  <br><br> 
                                </a>
                            </div>

                            <!-- <div class="blog_details"> -->
                               
                        
                        <div class="row">
                        
                                <!-- <div class="col-12"> -->
                                                     

                                <p>Ringkasan Pesanan : </p>
                                <br><br>
                                <div class="col-12">
                                    <div class="form-group">
                                    <div class="tittle">
                                        <span> Tanggal :</span> <?php echo"$tanggal" ?>
                                    </div>
                                     </textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                    <div class="tittle">
                                    <td>No Pesan :</td>
                                    <td><b><?php echo"REC-$no_pesan" ?></b>
									<input name="no_pesan" type="hidden" value="<?php echo"REC-$no_pesan" ?>"></td>
                                    </div>
                                       </textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    
                                    <td height="25" class="blue">Tgl Chek In :</td>
                                    <td class="blue"><b><?php echo"$tgl_ci" ?></b>
									<input name="tgl_cci" type="hidden" value="<?php echo"$tgl_cci" ?>"></td>
                            <br><br>		
								  
								    <td height="25" class="blue">Tgl Cek Out :</td>
                                    <td class="blue"><b><?php echo"$tgl_co" ?></b>
									<input name="tgl_cco" type="hidden" value="<?php echo"$tgl_cco" ?>"></td>
                            <br><br>	
								 
								      <td height="25" class="blue">Tipe Kamar :</td>
                                      <td class="blue"><b><?php echo"$tipe_kamar" ?></b>
									  <input name="id_tipe" type="hidden" value="<?php echo"$id_tipe" ?>"></td>
                           
                            </div>
                        </article>

                       


                        
                    </div>
                </div>
                <div class="col-lg-4">
                 
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">    
                           
                        <p>Silahkan isi Data Pribadi Anda :</p>
                       
                       <div class="col-sm-12">
                           <div class="form-group">
                               <input class="form-control valid" name="required_nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <input class="form-control valid" name="required_email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                           </div>
                       </div>
                       
<!-- Masalah Error!! Nomor telepon belum terinput ke database -->

                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="required_phone" id="phone" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone'" placeholder="Enter Phone">
                            </div>
                        </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <input class="form-control" name="required_city" id="city" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter City'" placeholder="Enter City">
                           </div>
                       </div>
                       <div class="col-sm-12">
                           <div class="form-group">
                               <input class="form-control" name="required_alamat" id="alamat" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Alamat'" placeholder="Enter Alamat">
                           </div>
                       </div>
                    
          
                             <td height="25" class="blue">Status Kamar <span class="red"> *</span></td>
                             <td class='blue'>
                   <br>
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
                                     echo"<input type='checkbox' name='kamar_in_user' checked='checked' disabled='disabled' />Kamar  $nm_kamar (status = <span class='red'>use/booking</span>)<br />";  
                                   }	
                                   else
                                   {
                                     echo"<input type='checkbox' name='required_id_kamar[]' id='required_id_kamar' value='$id_kamar' />Kamar $nm_kamar (status = <span class='green'>kosong</span>)<br />";  
                                   }
                               }else
                               {
                                   echo"<input type='checkbox' name='kamar_in_user' checked='checked' disabled='disabled' />Kamar No $nm_kamar (status = <span class='red'>use/booking</span>)<br />";
                               }
                             }
                             ?>	
           </td>
           
         </table></td>
     </tr>
     <div class="form-group mt-3">
                   <td colspan="2" ><p>
                             <input name="reservation_new" type="submit"  class="btn more-btn1" id="kirim" value="Kirim">
                             <input name="reset" type="reset"  class="btn more-btn1" id="Reset" value="Reset"> 
                           <font color="#FF0000" face="'Lato', sans -serif"><br> (*) Harus diisi.</font></p></td>	
     </div>
   </div>
   </div>
   </div>
   </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
                           






                               
                                
                       


		<!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="./assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
