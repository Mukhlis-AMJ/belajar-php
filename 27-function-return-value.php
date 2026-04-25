<?php

// Rumusmenghitung luas persegi panjang
function LuasPersegiPanjang(int $panjang, int $lebar): int {
    $luas = $panjang * $lebar;
    return $luas;

};

$luasPersegi = LuasPersegiPanjang(2, 5);
echo "Luas Persegi Panjang: " . $luasPersegi;