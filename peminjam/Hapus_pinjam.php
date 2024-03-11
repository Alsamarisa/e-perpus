<?php 

include "../koneksi.php";

$peminjaman_id = $_GET['peminjaman_id'];

mysqli_query($koneksi, "DELETE FROM peminjaman WHERE peminjaman_id='$peminjaman_id'");

header("Location:pinjam.php?pesan=hapus")

?>