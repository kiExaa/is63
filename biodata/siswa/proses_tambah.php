<?php
#1 Meng-koneksikan PHP ke MYSQL
include("../koneksi.php"); 

#2 Mengambil value dari form tambah
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$tp_lahir = $_POST['tempat_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$jk = $_POST['jns_kelamin'];
$jur = $_POST['jurusan'];
$gelombang = $_POST['gelombang'];
$nama_foto = $_FILES['foto']['name'];
$tmp_foto = $_FILES['foto']['tmp_name'];

#3 Query Insert(proses tambah data)
$query = "INSERT INTO biodata (nama,nisn,tempat_lahir,tgl_lahir,alamat,email,jns_kelamin,jurusans_id,gelombangs_id,foto) 
VALUES ('$nama', '$nisn', '$tp_lahir', '$tgl_lahir', '$alamat', '$email', '$jk', '$jur','$gelombang','$nama_foto')";

move_uploaded_file($tmp_foto, "../fotosiswa/" . $nama_foto);

$tambah = mysqli_query($koneksi, $query);

#4 Jika berhasil triggernya apa?
if($tambah){
    header("location:index.php");
}else{
    echo "Data gagal ditambah";
}
?> 