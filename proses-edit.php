<?php

include("config.php");


if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $tmp_lhr = $_POST['tmp_lhr'];
    $tgl_lhr = $_POST['tgl_lhr'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "UPDATE siswa SET nama='$nama',tmp_lhr='$tmp_lhr', tgl_lhr = '$tgl_lhr', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
    $query = mysqli_query($db, $sql);

        if( $query ) {

            header('Location: index.php');
        }
        else {
            header('Location: gagal.php?status=gagal');
        }
}
else {
    die("Akses dilarang...");
}

?>