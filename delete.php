<?php
    include "koneksi.php";
    $id = $_GET['idnamasiswa'];
    $ambilData = mysqli_query($koneksi, "DELETE FROM tb_mahasiswa WHERE idnamasiswa = '$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/mahasiswa/data_mahasiswa.php'>";
?>