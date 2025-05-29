<?php
include "config.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result - Data Student</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <a href="index.php"><button>Kembali</button></a>
    <h2>Daftar Student</h2>
    <table>
        <tr>
            <th>ID</th><th>Nama</th><th>Alamat</th><th>Jenis Kelamin</th><th>Aksi</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM student");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['jenis_kelamin']}</td>
                <td>
                    <a href='result.php?edit={$row['id']}'><button>UPDATE</button></a>
                    <a href='proses.php?delete={$row['id']}' onclick=\"return confirm('Yakin ingin menghapus?')\"><button>DELETE</button></a>
                </td>
            </tr>";
        }
        ?>
    </table>

    <?php
    if (isset($_GET['edit'])):
        $id = $_GET['edit'];
        $result = $conn->query("SELECT * FROM student WHERE id='$id'");
        $data = $result->fetch_assoc();
    ?>
    <h2>Edit Data Student</h2>
    <form method="POST" action="proses.php">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="nama" value="<?= $data['nama'] ?>" required><br>
        <input type="text" name="alamat" value="<?= $data['alamat'] ?>" required><br>
        <select name="jenis_kelamin" required>
            <option value="">-- Pilih --</option>
            <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select><br>
        <button type="submit" name="update">Update</button>
    </form>
    <?php endif; ?>
</div>
</body>
</html>