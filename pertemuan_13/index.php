<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Input Data Student</h2>
    <form method="POST" action="proses.php">
        <input type="text" name="id" placeholder="Id" required><br>
        <input type="text" name="nama" placeholder="Nama" required><br>
        <input type="text" name="alamat" placeholder="Alamat" required><br>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih --</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <button type="submit" name="input">Simpan</button>
    </form>

    <br>
    <a href="result.php"><button>Lihat Daftar Student</button></a>
</div>
</body>
</html>
