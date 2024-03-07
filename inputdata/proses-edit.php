<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nisn = $_POST['nisn'];
    $jk = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "UPDATE data_casis SET nama='$nama', nisn='$nisn', jenis_kelamin='$jk', alamat='$alamat', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    
    if($query){
        header('location : data-casis.php');
    } else{
        die("gagal menyimpan perubahan....");
    }

    
}else{
    die("akses dilarang....");
}

?>