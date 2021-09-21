<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Mardliyyah Islamic Center</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
		<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->
        <!-- Place favicon.ico in the root directory -->
        
		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/gijgo.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
   </head>
<?php
include "incl/connect.inc.php";
$kueri = "select * from tb_manag_site where menu = 'Home'";
$qr  = mysqli_query($connect, $kueri);

?>
   <body>     
   
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <strong>Hotel</b>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
       <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="accommodation.php">Accommodations</a></li>
                                        <li><a href="facilities.php">Facilities</a></li>
                                        <li><a href="#">Info Kamar</a>
                                            <ul class="submenu">
                                                <li><a href="index.php?menu=lihatkamar">Lihat Kamar</a></li>
                                                <li><a href="index.php?menu=daftartamu">Daftar Tamu</a></li>
                                                <li><a href="index.php?menu=daftarorder">Daftar Order</a></li>
                                            </ul>
                                        <li><a href="#">Another</a>
                                            <ul class="submenu">
                                                <li><a href="location.php">Locations & Guest Relations</a></li>
                                                <li><a href="around.php">Arround</a></li>
                                                <li><a href="news.php">News</a></li>
                                            </ul>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <div class="col-xl-2 col-lg-2">
                          <!-- header-btn -->
                          <div class="header-btn">
                                <a href="accommodation.php" class="btn btn1 d-none d-lg-block ">Book Now</a>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Header End -->
    </header>
    <main>
		 <!-- slider Area Start-->
		 <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>About</span>
                                <h2>Mardliyyah Islamic Center</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Start Align Area -->
	<div class="whole-wrap">
		<div class="container box_1170">
			<div class="section-top-border">
				<center><h1 class="mb-30">Mardliyyah Islamic Center</h1></center>
				<div class="row">
					<div class="col-md-3">
						<img src="assets/img/elements/h1_hero.jpg" alt="" class="img-fluid">
					</div>
					<div class="col-md-9 mt-sm-20">
                    <?php
                                  while ($data = mysqli_fetch_array($qr)) :
                                      $isi_menu = $data['isi_menu'];
                                  ?>

                                      <?= $isi_menu ?>

                                  <?php endwhile; ?> </p>
					</div>
				</div>
			</div>
        <!-- Make customer End-->
        
            <div class="section-top-border">
				<h2>Image Gallery</h2>
				<div class="row gallery-item">
					<div class="col-md-4">
						<a href="assets/img/elements/g1.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g1.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/g2.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g2.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/g3.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g3.jpg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/g4.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g4.jpg);"></div>
						</a>
					</div>
					<div class="col-md-6">
						<a href="assets/img/elements/g5.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g5.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/g6.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g6.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/g7.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g7.jpg);"></div>
						</a>
					</div>
					<div class="col-md-4">
						<a href="assets/img/elements/g8.jpg" class="img-pop-up">
							<div class="single-gallery-image" style="background: url(assets/img/elements/g8.jpg);"></div>
						</a>
					</div>
				</div>
			</div>
 <!-- Testimonial Start -->
 
 <div class="testimonial-area t-padding">
 <h2>Our Rooms</h2>
            <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/VIPRoomA.jpg" alt="">
                                    </div>
                                    
                                </div>
                                 <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>VIP Room A<br>Room Rate : 195000 | Fasilitas Ruangan : AC, TV, Kulkas, DVD.<br>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/VIPRoomB.jpg" alt="">
                                    </div>
                                   
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>VIP Room B<br>Room Rate : 205000 | Fasilitas Ruangan : Sofa, Spring Bed, TV, Kulkas, DVD Player.<br>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/standardRoomA.jpg" alt="">
                                    </div>
                                   
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Standard Room A<br>Room Rate : 175000 | Fasilitas Ruangan : Sofa, Spring Bed, TV, Kulkas, DVD Player.<br>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/VIPRoomB.jpg" alt="">
                                    </div>
                                   
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Standard Room B<br>Room Rate : 185000 | Fasilitas Ruangan : Tidak ada.<br>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    </p>
                                </div>
                            </div>
                            <div class="single-testimonial  pt-65">
                                <!-- Testimonial tittle -->
                                <div class="font-back-tittle mb-105">
                                    <div class="archivment-front">
                                        <img src="assets/img/logo/VIPRoomB.jpg" alt="">
                                    </div>
                                   
                                </div>
                                <!-- Testimonial Content -->
                                <div class="testimonial-caption text-center">
                                    <p>Family Room<br>Room Rate : 300000 | Fasilitas Ruangan : Tidak ada.<br>
                                    <div class="testimonial-ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
        </div>
        </div>
	</div>
        <!-- Testimonial End -->

<!-- <?php 
include "incl/connect.inc.php" ;
			
$kueri = "select * from tb_manag_site where menu = 'Home'";
$qry  = mysqli_query($connect,$kueri);

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
</table> -->
	<!-- Gallery img Start-->
    <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
 <!-- Footer Start-->
 <div class="footer-area black-bg footer-padding">
           <div class="container">
               <div class="row d-flex justify-content-between">
                   <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                      <div class="single-footer-caption mb-30">
                         <!-- logo -->
                         <div class="footer-logo">
                           <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                         </div>
                         <div class="footer-social footer-social2">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-twitter"></i></a>
                             <a href="#"><i class="fas fa-globe"></i></a>
                             <a href="#"><i class="fab fa-behance"></i></a>
                         </div>
                         <div class="footer-pera">
                              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="#">About Mariana</a></li>
                                   <li><a href="#">Our Best Rooms</a></li>
                                   <li><a href="#">Our Photo Gellary</a></li>
                                   <li><a href="#">Pool Service</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Reservations</h4>
                               <ul>
                                   <li><a href="#">Tel: 345 5667 889</a></li>
                                   <li><a href="#">Skype: Marianabooking</a></li>
                                   <li><a href="#">reservations@hotelriver.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Our Location</h4>
                               <ul>
                                   <li><a href="#">198 West 21th Street,</a></li>
                                   <li><a href="#">Suite 721 New York NY 10016</a></li>
                               </ul>
                               <!-- Form -->
                                <div class="footer-form" >
                                    <div id="mc_embed_signup">
                                        <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                        method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                            class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                            onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                              <button type="submit" name="submit" id="newsletter-submit"
                                              class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       
       <!-- Footer End-->
   </footer>

<!-- JS here -->
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
        
    </body>
</html>