<?php

include '../koneksi.php';


$user_id = $_POST['user_id']; 
$buku_id = $_POST['buku_id'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];


mysqli_query($koneksi,"INSERT INTO ulasan_buku values('','$user_id','$buku_id', '$ulasan', '$rating')");

header("location:ulasan.php?pesan=simpan");

?>