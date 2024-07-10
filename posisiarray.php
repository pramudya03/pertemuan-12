<?php

$transportasi = array('Jalan kaki', 'Onthel', 'Mobil', 'Pesawat');

echo "<b>Array sebelum diubah:</b><br>";
echo "<pre>";
print_r($transportasi);
echo "</pre>";

$mode = current($transportasi);
echo "Saat ini: " . $mode . "<br>";

$mode = next($transportasi);
echo "Berikutnya: " . $mode . "<br>";

$mode = current($transportasi);
echo "Saat ini lagi: " . $mode . "<br>";

$mode = prev($transportasi);
echo "Sebelumnya: " . $mode . "<br>";

$mode = end($transportasi);
echo "Akhir: " . $mode . "<br>";

$mode = current($transportasi);
echo "Saat ini terakhir: " . $mode . "<br>";

?>
