
<link rel="stylesheet" href="assets/css/style.css">
<?php
include "incl/connect.inc.php";

$total = 0;
$kueri = "select a.id_kamar, a.nm_kamar, b.tipe_kamar, a.fasilitas, a.status from tb_kamar a, tb_kamar_tipe b
where a.tipe = b.id_tipe order by a.tipe, a.nm_kamar asc";
$proses = mysqli_query($connect, $kueri);
?>

<div class="container">
	<h1 class="text-center pt-40">Daftar Kamar</h1>

	<!-- Table  -->
	<table class="table table-responsive-md btn-table">
		<!-- Table head -->
		<thead>
			<tr>
				<th width="20%">Tipe </th>
				<th width="15%">Kamar</th>
				<th width="50%">Fasilitas</th>
				<th width="15%">Status</th>
			</tr>
		</thead>
		<!-- Table head -->

		<!-- Table body -->
		<tbody>
			<?php while ($data = mysqli_fetch_array($proses)) {
				$id_kamar = $data['id_kamar'];
				$nm_kamar = $data['nm_kamar'];
				$tipe_kamar = $data['tipe_kamar'];
				$fasilitas = $data['fasilitas'];
				$status = $data['status'];
				$total++;

				if ($status == 'use') {
					$color = 'background-color:#ff3366;';
				} else if (($status <> 'use') and ($status <> 'free')) {
					$color = 'background-color:#ffcc66;';
				} else {
					$color = '';
				} ?>
				<tr>

					<td style="<?= $color; ?>"><?= $tipe_kamar ?></td>
					<td style="<?= $color; ?>"><?= $nm_kamar ?></td>
					<td style="<?= $color; ?>"><?= $fasilitas ?></td>
					<td style="<?= $color; ?>"><?= $status ?></td>
				</tr>

			<?php
			}
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
</div>