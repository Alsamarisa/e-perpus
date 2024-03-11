

<?php
include 'header.php';
include 'navbar.php';
?>

<?php
require_once "../koneksi.php";
if (isset($_GET['koleksi_id'])) {
    $koleksi_id = ($_GET["koleksi_id"]);
    $query = "SELECT * FROM koleksipribadi WHERE koleksi_id='$koleksi_id'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
    $d = mysqli_fetch_assoc($result);
    if (!count($d)) {
        echo "<script>alert('Data Peminjam tidak ditemukan pada database');window.location='index.php';</script>";
    }
} else {
    echo "<script>alert('Masukkan data id.');window.location='index.php';</script>";
}
$no = 1;
$sql = "SELECT * FROM koleksipribadi
INNER JOIN user ON koleksipribadi.user_id = user.user_id
INNER JOIN buku ON koleksipribadi.buku_id = buku.buku_id WHERE 
koleksi_id='$koleksi_id'
";
$query = mysqli_query($koneksi, $sql);
while ($d_koleksi = mysqli_fetch_array($query)) {
?>
<div class="container pt-4 px-4">
    <div class="row g-4">
        <div class="col">
            <div class="bg-primary rounded h-100 p-4">
                <h6 class="mb-4">EDIT koleksipribadi</h6>
                <form method="POST" action="proses_update_koleksi.php">
                    <!-- Input tersembunyi untuk user_id dan buku_id -->
                    <input type="hidden" name="user_id" value="<?php echo $d_koleksi['user_id']; ?>">
                    <input type="hidden" name="buku_id" value="<?php echo $d_koleksi['buku_id']; ?>">
                    
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">PEMINJAM ID</label>
                        <div class="col-sm-10">
                            <input name="koleksi_id" type="text" class="form-control" value="<?php echo $d_koleksi['koleksi_id']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">USER ID</label>
                        <div class="col-sm-10">
                            <input name="username" type="text" class="form-control" value="<?php echo $d_koleksi['username']; ?>" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputText3" class="col-sm-2 col-form-label">BUKU ID</label>
                        <div class="col-sm-10">
                              <select class="form-control mt-2" name="buku_id">
                             <option><?php echo $d_koleksi['judul'] ?></option>
                                <?php
                                 $data = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($d_buku = mysqli_fetch_array($data)) {
                                 echo '<option value="' . $d_buku['buku_id'] . '">' . $d_buku['judul'] . '</option>';
                        }
                        ?>
                    </select>
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
}
?>