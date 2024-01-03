<?php
class Product
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }


    public function getLabel()
    {
        return
            "$this->judul,$this->penulis,$this->penerbit,$this->harga";
    }
};

// $product1 =  new Product();
// $product1->judul = "Naruto";
// var_dump($product1);

// $product2 = new Product();
// $product2->judul;
// $product2->newProperty = "haha";
// var_dump($product2);

$product1 = new Product("Naruto", "Masashi Kishimoto", "Masashi Kishimoto", "100000");
$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", "800000");

echo "Komik : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();
