<?php 

include "../koneksi.php";

$koleksi_id = $_POST['koleksi_id'];
$user_id = $_POST['user_id'];
$buku_id = $_POST['buku_id'];


mysqli_query($koneksi, "UPDATE koleksipribadi SET user_id='$user_id',
buku_id='$buku_id' WHERE koleksi_id='$koleksi_id'");


header("Location:koleksipribadi.php?pesan=update");

?>