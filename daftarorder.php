
<link rel="stylesheet" href="assets/css/style.css">

<?php
include "incl/connect.inc.php";

$kueri = "select a.id, a.nm_order, b.jenis_order, a.harga from tb_order a, tb_order_jenis b
          where a.id_jenis = b.id_jenis_order
          order by b.jenis_order, a.nm_order asc";

$proses = mysqli_query($connect, $kueri);

?>

<?php
$jenis = [];
$rows = [];
while ($data = mysqli_fetch_array($proses)) :
  $rows[] = $data;
  array_push($jenis, $data['jenis_order']);
?>

<?php
endwhile;

$menus = [];
foreach ($rows as $value) {
  foreach ($jenis as $j) {
    if ($j === $value['jenis_order']) {
      $menus[$j][] = $value;
      break;
    }
  }
}




?>
<div class="container">

  <h1 class="pt-40 text-center">Daftar Menu</h1>
  <div class="row pt-40">

    <?php foreach ($menus as $jenis_order => $orders) : ?>
      <div class="col">

        <h4>Order <?= $jenis_order ?></h4>
        <!-- Table  -->
        <table class="table table-responsive-md ">
          <!-- Table head -->
          <thead>
            <tr>
              <th width="60%">Nama Barang <?= $jenis_order ?></th>
              <th width="40%">Harga</th>
            </tr>
          </thead>
          <!-- Table head -->

          <!-- Table body -->
          <tbody>
            <?php foreach ($orders as $order) : ?>
              <tr>
                <td><?= $order['nm_order'] ?></td>
                <td><?= $order['harga'] ?></td>
              </tr>
            <?php endforeach; ?>

            <?php if (count($orders) < 1) : ?>
              <tr>
                <td colspan=4>
                  <div>Belum ada data</div>
                </td>
              </tr>
            <?php endif; ?>

            <h5>Total Menu: <?= count($orders) ?></h5>

          </tbody>
          <!-- Table body -->
        </table>
        <!-- Table  -->
      </div>
    <?php endforeach; ?>
  </div>
</div>