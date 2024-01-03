<?php

class Game extends Product implements infoProduct
{

    public $wktMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga", $wktMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->wktMain = $wktMain;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (Rp{$this->harga})";
        return $str;
    }

    public function getInfoProduct()
    {
        // Game : Uncharted | Neil Druckmann, Sony Computer (Rp 800000) - 30 Jam
        $str = "Game : " . $this->getInfo() . " ~ {$this->wktMain} Jam.";
        return $str;
    }
}
