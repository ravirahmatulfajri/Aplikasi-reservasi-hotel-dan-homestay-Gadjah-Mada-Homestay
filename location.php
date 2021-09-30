<?php
include "templates/header.php";
?>
<!-- slider Area Start-->
		 <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>Locations</span>
                                <h2>Location</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End--> 

 <!-- ================ contact section start ================= -->
 <section class="contact-section">
            <div class="container">
                <div class="d-none d-sm-block mb-5 pb-4">
                <div class="col-md-8">
                     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.1915610169717!2d110.37123191477804!3d-7.769500794400528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a585eaaaaaaab%3A0xf75dd7a2ef60a1ed!2sMardliyyah%20Islamic%20Centre%20UGM!5e0!3m2!1sid!2sid!4v1631087661620!5m2!1sid!2sid" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
    
                </div>
    
                <?php
include_once("incl/function.php");
?>  
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Guest Relations</h2>
                    </div>
                    <div class="col-lg-8">
                        <!-- <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate"> -->
                        <form onSubmit="return checkrequired(this)" id="form1" name="form1" method="post" action="functions.php">    
                        <div class="row">
                            <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" ><?php echo"$tanggal" ?></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="required_pesan" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="required_nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="required_email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="required_phone" id="phone" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone'" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="required_alamat" id="alamat" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Alamat'" placeholder="Enter Alamat">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                            <td colspan="2"  class="btn more-btn1"><p>
                                      <input name="guest_new" type="submit"  class="btn more-btn1" id="kirim" value="Kirim">
                                      <input name="guest_reset" type="reset"  class="btn more-btn1" id="Reset" value="Reset"> 
                                    <font color="#FF0000" face="'Lato', sans -serif"> (*) Harus diisi.</font></p></td>	
                                </div>
                            <?php 
    
								  if ('$connect,$thanks')
								  {
								  echo"<tr> 
                                    <td height='20' colspan='2' class='green'></td>
                                  </tr>
								  <tr> 
                                    <td colspan='2' bgcolor='#7C641B' class='green'><img src='images/gif/spacer.gif' tppabs='images/gif/spacer.gif' width='1' height='1'></td>
                                  </tr>
								  <tr> 
                                    <td height='20' colspan='2' class='green'></td>
                                  </tr>
								  <tr> 
                                    <td colspan='2' class='green'><p>
                                      <p>Terima kasih, pesan anda akan kami respon dan kami konfirmasikan kembali lewat email anda. </p></td>                         
                  </tr>";
								  }
								  ?>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Jl. Kesehatan Sendowo, Senolowo, Sinduadi, Kec. Mlati, Kabupaten Sleman</h3>
                                <p> Daerah Istimewa Yogyakarta 55284</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+622746492599</h3>
                                <p>Monday to Friday 09.00 am to 06.00 pm</p>
                                
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>mardliyyahislamiccenter@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
<?php
include "templates/footer.php";
?>