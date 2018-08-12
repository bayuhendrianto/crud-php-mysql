<?php

include("config.php");


if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}


$id = $_GET['id'];


$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);


if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Formulir Edit Mahasiswa</title>
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>
<div id="container">
    <header>
        <h2 style="color : blue">Formulir Edit Siswa</h2>
    </header>

        <form action="proses-edit.php" method="POST">
            <fieldset>
            <div class="box">
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                <div class="box-form1">
                    <p>
                        <label for="nama">Nama: </label>
                        <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                    </p>
                    </div>

                    <div class="box-form2">
                    <p>
                    <label for="nama">Tempat Lahir: </label>
                    <input type="text" name="tmp_lhr" placeholder="Tempat Lahir" value="<?php echo $siswa ['tmp_lhr'] ?> " />
                    </p>
                    </div>

                    <div class="box-form3">
                    <p>
                        <label for="nama">Tanggal Lahir: </label>
                        <input type="date" name="tgl_lhr" value="<?php echo $siswa ['tgl_lhr'] ?> " />
                    </p>
                    </div>

                    <div class="box-form4">
                    <p>
                        <label for="alamat">Alamat: </label>
                        <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
                    </p>
                    </div>

                    <br>
                    <div class="box-form5">
                    <p>
                        <label for="jenis_kelamin">Jenis Kelamin: </label>
                        <?php $jk = $siswa['jenis_kelamin']; ?>
                        <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                    </p>
                    </div>

                    <div class="box-form6">
                    <p>
                        <label for="agama">Agama: </label>
                        <?php $agama = $siswa['agama']; ?>
                        <select name="agama">
                            <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                            <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                            <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                            <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                            <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                        </select>
                    </p>
                    </div>

                    <div class="box-form7">
                    <p>
                        <label for="sekolah_asal">Sekolah Asal: </label>
                        <input type="text" name="sekolah_asal" placeholder="nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                    </p>
                    </div>

                    <div class="box-form8">
                    <p>
                        <input type="submit" value="Simpan" name="simpan" />
                    </p>
                    </div>
                <br>
            <br>
            <div class="a">
            <a href="index.php" class="btn btn-default">Back</a>
            </div>

            </div>
            </fieldset>
        </form>
</div>
</body>
</html>