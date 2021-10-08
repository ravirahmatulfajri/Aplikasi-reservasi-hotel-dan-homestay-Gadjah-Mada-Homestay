<?php

include "incl/connect.inc.php";
include_once("incl/function.php");

//print_r($_GET);
$kueri = "select * from tb_kamar_tipe where id_tipe = $_GET[id]";
$qr  = mysqli_query($connect, $kueri);
while ($data = mysqli_fetch_array($qr)) {
    $id_tipe = $data['id_tipe'];
    $tipe_kamar = $data['tipe_kamar'];
    $pict = $data['pict'];
    // $location=$data['location'];
}


$tglp = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
$no_pesan = date("00jnYHis", $tglp);

$tgl_ci = date("j/n/Y", $_GET['in']);
$tgl_co = date("j/n/Y", $_GET['out']);
$tgl_cci = $_GET['in'];
$tgl_cco = $_GET['out'];

$tanggal = tgl_indo(date('Y-m-d-D'));

?>


<!-- CSS here -->
<link rel="stylesheet" href="assets/css/style.css">




<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />

<!-- ================ contact section start ================= -->
<form onSubmit="return checkrequired(this)" class="form-contact contact_form" id="form1" name="form1" method="post" action="functions.php">
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Silahkan isi data pribadi anda :</h2>
                </div>
                <div class="col-lg-8">
                    <!-- <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate"> -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control valid" name="required_nama" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control valid" name="required_email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="required_phone" id="phone" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Phone 628'" placeholder="Enter Phone 628">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="required_city" id="city" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter City'" placeholder="Enter City">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="required_alamat" id="alamat" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Alamat'" placeholder="Enter Alamat">
                            </div>
                        </div>
                        <div class="col-12">
                            <td class="contact-title">Status Stay </td><span class="red"> *</span> <br>
                            <?php
                            $kueri1 = "select * from tb_kamar where tipe = $id_tipe order by nm_kamar";
                            $qr1  = mysqli_query($connect, $kueri1);
                            while ($data1 = mysqli_fetch_array($qr1)) {
                                $id_kamar = $data1['id_kamar'];
                                $nm_kamar = $data1['nm_kamar'];
                                $status = $data1['status'];
                                $location = $data1['location'];


                                if ($status <> 'use') {
                                    $perintahnya = "select * from tb_pesan_kamar where id_kamar = $id_kamar and tgl_checkin = $tgl_cci ";
                                    $jalankanperintahnya = mysqli_query($connect, $perintahnya);
                                    $ada_apa_enggak = mysqli_num_rows($jalankanperintahnya);

                                    if ($ada_apa_enggak >= 1) {
                                        echo "<input type='checkbox' name='kamar_in_user' checked='checked' disabled='disabled' />  $nm_kamar (status = <span class='red'>use/booking</span>)<br />";
                                    } else {
                                        echo "<input type='checkbox' name='required_id_kamar[]' id='required_id_kamar' value='$id_kamar' /> $nm_kamar (status = <span class='green'>kosong</span>)<br />";
                                    }
                                } else {
                                    echo "<input type='checkbox' name='kamar_in_user' checked='checked' disabled='disabled' />  $nm_kamar (status = <span class='red'>use/booking</span>)<br />";
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input name="reservation_new" type="submit" class="btn more-btn1" id="kirim" value="Kirim">
                        <input name="reset" type="reset" class="btn more-btn1" id="Reset" value="Reset">
                        <font color="#FF0000" face="'Lato', sans -serif"><br> (*) Harus diisi.</font>
                        </p>
                        </td>
                    </div>
</form>
</div>
<div class="col-lg-3 offset-lg-1">
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
            <!-- <h3>Buttonwood, California.</h3> -->
            <span> Tanggal :</span><br> <b><?php echo "$tanggal" ?></b>
        </div>
    </div>
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
            <!-- <h3>+1 253 565 2365</h3> -->
            <td>No Pesan :</td><br><b><?php echo "REC-$no_pesan" ?></b>
            <input name="no_pesan" type="hidden" value="<?php echo "REC-$no_pesan" ?>"></td>
        </div>
    </div>
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
            <!-- <h3>support@colorlib.com</h3> -->
            <td height="25" class="blue">Tgl Chek In :</td><br>
            <td class="blue"><b><?php echo "$tgl_ci" ?></b>
                <input name="tgl_cci" type="hidden" value="<?php echo "$tgl_cci" ?>">
            </td>
        </div>
    </div>
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
            <!-- <h3>support@colorlib.com</h3> -->
            <td height="25" class="blue">Tgl Cek Out :</td><br>
            <td class="blue"><b><?php echo "$tgl_co" ?></b>
                <input name="tgl_cco" type="hidden" value="<?php echo "$tgl_cco" ?>">
            </td>
        </div>
    </div>
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
            <!-- <h3>support@colorlib.com</h3> -->
            <td height="25" class="blue">Tipe :</td><br>
            <td class="blue"><b><?php echo "$tipe_kamar" ?></b>
                <input name="id_tipe" type="hidden" value="<?php echo "$id_tipe" ?>">
            </td>
        </div>
    </div>
    <div class="media contact-info">
        <span class="contact-info__icon"><i class="ti-home"></i></span>
        <div class="media-body">
            <!-- <h3>support@colorlib.com</h3> -->
            <td height="25" class="blue">Location :</td><br>
            <td class="blue"><b><?php echo "$location" ?></b>
                <input name="location" type="hidden" value="<?php echo "$location" ?>">
            </td>
        </div>
    </div>
</div>
</div>
</div>
</form>
</section>