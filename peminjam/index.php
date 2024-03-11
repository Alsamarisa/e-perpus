<?php
include 'header.php';
include 'navbar.php';
?>
<div class="content mt-3">
	<div class="row">
		<h6>DATA BUKU</h6>
	<table class="table table-striped table-hover text-center">
				<thead>
					<tr>
						<th>No</th>
						<th>JUDUL</th>
						<th>PENULIS</th>
						<th>PENERBIT</th>
						<th>TAHUN TERBIT</th>
					</tr>
				</thead>
				<tbody>
					 <?php 
					 include '../koneksi.php';
					 $no = 1;
					 $data = mysqli_query($koneksi,"select * from buku");
					 while($d = mysqli_fetch_array($data)){
					 ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $d['judul']; ?></td>
							<td><?php echo $d['penulis']; ?></td>
							<td><?php echo $d['penerbit']; ?></td>
							<td><?php echo $d['tahun_terbit']; ?></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
	</div>
</div>

</div>

</div>