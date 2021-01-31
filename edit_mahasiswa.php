<?php
    include "koneksi.php";
    $id = $_GET['idnamasiswa'];
    $ambildata = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa WHERE idnamasiswa='$id'");
    $datsa=mysqli_fetch_array($ambildata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-6">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Input Data Mahasiswa
            </div>
            <div class="card-body">
                <form action="" method="POST" class="form-item">

                    <div class="form-group">
                        <label for="nama">Nama Mahasiswa</label>
                        <input type="text" name="nama"    class="form-control colt-mb-9" placeholder="Masukkan Nama">
                    </div>

                    <div class="form-group">
                        <label for="npm">npm</label>
                        <input type="text" name="npm"  class="form-control colt-mb-9" placeholder="Masukkan NPM">
                    </div>

                    <div class="form-group">
                        <label for="tl">tempat lahir</label>
                        <input type="text" name="tl"  class="form-control colt-mb-9" placeholder="Masukkan tempat lahir">
                    </div>

                    <div class="form-group">
                        <label for="tanggal">tanggal lahir</label>
                        <input type="date" name="tanggal"  class="form-control colt-mb-9" placeholder="Masukkan tanggal lahir">
                    </div>

                    <div class="form-group">
                        <label for="jenis">jenis kelamin</label>
                        <input type="text" name="jenis"  class="form-control colt-mb-9" placeholder="Laki - laki / perempuan">
                    </div>

                    <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat"  class="form-control colt-mb-9" placeholder="alamat">
                    </div>

                    <div class="form-group">
                        <label for="kode">kode pos</label>
                        <input type="text" name="kode"  class="form-control colt-mb-9" placeholder="kode pos">
                    </div>

                    <button type="submit" class="btn btn-primary" name="simpan">SIMPAN</button>
                    <button type="reset" class="btn btn-danger">BATAL</button> 
                </form>

            </div>
        </div>
    </div>


</body>
</html>

<?php

        include "koneksi.php";
        if(isset($_POST['simpan']))
        {
            $nama       = $_POST['nama'];
            $npm        = $_POST['npm'];
            $tl         = $_POST['tl'];
            $tanggal    = $_POST['tanggal'];
            $jenis      = $_POST['jenis'];
            $alamat     = $_POST['alamat'];
            $kode       = $_POST['kode'];


            mysqli_query($koneksi, "UPDATE tb_mahasiswa  SET nama='$nama', npm='$npm', tempat_lahir='$tl', tangga_lahir='$tanggal', jenis_kelamin='$jenis', alamat='$alamat', kode_post='$kode' 
            ") or die(mysqli_error($koneksi));

            echo "<div align='center'><h5> Silahkan Tunggu, Data Sedang Diupdate....</h5></div>";
            echo "<meta http-equiv='refresh' content='1;url=http://localhost/mahasiswa/data_mahasiswa.php'>";
        }

?>