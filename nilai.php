<?php

$arrNilai = array("Fulan" => 80, "Fulin" => 90, "Falon" => 75, "Fylan" => 85);

echo $arrNilai['Fulan'] . "<br>"; // Output: 80

echo $arrNilai['Fulin'] . "<br><br>"; // Output: 90

$arrNilai = array();

$arrNilai['Amin'] = 80;
$arrNilai['Aman'] = 95;
$arrNilai['Amin'] = 77;

echo $arrNilai['Aman'] . "<br>"; // Output: 95

echo $arrNilai['Amin'] . "<br>"; // Output: 77

?>
