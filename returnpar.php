<?php

// Fungsi dengan return value dan parameter
function luas_circle($jari_jari) {
    $luas = 3.14 * $jari_jari * $jari_jari;
    return $luas;
}

// Pemanggilan fungsi
$r = 10;
echo "Luas Lingkaran dengan jari-jari $r = ";
echo luas_circle($r);

?>
