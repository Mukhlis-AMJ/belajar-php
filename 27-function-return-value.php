<?php

// Rumusmenghitung luas persegi panjang
//function LuasPersegiPanjang(int $panjang, int $lebar): int {
    // $luas = $panjang * $lebar;
    // return $luas;

//};

//$luasPersegi = LuasPersegiPanjang(2, 5);
//echo "Luas Persegi Panjang: " . $luasPersegi;
   //Rumusmenghitung luas segitiga
function menghitungLuasSegitiga(int $alas, int $tinggi): int {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
};

$luasSegitiga = menghitungLuasSegitiga(4, 6);
echo "Luas Segitiga adalah: " . $luasSegitiga;