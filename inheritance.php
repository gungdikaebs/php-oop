<?php
class Product
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $wktMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
    }


    public function getLabel()
    {
        return
            "$this->penulis,$this->penerbit";
    }

    function getinfoProduct()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        return $str;
    }
}

class Komik extends Product
{
    public function getInfoProduct()
    {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp 100000) - 100 Halaman
        $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) {$this->jmlHalaman} - Halaman.";
        return $str;
    }
}

class Game extends Product
{
    public function getinfoProduct()
    {
        // Game : Uncharted | Neil Druckmann, Sony Computer (Rp 800000) - 30 Halaman
        $str = "Game : {$this->judul} | {$this->getLabel()} (Rp{$this->harga}) {$this->wktMain} ~  Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    function cetak($product)
    {
        $str = "{$product->judul} | {$product->getLabel()} (Rp:{$product->harga})";
        return $str;
    }
}


$product1 = new Komik("Naruto", "Masashi Kishimoto", "Masashi Kishimoto", "100000", "100", "0", "komik");
$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", "800000", "0", "30", "game");


echo $product1->getinfoProduct();
echo "<br>";
echo $product2->getinfoProduct();
