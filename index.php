<?php

include "incl/connect.inc.php";
include "templates/header.php";

$kueri = "select * from tb_manag_site where menu = 'Home'";
$qr  = mysqli_query($connect, $kueri);

?>
</style>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
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
    <!-- Preloader Start

 slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/slide/slide1.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Gadjah Mada Homestay</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".3s">Univercity Club</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/slide/slide2.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Gadjah Mada Homestay</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".3s">Yogyakarta</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/slide/slide3.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".3s">Gadjah Mada Homestay</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".3s">Wisma Kaliurang</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
 
	<?php
		//batas awal
		if(isset($_GET['menu'])){
		include"$_GET[menu].php";
		}
		elseif(isset($_POST['menu'])){
		include"$_POST[menu].php";
		}else{
		// batas akhir
	?>
 <!-- Make customer Start-->
 <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="assets/img/home/image.png" class="customar-img1" alt="">
                            <img src="assets/img/home/background.png" class="customar-img2" alt="">
                            <div class="service-experience heartbeat">
                                <h3>Homestay<br>C4</h3>
                            </div>
                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <span>Gadjah Mada Accommodation</span>
                           
                            <div class="caption-details">
                               
                                <?php
                                  while ($data = mysqli_fetch_array($qr)) :
                                      $isi_menu = $data['isi_menu'];
                                  ?>

                                      <?= $isi_menu ?>

                                  <?php endwhile; ?> </p>
                                <a href="about.php" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->




 <!-- echo"$isi_menu"; -->
			</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </tbody></table>
      	<?php
			}
		?>
	  
</script></html>
<?php
include "templates/footer.php";
?>