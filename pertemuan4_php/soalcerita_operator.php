<?php
    // Jumlah total kursi di restoran
    $totalKursi = 45;

    // Jumlah kursi yang sudah ditempati oleh pelanggan
    $kursiTerpakai = 28;

    // Menghitung jumlah kursi yang masih kosong
    $kursiKosong = $totalKursi - $kursiTerpakai;

    // Menghitung persentase kursi yang masih kosong
    $persentaseKursiKosong = ($kursiKosong / $totalKursi) * 100;

    // Menampilkan hasil
    echo "Total kursi: $totalKursi <br>";
    echo  "Kursi terpakai: $kursiTerpakai <br>";

    echo "Persentase kursi yang masih kosong di restoran adalah: " . number_format($persentaseKursiKosong, 2) . "%";
