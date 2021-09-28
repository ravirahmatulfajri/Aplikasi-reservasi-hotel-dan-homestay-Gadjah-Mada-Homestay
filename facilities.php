<?php

include "incl/connect.inc.php";
$kueri = "select * from tb_manag_site where menu = 'Facilities'";
$qr  = mysqli_query($connect, $kueri);

include './template/header.php';

?>
<!-- slider Area Start-->
<div class="slider-area">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg">
        <div class="container">
            <div class="row ">
                <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                    <div class="hero-caption">
                        <span>Facilities</span>
                        <h2>Facilities</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->

<!-- Dining Start -->
<div class="dining-area dining-padding-top">
    <!-- Single Left img -->
    <div class="single-dining-area left-img">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-8">
                    <div class="dining-caption">
                        <span>Mardliyyah Islamic Center</span>
                        <h3>Our Facilities</h3>
                        <p><?php
                            while ($data = mysqli_fetch_array($qr)) :
                                $isi_menu = $data['isi_menu'];
                            ?>

                                <?= $isi_menu ?>

                            <?php endwhile; ?></p>
                        <a href="accommodation.php" class="btn border-btn">Pesan Kamar <i class="ti-angle-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
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

include './template/footer.php';
