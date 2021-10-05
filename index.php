<?php
include "./incl/connect.inc.php";
include './incl/config.php';

$kueri = "select * from tb_manag_site where menu = 'Home'";
$qr  = mysqli_query($connect, $kueri);

include './templates/header.php';

?>


<!-- slider Area Start-->
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="slider-active dot-style">
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9">
                        <div class="h1-slider-caption">
                            <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                            <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9">
                        <div class="h1-slider-caption">
                            <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                            <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-xl-9">
                        <div class="h1-slider-caption">
                            <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                            <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<?php
include "incl/connect.inc.php";
?>
<?php
//batas awal
if (isset($_GET['menu'])) :
    include "$_GET[menu].php";
elseif (isset($_POST['menu'])) :
    include "$_POST[menu].php";
else :
    // batas akhir
?>
    <!-- Make customer Start-->
    <section class="make-customer-area customar-padding fix mx-auto">
        <div class="container-fluid p-0 ">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="customer-img mb-120">
                        <img src="assets/img/customer/customar1.png" class="customar-img1" alt="">
                        <img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
                        <div class="service-experience heartbeat">
                            <h3>25 Years of Service<br>Experience</h3>
                        </div>
                    </div>
                </div>
                <div class=" col-xl-5 col-lg-6">
                    <div class="customer-caption">
                        <h1>
                            <b>
                                <?= $web_title ?>
                            </b>
                        </h1>
                        <!-- <h2>Make the customer the hero of your story</h2> -->
                        <div class="caption-details mt-20">
                            <p class="mb-4">
                                <!-- <p class="pera-dtails">Lorem ipsum dolor sit amet, consectetur adipisic- ing elit, sed do eiusmod tempor inc. </p> -->
                                <?php
                                while ($data = mysqli_fetch_array($qr)) :
                                    $isi_menu = $data['isi_menu'];
                                ?>

                                    <?= $isi_menu ?>

                                <?php endwhile; ?>
                            </p>
                            <a href="about.php" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Make customer End-->

<?php
endif
?>

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

<?php

include './templates/footer.php';
