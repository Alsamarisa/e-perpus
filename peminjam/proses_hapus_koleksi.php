<?php 

include "../koneksi.php";

$koleksi_id = $_GET['koleksi_id'];

mysqli_query($koneksi, "DELETE FROM koleksipribadi WHERE koleksi_id='$koleksi_id'");

header("Location:koleksipribadi.php?pesan=hapus")

?>