<?php


include "incl/connect.inc.php";

$kueri = "select * from tb_manag_site where menu = 'Around Solo'";

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
                        <span>Arround</span>
                        <h2>Arround</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->





<div class="container">

    <?php
    while ($data = mysqli_fetch_array($qr)) :
        $isi_menu = $data['isi_menu'];
    ?>

        <?= $isi_menu ?>

    <?php endwhile; ?>
</div>

<?php
include './template/footer.php';
