<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root","", "mobil");

//ambil data dari database
$result = mysqli_query($koneksi, "SELECT * FROM data_mobil");
// var_dump($result);

//ambil data  (fetch) dari objek result

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mobil</h1>
    <table  border="2" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Transmisi</th>
            <th>Mesin</th>
            <th>Harga</th>
        </tr>
        
        <?php $i=1;?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td> <?= $i?> </td>
            <td>
            <a href="">Lihat</a>
            <a href="">Tutup</a>
            </td>
            <td> <?= $row['nama'] ?> </td>
            <td><?= $row['transmisi'] ?></td>
            <td><?= $row['mesin'] ?></td>
            <td><?= $row['harga'] ?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile;?>
    </table>
</body>
</html>