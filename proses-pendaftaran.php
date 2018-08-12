<?php

include("config.php");

if(isset($_POST['daftar'])){


    $nama = $_POST['nama'];
    $tmp_lhr = $_POST['tmp_lhr'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];


    $sql = "INSERT INTO siswa (nama,tmp_lhr, tgl_lhr, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$tmp_lhr', '$tgl_lhr', '$alamat', '$jk', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

        if( $query ) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: gagal.php?status=gagal');
        }

} else {
    die("Akses dilarang...");
}

?>