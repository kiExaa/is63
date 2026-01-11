<?php 
include_once("../koneksi.php");

if (!isset($_GET['id'])) {
    die("ID tidak ditemukan");
}

$idhapus = $_GET['id'];

$qry = "DELETE FROM biodata WHERE id='$idhapus'";
$hapus = mysqli_query($koneksi, $qry);

if ($hapus) {
    header("Location: index.php");
} else {
    echo "Gagal hapus data: " . mysqli_error($koneksi);
}
?>
