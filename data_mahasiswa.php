<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http_equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    
    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Mahasiswa
                
                <form action="" method="post">
		<input type="text" name="kata="Masuk_kunci" placeholderkan kata kunci" />
		<input type="submit" name="submit" value="Cari" />
	</form>
                
            </div>
            <div class="card-body">
                <a href="index.php" class="btn btn-primary">Tambah Data</a>
                
                <table class="table table-bordered">
                <tr>
                
                
                
                    <th>Nama Mahasiswa</th>
                    <th>npm</th>
                    <th>tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>jenis kelamin</th>
                    <th>alamat</th>
                    <th>kodepos</th>
                    <th>AKSI</th>
                </tr>
                <?php   
                    include "koneksi.php";
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * FROM tb_mahasiswa");
                    while($data=mysqli_fetch_array($tampil))
                    {
                ?>
                <tr>     


                    <td> <?php echo $data['npm']; ?> </td>
                    <td> <?php echo $data['nama']; ?> </td>
                    <td> <?php echo $data['tempat_lahir']; ?> </td>
                    <td> <?php echo $data['tangga_lahir']; ?> </td>
                    <td> <?php echo $data['jenis_kelamin']; ?> </td>
                    <td> <?php echo $data['alamat']; ?> </td>
                    <td> <?php echo $data['kode_post']; ?> </td>
                    <td>
                    <a href="edit_mahasiswa.php?idnamasiswa=<?php echo $data['idnamasiswa'];?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete.php?idnamasiswa=<?php echo $data['idnamasiswa'];?>" class="btn btn-sm btn-danger">Hapus</a>
                    
                    </td>
                </tr>
                
                <?php } ?>


            </table>

            </div>
        </div>
    </div>


</body>
</html>

