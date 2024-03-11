<?php

include '../koneksi.php';


$user_id = $_POST['user_id']; 
$buku_id = $_POST['buku_id'];


mysqli_query($koneksi,"INSERT INTO koleksipribadi values('','$user_id','$buku_id')");

header("location:koleksipribadi.php?pesan=simpan");

?>