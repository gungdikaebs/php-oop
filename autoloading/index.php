<?php

require_once "App/init.php";

$product1 = new Komik("Naruto", "Masashi Kishimoto", "Masashi Kishimoto", 100000, 100);
$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 800000, 30);
$cetakProduct = new CetakInfoProduk();

$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);

echo $cetakProduct->cetak();
echo "<hr>";

new Coba();
