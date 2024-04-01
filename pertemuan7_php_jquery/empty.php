<?php
$myArray = array(); //Array kosong
if (empty($myArray)) {
    echo "Array tidak terdifinisi atau kosong.";
} else {
    echo "Array terdifinisi atau tidak kosong.";
}

echo "<br><br>";

if (empty($nonExistentVar)) {
    echo "Variable tidak terdifinisi atau kosong.";
} else {
    echo "Variable terdifinisi atau tidak kosong.";
}