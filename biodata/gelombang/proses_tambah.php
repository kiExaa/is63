<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $tanggal = $_POST['tgl_gel'];
    $gelombang = $_POST['gelombang'];

    #3. Query Insert (proses tambah data)
    $query = "INSERT INTO gelombang (tgl_gel, gelombang) 
    VALUES ('$tanggal','$gelombang')";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>