<?php
$username = $_POST['username'];
$password = $_POST['password'];

echo '<style>
    body {
        font-family: Times New Roman;
        font-size: 20px;
        font-weight: bold;
    }
    b {
        font-size: 24px;
        color: black;
    }
    span.admin {
        color: blue;
        font-weight: bold;
        font-size: 28px;
    }
    a {
        color: purple;
        text-decoration: underline;
        font-weight: lighter;
    }
    .error {
        color: red;
        font-weight: bold;
    }
    .myname {
            width: 100%;
            text-align: center;
            position: absolute;
            bottom: 0;
            left: 0;
            padding: 1px;
            font-size: 8px;
            font-family:monospace;
            font-weight: lighter;
        }
</style>';

if ($username === "admin" && $password === "admin") {
    echo "Login berhasil!<br><br>";
    echo "Selamat datang, <span class=\"admin\">admin</span>.<br><br>";
    echo '<a href="soal_2.php">kembali ke halaman login</a>';
    echo "<span class='myname'><p>[2373012] - [Felix Marcelino]©</p>";
} else {
    echo "<span class='error'>Username : <b>" . $username . "</b> Tidak Terdaftar!</span><br><br>";
    echo '<a href="soal_2.php">kembali ke halaman login</a>';
    echo "<span class='myname'><p>[2373012] - [Felix Marcelino]©</p>";
}
?>