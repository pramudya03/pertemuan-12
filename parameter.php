<?php

// Fungsi ini dengan return value dan parameter
function cetak_ganjil($awal, $akhir) {
    $hasil = "";
    for ($i = $awal; $i <= $akhir; $i++) {
        if ($i % 2 == 1) {
            $hasil .= "$i, ";
        }
    }
    return $hasil;
}

// Pemanggilan fungsi
$a = 10;
$b = 50;
echo "<b>Bilangan ganjil dari $a sampai $b adalah: </b><br>";
echo cetak_ganjil($a, $b);

?>
