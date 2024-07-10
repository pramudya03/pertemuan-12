<?php

// Fungsi dengan return value dan parameter
function add_string($str) {
    $str = $str . ", Yogyakarta";
    return $str;
}

// String awal
$string = "Universitas Ahmad Dahlan";

echo "\$string = $string<br>"; 
echo add_string($string) . "<br>"; // Memanggil fungsi dan menampilkan hasil
echo "\$string = $string<br>"; // Menampilkan string asli kembali

?>
