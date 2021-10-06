<?php

include "incl/connect.inc.php";
include "templates/header.php";

$kueri = "select * from tb_manag_site where menu = 'News'";
$qr  = mysqli_query($connect, $kueri);

?>

		 <!-- slider Area Start-->
		 <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>News</span>
                                <h2>News</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End--> 

  <!--================Blog Area =================-->
  <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="assets/img/news_post/single_post_1.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>20 Sep</h3>
                                    <!-- <p>Jan</p> -->
                                </a>
                            </div>

                            <div class="blog_details">
                                
                                <p><?php
                                  while ($data = mysqli_fetch_array($qr)) :
                                      $isi_menu = $data['isi_menu'];
                                  ?>

                                      <?= $isi_menu ?>

                                  <?php endwhile; ?></p>
                                
                            </div>
                        </article>

                       

                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Our Rooms</h3>
                            <div class="media post_item">
                                
                                <div class="media-body">
                                    <a href="accommodation.php">
                                        <h3>Wisma</h3>
                                    </a>
                                    <p>Fasilitas Ruangan : AC, TV, Kulkas, DVD</p>
                                </div>
                            </div>
                            <div class="media post_item">
                               
                                <div class="media-body">
                                    <a href="accommodation.php">
                                        <h3>Home</h3>
                                    </a>
                                    <p>Fasilitas Ruangan : Sofa, Spring Bed, TV, Kulkas, DVD Player</p>
                                </div>
                            </div>
                            
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->


<?php
include "templates/footer.php";
?>