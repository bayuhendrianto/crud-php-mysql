<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa</title>
</head>
<link rel="stylesheet" type="text/css" href="style2.css">
<body>

    <div id="container">
        <header>
            <h1 style="color: blue">Formulir Pendaftaran Siswa Baru</h1>
        </header>
        <form action="proses-pendaftaran.php" method="POST">
            <fieldset>
            <div class="box">
                <div class="box-form1">
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Nama Lengkap" />
                </p>
                </div>

                <div class="box-form2">
                <p>
                    <label for="tmp_lhr">Tempat Lahir: </label>
                    <input type="text" name="tmp_lhr" placeholder="Tempat Lahir" />
                </p>
                </div>

                <div class="box-form3">
                <p>
                    <label for="tgl_lhr">Tanggal Lahir: </label>
                    <input type="date" name="tgl_lhr" />
                </p>
                
                <div class="box-form4">
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" placeholder="Alamat"></textarea>
                </p>
                </div>

                <br>
                <div class="box-form5">
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                </div>

                <div class="box-form6">
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Atheis</option>
                    </select>
                </p>
                </div>

                <div class="box-form7">
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="Nama Sekolah" />
                </p>
                </div>

                <div class="box-form8">
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
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