<?php
    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya ".$nama."<br/>";

        // memanggil fungsi lain
        echo "Saya berusia " .hitungUmur(2004, 2023) . " tahun<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    // memanggil fungsi perkenalan
    perkenalan("Tia");

    //  memanggil fungsi yang sudah dibuat
    // perkenalan("Hamdana", "Hallo");

    // echo "<hr>";

    // $saya = "Elok";
    // $ucapanSalam = "Selamat pagi";

    // // memanggil lagi
    // perkenalan($saya);

    // echo "Umur saya adalah " .hitungUmur(2004, 2023) . " tahun";
?>