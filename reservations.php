<?php
include "./incl/connect.inc.php";
include_once("./incl/function.php");
include './incl/config.php';

$kueri = "select * from tb_kamar_tipe where id_tipe = $_GET[id]";
$qr  = mysqli_query($connect, $kueri);
while ($data = mysqli_fetch_array($qr)) {
  $id_tipe = $data['id_tipe'];
  $tipe_kamar = $data['tipe_kamar'];
}

?>

<div class="text-center pt-40">
  <h2>
    <?= $web_title ?>
  </h2>
  <span>
    YOGYAKARTA - INDONESIA
  </span>
</div>

<!-- Booking Room Start-->
<div class="booking-area" style="margin: 6rem 0 !important;">
  <div class="container">
    <div class="row ">
      <div class="col-12">
        <h4 class="pb-10"><strong>Cek Status Kamar </strong></h4>
        <form onSubmit="return checkrequired(this)" id="form1" name="form1" method="post" action="functions.php">
          <div class="booking-wrap d-flex justify-content-between align-items-center">

            <!-- select in date -->
            <div class="single-select-box mb-30">
              <!-- select out date -->
              <div class="boking-tittle">
                <span> Check In Date:</span>
              </div>
              <div class="boking-datepicker">

                <input id="datepicker1" data-provide="datepicker" data-date-format="m/d/Y" name="tgl_cekin" autocomplete="off" value="<?= date('m/d/Y', strtotime($Date . ' + 1 days')); ?>" />
              </div>
            </div>




            <!-- Single Select Box -->
            <div class="single-select-box mb-30">
              <!-- select out date -->
              <div class="boking-tittle">
                <span>Check OutDate:</span>
              </div>
              <div class="boking-datepicker">
                <input id="datepicker2" data-provide="datepicker" data-date-format="m/d/Y" name="tgl_cekout" autocomplete="off" value="<?= date('m/d/Y', strtotime($Date . ' + 2 days')); ?>" />
              </div>
            </div>

            <!-- Single Select Box -->
            <div class="single-select-box mb-30">
              <div class="boking-tittle">
                <span>Rooms:</span>
              </div>
              <div class="select-this">
                <?= $tipe_kamar ?> <input name="id_tipe" type="hidden" value="<?php echo "$id_tipe" ?>">
              </div>
            </div>
            <!-- Single Select Box -->
            <div class="single-select-box pt-45 mb-30">
              <input name="checking_room" type="submit" class="btn select-btn" id="kirim" value="Cek Kamar">
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>