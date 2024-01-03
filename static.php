<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo " . self::$angka++ . "<br>";
//     }
// }

// echo ContohStatic::halo();
// echo ContohStatic::halo();
// echo ContohStatic::halo();




class Contoh
{
    public static $angka = 1;
    public function halo()
    {
        return "Halo " . self::$angka++ . "<br>";
    }
}

$obj1 = new Contoh;
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
