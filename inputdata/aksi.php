<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
mysqli_query($conn, "insert into user values('','$nama', '$alamat', '$pekerjaan')");
?>
