<?php
    // Soal cerita 4.6
    $daftarNilai = [85,92,78,90,75,88,79,70];
    $totalNilai = 0;
    foreach($daftarNilai as $nilai){
        $totalNilai += $nilai / 8;
    }

    echo "Daftar nilai: 85,92,78,64,90,75,88,79,70,96 <br>";
    echo "Rata-rata nilai setelah mengabaikan nilai tertinggi dan terendah: $totalNilai<br><br>";

    // Soal cerita 4.7
    $hrgProduk = 120000;
    $diskon = 0.20;

    if ($hrgProduk > 100000) {
        $hrgAkhir = $hrgProduk - ($hrgProduk * $diskon);
    } else {
        $hrgAkhir = $hrgProduk;
    }

    echo "Harga Produk : Rp  " .$hrgProduk. "<br>";
    echo "Diskon :  ".($diskon*100). "% <br>";
    echo "Harga Setelah Diskon: Rp " . ($hrgAkhir). "<br>";
    echo "Total Bayar : Rp " . ($hrgAkhir);

    // Soal cerita 4.8
    $poin = 600;
    $total_skor = "Total skor pemain adalah: " . $poin;
    $hadiahTambahan = ($poin > 500) ? "YA" : "TIDAK";
    echo "<br><br>";

    echo "$total_skor<br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? $hadiahTambahan";
