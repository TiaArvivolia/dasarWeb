<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];

            // Mendapatkan jumlah elemen array
            $jumlahElemen = count($Listdosen);

            // Perulangan dari indeks terakhir ke awal
            for ($i = $jumlahElemen - 1; $i >= 0; $i--) {
                echo $Listdosen[$i] . "<br>";
            }

            // echo $Listdosen[2] . "<br>";
            // echo $Listdosen[0] . "<br>";
            // echo $Listdosen[1] . "<br>";

        ?>
    </body>
</html>
