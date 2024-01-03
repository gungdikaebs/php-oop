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
            "$this->penulis,$this->penerbit";
    }
};

class CetakInfoProduk
{
    function cetak($product)
    {
        $str = "{$product->judul} | {$product->getLabel()} (Rp:{$product->harga})";
        return $str;
    }
}


$product1 = new Product("Naruto", "Masashi Kishimoto", "Masashi Kishimoto", "100000");
$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", "800000");

echo "Komik : " . $product1->getLabel();
echo "<br>";
echo "Game : " . $product2->getLabel();
echo "<br>";

$infoProduct = new CetakInfoProduk();
echo $infoProduct->cetak($product1);
