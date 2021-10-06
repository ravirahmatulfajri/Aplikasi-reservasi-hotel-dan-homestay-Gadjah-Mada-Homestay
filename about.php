<?php
include "incl/connect.inc.php";
include "templates/header.php";

$kueri = "select * from tb_manag_site where menu = 'Home'";
$qr  = mysqli_query($connect, $kueri);

?>

<body>

    <!-- slider Area Start-->
    <div class="slider-area">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg">
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
                <center>
                    <h1 class="mb-30">Gadjah Mada Homestay</h1>
                </center>
                <div class="row">
                    <!-- <div class="col-md-12"> -->
                    <div class="col-md-3">
                        <img src="assets/img/about/h1_hero.jpg" alt="" class="img-fluid">
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
                        <a href="assets/img/about/g1.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g1.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/about/g2.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g2.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/about/g3.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g3.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="assets/img/about/g4.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g4.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="assets/img/about/g5.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g5.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/about/g6.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g6.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/about/g7.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g7.jpg);"></div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="assets/img/about/g8.jpg" class="img-pop-up">
                            <div class="single-gallery-image" style="background: url(assets/img/about/g8.jpg);"></div>
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
                                            <!-- <img src="assets/img/rooms/Wisan.jpg" alt=""> -->
                                        </div>

                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption text-center">
                                        <p>Wisma<br>Room Rate : 195000 | Fasilitas Ruangan : AC, TV, Kulkas, DVD.<br>
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
                                            <!-- <img src="assets/img/rooms/VIPRoomB.jpg" alt=""> -->
                                        </div>

                                    </div>
                                    <!-- Testimonial Content -->
                                    <div class="testimonial-caption text-center">
                                        <p>Home<br>Room Rate : 205000 | Fasilitas Ruangan : Sofa, Spring Bed, TV, Kulkas, DVD Player.<br>
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
                    <div class="section-top-border">
                        <h3 class="mb-30">Policies</h3>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="single-defination">
                                    <h4 class="mb-20">Homestay C4</h4>
                                    <p>• Check-in time: After 15:00 on the day of arrival.<br>• Check-out time: 11:00 upon day of departure.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-defination">
                                    <h4 class="mb-20">Wisma Kaliurang</h4>
                                    <p>• Check-in time: After 15:00 on the day of arrival.<br> • Check-out time: 11:00 upon day of departure.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="single-defination">
                                    <h4 class="mb-20">Homestay</h4>
                                    <p>• Smoking: Smoking is allowed.<br> • Pets: No pets allowed</p>
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