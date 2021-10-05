<?php
include "incl/connect.inc.php";

$kueri = "select distinct(a.tipe_kamar), a.id_tipe, a.harga, b.fasilitas, a.pict 
                    from tb_kamar_tipe a, tb_kamar b 
                    where a.id_tipe = b.tipe
                    group by a.tipe_kamar
                    order by a.id_tipe asc";

/*$kueri = "select a.id_kamar, a.nm_kamar, b.tipe_kamar, a.fasilitas, a.status from tb_kamar a, tb_kamar_tipe b
where a.tipe = b.id_tipe and a.status <> 'use' order by a.tipe, a.nm_kamar asc";
*/

//  query mendapatkan list kamar
$qry  = mysqli_query($connect, $kueri);

include './templates/header.php';

?>

<!-- slider Area Start-->
<div class="slider-area">
    <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/servicespage_hero.jpg">
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

<div class="container-fluid pt-40">

    <?php
    while ($data = mysqli_fetch_array($qry)) :
        $id_tipe = $data['id_tipe'];
        $tipe_kamar = $data['tipe_kamar'];
        $harga = $data['harga'];
        $fasilitas = $data['fasilitas'];
        $pict = $data['pict'];

    ?>


        <div class="container pt-15">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0">

                                <a href='index.php?menu=reservations&id=<?= $id_tipe ?>'>
                                    <img src='<?= $pict ?>' height='auto' style="object-fit: contain;" class="w-100 px-md-3 px-md-5" />
                                </a>

                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h1 class="red"><?php echo "$tipe_kamar" ?></h1><br>

                    <style>
                        th,
                        td {
                            padding: 0;
                        }

                        td p,
                        th p {
                            padding: 0;
                            margin: 0;
                        }
                    </style>

                    <table class="w-100 mb-25">
                        <tr>
                            <td>
                                <p>Room Rate</p>
                            </td>
                            <td>
                                <p><?= $harga ?></p>
                            </td>
                        </tr>
                        <tr>
                            <th style=" vertical-align: text-top;">
                                <p>Fasilitas Ruangan </p>
                            </th>
                            <td>
                                <!-- <ul>

                                        <?php
                                        foreach (explode(",", $fasilitas) as $key => $value) {
                                            echo '<li><p>' . $value . '</p></li>';
                                        };

                                        ?>
                                    </ul> -->
                                <p>
                                    <?= $fasilitas ?>
                                </p>
                            </td>
                        </tr>
                    </table>

                    <a class="btn more-btn1" <?php echo "<a href='index.php?menu=reservations&id=$id_tipe'>Book Now</a>"; ?></div>
                    </a>
                </div>
            </div>
        </div>


    <?php
    endwhile; ?>
</div>

<?php

include './templates/footer.php';
