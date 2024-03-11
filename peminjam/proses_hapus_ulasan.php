<?php 

include "../koneksi.php";

$ulasan_id = $_GET['ulasan_id'];

mysqli_query($koneksi, "DELETE FROM ulasan_buku WHERE ulasan_id='$ulasan_id'");

header("Location:ulasan.php?pesan=hapus")

?>