<?php
// definisikan konstanta 
define ('PHI', 3.14);
define ('DBNAME', 'inventori');
define ('DBSERVER', 'localhost');

$jari = 8;
$luas = PHI * $jari * $jari;
$k11 = 2 * PHI * $jari;

echo "Luas lingkaran dengan jari jari $jari : $luas";
echo "<br>Kelilingnya : $k11";
?>
<hr/>
<?php
echo 'Nama Databasenya : ' .DBNAME;
echo '<br>Lokasi databasenya ada di ' .DBSERVER;
?>