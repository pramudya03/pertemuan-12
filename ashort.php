<?php

$arrNilai = array("Fulan" => 80, "Fulin" => 90, "Falon" => 75, "Fylan" => 85);

echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

asort($arrNilai);

echo "<b>Array setelah diurutkan dengan asort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

arsort($arrNilai);

echo "<b>Array setelah diurutkan dengan arsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

?>
