<?php 
include "incl/connect.inc.php" ;
include "templates/header.php";
			
$kueri = "select distinct(a.tipe_kamar), a.id_tipe, a.harga, b.fasilitas, a.pict 
								from tb_kamar_tipe a, tb_kamar b 
								where a.id_tipe = b.tipe
								group by a.tipe_kamar
								order by a.id_tipe asc";


?>

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

$qry  = mysqli_query($connect,$kueri);
while($data = mysqli_fetch_array($qry)) {		
					$id_tipe=$data['id_tipe'];	
					$tipe_kamar=$data['tipe_kamar'];	
					$harga=$data['harga'];
					$fasilitas=$data['fasilitas'];
                    $pict=$data['pict'];
                    
?>
  
 <!-- <section class="blog_area section-padding"> -->
 &nbsp;
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0">
                                
                                <a href='index.php?menu=reservations&id=<?= $id_tipe ?>'>
                                    <img src='<?= $pict ?>' height='auto' style="object-fit: contain;" class="w-100 px-md-3 px-md-5" />
                                </a>
                                  
                                </span>
                                    </td>
                                   
                                 
                            </div>

                            
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
                            <h5 class="green">Rate : <?php echo"$harga" ?></h1>
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
                        
      
       <a class="btn more-btn1"
        <?php echo"<a href='index.php?menu=reservations&id=$id_tipe'>Book Now</a>"; ?></div>
       </a>
       
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Area =================-->
               
                    <?php 
} ?>


                   

</script></html>
<?php
include "templates/footer.php";
?>