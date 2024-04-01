<?php
$umur;

if (isset($umur) && $umur >= 18) {
    echo "Anda sudah dewasa.";
} else {
    echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan. <br><br>";
}


$data = array("nama" => "Jane", "usia" => 25);
if(isset($data["nama"])) {
    echo "Nama: " .$data["nama"]."<br>";
    echo "Usia: " .$data["usia"];
} else {
    echo "Variabel 'nama' tidak ditemukan dalam array." ;
}

echo "<br>";

$nama = ""; // Variabel string kosong
if (empty($nama)) {
    echo "Nama tidak terdefinisi atau kosong.";
} else {
    echo "Nama terdefinisi dan tidak kosong.";
}