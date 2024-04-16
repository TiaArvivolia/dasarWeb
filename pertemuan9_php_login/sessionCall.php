<?php
session_start();
?>

<!doctype html>
<html>

<body>
    <?php
    // Pastikan session_start() telah dipanggil sebelum mengakses session variabel
    if (isset($_SESSION["favcolor"]) && isset($_SESSION["favanimal"])) {
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
        echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
    } else {
        echo "Session variables are not set.";
    }
    ?>
</body>

</html>