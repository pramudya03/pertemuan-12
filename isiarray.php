<?php

$arrNilai = array("Fulan" => 80, "Fulin" => 90, "Falon" => 75, "Fylan" => 85);

echo "Menampilkan isi array asosiatif dengan foreach: <br>";

foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
}

reset($arrNilai);

echo "<br>Menampilkan isi array asosiatif dengan WHILE dan LIST:<br>";

foreach ($arrNilai as $nama => $nilai) {
    echo "Nilai $nama = $nilai<br>";
}

?>
