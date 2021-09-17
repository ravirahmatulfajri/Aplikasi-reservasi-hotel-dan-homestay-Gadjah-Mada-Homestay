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
                                <span>Accommodation</span>
                                <h2>Accommodation</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        
<?php 
include "incl/connect.inc.php" ;
			
$kueri = "select distinct(a.tipe_kamar), a.id_tipe, a.harga, b.fasilitas, a.pict 
								from tb_kamar_tipe a, tb_kamar b 
								where a.id_tipe = b.tipe
								group by a.tipe_kamar
								order by a.id_tipe asc";

/*$kueri = "select a.id_kamar, a.nm_kamar, b.tipe_kamar, a.fasilitas, a.status from tb_kamar a, tb_kamar_tipe b
    		where a.tipe = b.id_tipe and a.status <> 'use' order by a.tipe, a.nm_kamar asc";
*/$qry  = mysqli_query($connect,$kueri);
while($data = mysqli_fetch_array($qry)) {		
					$id_tipe=$data['id_tipe'];	
					$tipe_kamar=$data['tipe_kamar'];	
					$harga=$data['harga'];
					$fasilitas=$data['fasilitas'];
                    $pict=$data['pict'];
                    
?>
                
<!--================ Accomodation Area  =================-->
 <!--================Blog Area =================-->
 <!-- <section class="blog_area section-padding"> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0">
                                
                                <!-- <span class="responsive"><img src="assets/img/rooms/room1.jpg" > -->
                                <?php
                                
									echo"<a href='index.php?menu=reservations&id=$id_tipe'>
                                    <img src='$pict' width='710' height='350'/></a>";
                                    
                                    ?>
                                    <!-- <img src="$pict" width='710' height='350' /> -->
                                </span>
                                    </td>
                                   
                                 <!-- <a href="#" class="blog_item_date"> -->
                                    <!-- <h3>CLICK</h3>
                                    <p>PICTURE</p> -->
                                </a> 
                            </div>

                            <!-- <div class="blog_details">
                                <a class="d-inline-block" href="singlenews.php">
                                    <h2>kkk
                                    </h2>
                                </a>
                            </div> -->
                            
                        </article>
         
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- <div class="blog_right_sidebar"> -->
                        
                        <aside class="single_sidebar_widget post_category_widget">
                            <br><br>
                                <h1 class="red"><?php echo"$tipe_kamar" ?></h1><br>
                               

                                <ul class="list cat-list">
                                    <li>
                                        <a href="index.php?menu=reservations&id=$id_tipe" class="d-flex">
                                        
                                            
                                        </a>
                                    </li>
                                </ul>
                            </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h5 class="green">Room Rate : <?php echo"$harga" ?></h1>
                            <ul class="list cat-list">
                                <li>
                                    <a href="index.php?menu=reservations&id=$id_tipe" class="d-flex">
                                       
                                        
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h5 class="green">Fasilitas Ruangan : <?php echo"$fasilitas" ?></h5>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <!-- <p class="green">Fasilitas Ruangan : <br /><?php echo"$fasilitas" ?></p> -->
                                        
                                    </a>
                                </li>
                            </ul>
                        </aside>
                        <br><br>
                        
        <!-- <a href="index.php?menu=reservations&id=$id_tipe" class="btn more-btn1">Book Now <i class="ti-angle-right"></i> </a> -->
       <a class="btn more-btn1"
        <?php echo"<a href='index.php?menu=reservations&id=$id_tipe'>Book Now</a>"; ?></div>
       </a>
        <!-- <tr>
			<td colspan="2"><div align="right"><?php echo"<a href='index.php?menu=reservations&id=$id_tipe'><img src='images/gif/button_book_now.gif'  width='102' height='25' border='0'></a>"; ?></div></td>
		</tr> -->
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
               
                    <?php 
} ?>


                   

</script></html>
<!-- JS here -->
</main>
   <footer>
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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Gama Multi Group, All Rights Reserved. <i class="ti-heart" aria-hidden="true"></i> by <a href="https://gamamulti.com" target="_blank">Mardliyyah Islamic Center</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                         </div>
                      </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Quick Links</h4>
                               <ul>
                                   <li><a href="#">About </a></li>
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
                                   <li><a href="#">Tel: +622746492599</a></li>
                                   <li><a href="#">Skype: Mardliyyahbooking</a></li>
                                   <li><a href="#">mardliyyah@gmail.com</a></li>
                               </ul>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                       <div class="single-footer-caption mb-30">
                           <div class="footer-tittle">
                               <h4>Our Location</h4>
                               <ul>
                                   <li><a href="#">Jl. Kesehatan Sendowo, Senolowo, Sinduadi, Kec. Mlati, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55284</a></li>
                                   <li><a href="#"> 69JF+59 Sinduadi, Kabupaten Sleman, Daerah Istimewa Yogyakarta</a></li>
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
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>