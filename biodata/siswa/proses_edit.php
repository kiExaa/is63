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
    $gelombang = $_POST['gelombang'];
    $jur = $_POST['jurusan'];
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];

    if($nama_foto !=""){
        $qry = "SELECT * FROM biodata WHERE id='$id'";
        $hapus_foto = mysqli_query($koneksi,query: $qry);
        $data = mysqli_fetch_array($hapus_foto);
        $nama_foto_hapus = $data['foto'];
        $lokasi_foto = "../fotosiswa/$nama_foto_hapus";
        if(file_exists($lokasi_foto)){
          unlink($lokasi_foto);
        }


        $query = "UPDATE biodata SET nama='$nama', nisn='$nisn', tempat_lahir='$tp_lahir', 
    tgl_lahir='$tgl_lahir', alamat='$alamat', email='$email', jns_kelamin='$jk',gelombangs_id='$gelombang',  jurusans_id='$jur', foto='$nama_foto'
    WHERE id='$id'";

    

     #hapusfoto
    //  $lokasi_foto = "../fotosiswa/$nama_foto";
    //  if(file_exists($lokasi_foto)){
    //     unlink($lokasi_foto);
    // }

    move_uploaded_file($tmp_foto,"../fotosiswa/$nama_foto");


    }else{
    #3. Query Insert (proses tambah data)
    $query = "UPDATE biodata SET nama='$nama', nisn='$nisn', tempat_lahir='$tp_lahir', 
    tgl_lahir='$tgl_lahir', alamat='$alamat', email='$email', jns_kelamin='$jk',gelombangs_id='$gelombang',  jurusans_id='$jur' 
    WHERE id='$id'";
    }

   
    $tambah = mysqli_query($koneksi,$query);
    // $lokasi_foto = "./fotosiswa/$nama_foto";



    #4. Jika Berhasil triggernya apa? (optional)
    if($tambah){
        header("location:index.php");
    }else{
        echo "Data Gagal ditambah";
    }
?>