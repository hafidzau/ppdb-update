<?php

include("config.php");

if(isset($_get['id'])){

    $id = $_get['id'];

    $sql = "DELETE FROM data_casis WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location: data-casis.php');
    } else{
        die("gagal menghapus...");
    }

}else{ 
    die("akses dilarang....");
}

?>