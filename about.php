
<?php
include "incl/connect.inc.php";
include "templates/header.php";

$kueri = "select * from tb_manag_site where menu = 'Home'";
$qr  = mysqli_query($connect, $kueri);

?>
   <body>     
   
   
		 <!-- slider Area Start-->
		 <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>About</span>
                                <h2>Gadjah Mada Homestay</h2>
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
				<center><h1 class="mb-30">Gadjah Mada Homestay</h1></center>
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
                                    <p>Wismakaliurang<br>Room Rate : 195000 | Fasilitas Ruangan : AC, TV, Kulkas, DVD.<br>
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
                                    <p>Homestay<br>Room Rate : 205000 | Fasilitas Ruangan : Sofa, Spring Bed, TV, Kulkas, DVD Player.<br>
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
<?php
include "templates/footer.php";
?>