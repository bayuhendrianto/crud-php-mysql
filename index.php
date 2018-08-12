<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru</title>
</head>
<link rel="stylesheet" type="text/css" href="style3.css">
<body>

<div id="container">
    <header>
        <h1 style="font-family: cursive; comic sans">Pendaftaran Mahasiswa Baru</h1>
        <h1 style="font-family: cursive; comic sans">STT PELITA BANGSA</h1>
    </header>

    <nav>
        <ul>
            <li class="active">
            <a href="home.php" title="Home">Home</a></li>
            <li><a href="#" title="About">About</a></li>
            <li><a href="#" title="Contact">Contact</a></li>
        </ul>
    </nav>


    <div class="sidebar">
        <div class="widget-box">
            <h3 class="title">Social Media</h3>
            <ul>
                <li><a href="https://www.facebook.com/bayu.hendrianto.1995">Facebook</a></li>
                <li><a href="https://www.instagram.com/bayu_hendrianto/?hl=id">Instagram</a></li>
                <li><a href="https://twitter.com/bayuhendrianto">Twitter</a></li>
                <li><a href="https://github.com/bayuhendrianto">Github</a></li>
                <li><a href="https://plus.google.com/u/0/104682340260150092364">Google +</a></li>
            </ul>
        </div>
      </div>

        <div id="content">
            <?php include("config.php"); ?>

        <!DOCTYPE html>
        <html>
        <head>
            <title>Pendaftaran Mahasiswa Baru</title>
        </head>

            <body>
            <br>
            <h2 style="font-family: cursive; comic sans">SISWA YANG SUDAH TERDAFTAR</h2>
            <br> 
            <br>
                <table border="1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM siswa";
                        $query = mysqli_query($db, $sql);

                        while($siswa = mysqli_fetch_array($query)){
                            echo "<tr>";

                            echo "<td>".$siswa['id']."</td>";
                            echo "<td>".$siswa['nama']."</td>";
                            echo "<td>".$siswa['tmp_lhr']."</td>";
                            echo "<td>".$siswa['tgl_lhr']."</td>";
                            echo "<td>".$siswa['alamat']."</td>";
                            echo "<td>".$siswa['jenis_kelamin']."</td>";
                            echo "<td>".$siswa['agama']."</td>";
                            echo "<td>".$siswa['sekolah_asal']."</td>";

                            echo "<td>";
                            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                            echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                            echo "</td>";

                            echo "</tr>";
                        }
                        ?>

                    </tbody>
                </table>
                <br>


                <div class="a">
                 <a href="form-daftar.php" class="btn btn-default">Tambah Baru</a>  
                <br>
                <br>
                <p>Total: <?php echo mysqli_num_rows($query) ?></p>
                </div>

        <div class="pesan">
            <?php if(isset($_GET['status'])): ?>
                <p>
                    <?php
                        if($_GET['status'] == 'sukses'){
                            echo "Pendaftaran siswa baru berhasil!";
                        } else {
                            echo "Pendaftaran gagal!";
                        }
                    ?>
                </p>
            <?php endif; ?>
        </div>

            </body>
        </html>
        </div>
              <footer>
                <p>&copy; 2018 - Bayu Hendrianto</p>
              </footer>
              
        </div>
    </body>
</html>