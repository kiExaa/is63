<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $jurusan = $_POST['jurusan'];

    
    #3. Query Update (proses edit data)
    $query = "UPDATE jurusan SET kode='$kode',jurusan='$jurusan' 
    WHERE id='$id'";
    
    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>