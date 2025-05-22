<?php
$name = $_POST['name'];
$position = $_POST['position'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

$errors = [];

if (empty($name)) {
    $errors[] = "Input Nama belum di isi!";
}
if (empty($password)) {
    $errors[] = "Input Password belum di isi!";
}
if (empty($confirm_password)) {
    $errors[] = "Input Confirm Password belum di isi!";
}
if (!empty($password) && !empty($confirm_password) && $password !== $confirm_password) {
    $errors[] = "Password dan Confirm Password belum sama!";
}

echo '<style>
    table {
        border-collapse: collapse;
        width: 400px;
        font-family: Times New Roman;
    }
    th {
        background-color: #ccc;
        font-size: 18px;
        padding: 10px;
        text-align: left;
    }
    td {
        padding: 8px;
    }
    a {
        text-decoration: underline;
        color: purple;
        font-family: Times New Roman;

    }
    p {
        color: red;
        font-family: Times New Roman;
    }
    .myname {
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 8px;
            left: 0;
            padding: 1px;
            font-size: 8px;
            font-family:monospace;
        }
</style>';

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    echo '<a href="soal_1.php">back</a>';
    echo "<span class='myname'>[2373012] - [Felix Marcelino]©";
} else {
    echo "<table border='0'>";
    echo "<tr><th colspan='2'>Data yang Anda Masukkan!</th></tr>";
    echo "<tr><td>Name</td><td>: $name</td></tr>";
    echo "<tr><td>Position</td><td>: $position</td></tr>";
    echo "</table><br>";
    echo '<a href="soal_1.php">back</a>';
    echo "<span class='myname'>[2373012] - [Felix Marcelino]©";
}
?>