<!DOCTYPE html>
<html>
<head>
    <title>ALI ILHAM</title>
</head>
<body>
<?php
require_once 'coba.php';
$manusia = new sepeda('POLYGON','MERAH','RP:150.000','2 Meter');
    echo "<center>mereknya : ".$manusia->get_merek();
    echo "<br>warna Nya : ".$manusia->get_warna();
    echo "<br>harganya: ".$manusia->get_harga();
    echo "<br>CC Nya : ".$manusia->get_panjang();
    echo "<br>";
?>
</body>
</html>