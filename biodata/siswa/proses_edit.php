<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $tp_lahir = $_POST['tempat_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $jk = $_POST['jns_kelamin'];
    $jur = $_POST['jurusan'];

    #3. Query Insert (proses tambah data)
    $query = "UPDATE biodata SET nama='$nama', nisn='$nisn', tempat_lahir='$tp_lahir', 
    tgl_lahir='$tgl_lahir', alamat='$alamat', email='$email', jns_kelamin='$jk',  jurusan='$jur' 
    WHERE id='$id'";

    $tambah = mysqli_query($koneksi,$query);

    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>z