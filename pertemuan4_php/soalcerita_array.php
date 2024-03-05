<?php
    $nilaiSiswa = [
        ['Alice', 85],
        ['Bob', 92], 
        ['Charlie', 78], 
        ['David', 64],
        ['Eva', 90],
    ];

    // Menghitung rata-rata kelas
    $totalNilai = 0;
    foreach ($nilaiSiswa as $nilai) {
        $totalNilai += $nilai[1];
    }
    $rataRataKelas = $totalNilai / count($nilaiSiswa);

    // Mencetak daftar nilai siswa yang melebihi rata-rata kelas
    echo "Daftar siswa yang mencapai nilai di atas rata-rata kelas:<br>";
    echo "Rata-rata kelas: " . $rataRataKelas . "<br>";
    foreach ($nilaiSiswa as $nilai) {
        if ($nilai[1] > $rataRataKelas) {
            echo "Nama: " . $nilai[0] . ", Nilai: " . $nilai[1] . "<br>";
        }
    }
?>
