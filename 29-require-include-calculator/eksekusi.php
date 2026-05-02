<?php

// 1. Menghitung luas persegi panjang
// 2. Menghitung luas persegi 
// 3. Menghitung luas segitiga

function LuasPersegiPanjang(int $panjang, int $lebar): int {
    $luas = $panjang * $lebar;
    return $luas;
};

function LuasPersegi(int $sisi): int {
    $luas = $sisi * $sisi;
    return $luas;
};

function LuasSegitiga(int $alas, int $tinggi): int {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
};