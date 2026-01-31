<?php
    #1. Meng-koneksikan PHP ke MySQL
    include("../koneksi.php");

    #2. Mengambil Value dari Form Tambah
    $id = $_POST['id'];
    $nidn = $_POST['nidn'];
    $nama = $_POST['nama'];
    $rumpun = $_POST['rumpun'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $nama_foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    
    if($nama_foto !=""){
        $qry = "SELECT * FROM dosen WHERE id='$id'";
        $hapus_foto = mysqli_query($koneksi,query: $qry);
        $data = mysqli_fetch_array($hapus_foto);
        $nama_foto_hapus = $data['foto'];
        $lokasi_foto = "../fotosiswa/$nama_foto_hapus";
        if(file_exists($lokasi_foto)){
          unlink($lokasi_foto);
        }


        $query = "UPDATE dosen SET nama='$nama', nidn='$nidn', rumpun='$rumpun', 
        email='$email', no_hp='$no_hp',foto='$nama_foto'
        WHERE id='$id'";

    

     #hapusfoto
    //  $lokasi_foto = "../fotosiswa/$nama_foto";
    //  if(file_exists($lokasi_foto)){
    //     unlink($lokasi_foto);
    // }

    move_uploaded_file($tmp_foto,"../fotosiswa/$nama_foto");


    }else{
    #3. Query Insert (proses tambah data)
     $query = "UPDATE dosen SET nama='$nama', nidn='$nidn', rumpun='$rumpun', 
        email='$email', no_hp='$no_hp',foto='$nama_foto'
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