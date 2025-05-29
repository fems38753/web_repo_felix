<?php
include "config.php";

if (isset($_POST['input'])) {
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        $conn->query("INSERT INTO student (id, nama, alamat, jenis_kelamin) VALUES ('$id', '$nama', '$alamat', '$jenis_kelamin')");
        header("Location: index.php");
    } else {
        echo "ID tidak boleh kosong!";
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM student WHERE id=$id");
    header("Location: index.php");
}

if (isset($_POST['update'])) {
    if (!empty($_POST['id'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];

        $conn->query("UPDATE student SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id='$id'");
        header("Location: index.php");
    } else {
        echo "ID untuk update tidak tersedia!";
    }
}
?>
