<?php 
//koneksi dbms
$koneksi =mysqli_connect("localhost","root", "", "mobil");
//apakah tombol submit sudah ditekan apa belum
if(isset($_POST["submit"])) {

    $nama = $_POST["nama"];
    $transmisi= $_POST["transmisi"];
    $mesin= $_POST["mesin"];
    $harga =$_POST["harga"];
//query insert ke database
$query= "INSERT INTO data_mobil VALUES ('', '$nama', '$transmisi', '$mesin', '$harga')";
mysqli_query($koneksi, $query);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data Mobil</title>
</head>
<body>
    <h1>Tambah Data Mobil</h1>
    <form action="" method="POST">
    <ul>
        <li>
            <label for="nama"> Nama : </label>
            <input type="text" name="nama" id="Nama">
        </li>
        <li>
            <label for="transmisi"> Transmisi : </label>
            <input type="text" name="transmisi" id="transmisi">
        </li>
        <li>
            <label for="mesin"> Mesin : </label>
            <input type="text" name="mesin" id="mesin">
        </li>
        <li>
            <label for="harga"> Harga : </label>
            <input type="text" name="harga" id="harga">
        </li>
        <li>
            <button type="submit" name="submit">Kirim</button>
        </li>
        
    </ul>
    </form>
</body>
</html>