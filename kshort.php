<?php

$arrNilai = array("Fulan" => 80, "Fulin" => 90, "Falon" => 75, "Fylan" => 85);

echo "<b>Array sebelum diurutkan</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

ksort($arrNilai);

echo "<b>Array setelah diurutkan dengan ksort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

krsort($arrNilai);

echo "<b>Array setelah diurutkan dengan krsort()</b>";
echo "<pre>";
print_r($arrNilai);
echo "</pre>";

?>
