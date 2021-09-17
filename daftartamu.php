<!-- <link href="images/styles.css" rel="stylesheet" type="text/css"> -->
<?php
include "incl/connect.inc.php";

$total = 0;
$kueri = "select a.id_tamu, a.nm_tamu, a.checkin, c.tipe_kamar, b.nm_kamar from tb_tamu a, tb_kamar b, tb_kamar_tipe c where a.id_kamar = b.id_kamar and b.tipe = c.id_tipe order by a.nm_tamu, a.checkin asc";
$proses = mysqli_query($connect, $kueri);

?>
<!-- CSS here -->
<link rel="stylesheet" href="assets/css/style.css">
<div class="container">

  <div class="row justify-content-center">
    <div class="col-8">
      <h1 class="text-center pt-40">Daftar tamu</h1>
      <!-- Table  -->
      <table class="table table-responsive-md btn-table">

        <!-- Table head -->
        <thead>
          <tr>
            <th width="30%">Nama Tamu</th>
            <th width="40%">Jam Tanggal Check In</th>
            <th width="15%">Tipe Kamar</th>
            <th width="15%">Nama Kamar</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <?php while ($data = mysqli_fetch_array($proses)) :
            $id_tamu = $data['id_tamu'];
            $nm_tamu = $data['nm_tamu'];
            $checkin = date("j/n/Y | H:i", $data['checkin']);
            $tipe_kamar = $data['tipe_kamar'];
            $nm_kamar = $data['nm_kamar'];
            $total++;
          ?>
            <tr>
              <td><?= $nm_tamu ?></td>
              <td><?= $checkin ?></td>
              <td><?= $tipe_kamar ?></td>
              <td><?= $nm_kamar ?></td>
            </tr>
          <?php
          endwhile;

          if ($total < 1) : ?>
            <tr>
              <td colspan=4>
                <div>Belum ada data</div>
              </td>
            </tr>
          <?php endif; ?>

          <h5>Total Records: <?= $total ?></h5>
        </tbody>
        <!-- Table body -->
      </table>
      <!-- Table  -->
    </div>

  </div>

</div>