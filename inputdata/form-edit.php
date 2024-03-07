<?php

include("config.php");

if(isset($_get['id'])){
    header('location : list-siswa.php');
}

$id = $_get['id'];

$sql = "SELECT * FROM data_casis.php WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) <1 ){
    die("data tidak ditemukan....");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir edit siswa | SMK CODING</title>
</head>
<body>
    <header>
        <h3> Formulir Edit Ayam </h3>
    </header>

    <form action="proses-edit.php" method="POST">

    <fieldset>

    <input type="hidden" name="id" value="<?php echo $siswa['id']?>"/>

    <p>
        <label for="nama">nama:</label>
        <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama']?>"/>
    </p>
    <p>
        <label for="nisn">NISN:</label>
        <textarea name="nisn"><?php echo $siswa['nisn']?><textarea>
    </p>
    <p>
        <label for="jenis_kelamin">jenis kelamin:</label>
        <?php $jk = $siswa['jneis_kelamin'];?>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : ""; ?>>laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'perempuan') ? "checked" : ""; ?>>perempuan</label>
    </p>
    <p>
        <label for="alamat">alamat</label>
        <textarea name="alamat"><?php echo $siswa['alamat']?><textarea>
    </p>
    <p>
        <label for="sekolah_asal">sekolah asal:</label>
        <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal']?>"/>
    </p>
    <p>
        <input type="submit" value="Simpan" name="simpan">
    </p>

    </fieldset>

    </form>
</body>
</html>