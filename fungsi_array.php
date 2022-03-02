<?php
$ar_buah = ["p" => "pepaya", "a" => "apel", "m" => "mangga", "j" => "jambu"];
echo "<ol>";
foreach ($ar_buah as $k => $v) {
    echo "<li> $k - $v </li>";
}
echo "</ol>";
// array sort mengurutkan array dalam urutan menaik
sort($ar_buah);
echo "<hr/>";
echo "</ol>";
echo "<ol>";
foreach ($ar_buah as $buah => $k) {
    echo "<li> $buah - $k </li>";
}
echo "</ol>";
// arsort mengurutkan array assosiatif dalam urutan menurun sesuai dengan nilai nya
arsort($ar_buah);
echo "<hr/>";
echo "<ol>";
foreach ($ar_buah as $buah => $k){
    echo "<li> $buah -$k </li>";
}
echo "</ol>";
echo "<hr>";
?>
<!-- ================ -->
<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_pop($tims);
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_push($tims, "arhan");
foreach ($tims as $person) {
    echo "$person <br/>";
}
echo "<br>";
?>

<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_shift($tims);
foreach ($tims as $person) {
    echo "<br/>$person";
}
echo "<hr>";
?>

<?php
$tims = ["erwin", "heru", "ali", "zaki"];
array_unshift($tims,"joko","wati");
foreach ($tims as $person) {
    echo "<br/>$person";
}
?>
</body>
</html>
