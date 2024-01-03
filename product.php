<?php
class Product
{
    public
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = "harga";

    public function getLabel()
    {
        return
            "$this->judul,$this->penulis,$this->penerbit";
    }
};

// $product1 =  new Product();
// $product1->judul = "Naruto";
// var_dump($product1);

// $product2 = new Product();
// $product2->judul;
// $product2->newProperty = "haha";
// var_dump($product2);

$product3 = new Product();
$product3->judul = "Naruto";
$product3->penulis = "Masashi Kishimoto";
$product3->penerbit = "Shonen Jump";
$product3->harga = "100000";

echo "<br>";

$product4 = new Product();
$product4->judul = "Uncharted";
$product4->penulis = "Neil Druckmann";
$product4->penerbit = "Sony Computer";
$product4->harga = "800000";

echo "Komik : " . $product3->getLabel();

echo "<br>";

echo "Game : " . $product4->getLabel();
