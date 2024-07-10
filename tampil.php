<?php

// Definisi fungsi luas lingkaran
function luas_circle($jari_jari) {
    return 3.14 * $jari_jari * $jari_jari;
}

// Memanggil fungsi untuk mendapatkan definisi
$arr = get_defined_functions();

echo "<b>Sebelum:</b><br>";
echo "<pre>";
print_r($arr);
echo "</pre>";

?>
