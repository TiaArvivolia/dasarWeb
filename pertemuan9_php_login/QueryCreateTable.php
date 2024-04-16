<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prakwebdb";

// Membuat koneksi ke database
$connect = mysqli_connect($servername, $username, $password, $dbname);

// Cek koneksi
if(!$connect) {
    die("Koneksi gagal: " .mysqli_connect_error() );
}

// Query untuk membuat tabel
$sql = "CREATE TABLE user(
    id INT(11) PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
)";

// Query untuk memasukkan isi ke tabel user
$sql = "INSERT INTO user (id, username, password)
VALUES ('1', 'admin', '123') 
)";

if(mysqli_query($connect, $sql)) {
    echo "Tabel user berhasil dibuat";
} else {
    echo "Error creating table: " .mysqli_error($connect);
}

mysqli_close($connect);