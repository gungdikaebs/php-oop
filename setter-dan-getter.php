<?php
class Product
{
    private
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $diskon;

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



    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    public function getJudul()
    {
        return $this->judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }
    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }
    public function getDiskon()
    {
        return $this->diskon;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }
    public function getHarga()
    {
        $hargaAkhir = $this->harga - $this->harga * $this->diskon / 100;
        return $hargaAkhir;
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
        $str = "Komik : " . parent::getinfoProduct() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Product
{

    public $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $wktMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }

    public function getinfoProduct()
    {
        // Game : Uncharted | Neil Druckmann, Sony Computer (Rp 800000) - 30 Jam
        $str = "Game : " . parent::getinfoProduct() . " ~ {$this->wktMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak($product)
    {
        $str = "{$product->judul} | {$product->getLabel()} (Rp: {$product->harga})";
        return $str;
    }
}


$product1 = new Komik("Naruto", "Masashi Kishimoto", "Masashi Kishimoto", 100000, 100);
$product2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 800000, 30);


echo $product1->getinfoProduct();
echo "<br>";
echo $product2->getinfoProduct();
echo "<hr>";
$product2->setDiskon(50);
echo $product2->getJudul();
