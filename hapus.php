<?php

include("config.php");

if( isset($_GET['id']) ){


    $id = $_GET['id'];


    $sql = "DELETE FROM siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);


    if( $query ){
        header('Location: index.php');
    } else {
        header('Location: gagal.php?status=gagal');
    }

} else {
    die("akses dilarang...");
}

?>