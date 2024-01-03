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

    function getinfoProduct()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        return $str;
    }
}

class Komik extends Product
{
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduct()
    {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp 100000) - 100 Halaman
        $str = "Komik : " . parent::getinfoProduct() . " {$this->jmlHalaman} - Halaman.";
        return $str;
    }
}

class Game extends Product
{

    public $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $wktMain = 0)
    {
        parent::__construct($penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getinfoProduct()
    {
        // Game : Uncharted | Neil Druckmann, Sony Computer (Rp 800000) - 30 Halaman
        $str = "Game : " . parent::getinfoProduct() . " {$this->wktMain} ~  Jam.";
        return $str;
    }
}



$product1 = new Komik("Naruto", "Masashi Kishimoto", "Masashi Kishimoto", "100000", "100");
$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", "800000", "30");


echo $product1->getinfoProduct();
echo "<br>";
echo $product2->getinfoProduct();
