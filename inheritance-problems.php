<?php
class Product
{
    public
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $wktMain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $jmlHalaman = 0, $wktMain = 0, $tipe = "tipe")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->wktMain = $wktMain;
        $this->tipe = $tipe;
    }


    public function getLabel()
    {
        return
            "$this->penulis,$this->penerbit";
    }

    function getinfoLengkap()
    {
        // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp 100000) - 100 Halaman
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        if ($this->tipe == "komik") {
            $str .= " - {$this->jmlHalaman}";
        } else if ($this->tipe == "game") {
            $str .= " ~ {$this->wktMain}";
        }
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


$product1 = new Product("Naruto", "Masashi Kishimoto", "Masashi Kishimoto", "100000", "100", "0", "komik");
$product2 = new Product("Uncharted", "Neil Druckmann", "Sony Computer", "800000", "0", "30", "game");


echo $product1->getinfoLengkap();
echo "<br>";
echo $product2->getinfoLengkap();
