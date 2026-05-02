<?php

include "eksekusi.php";

$luasPP = LuasPersegiPanjang(4, 6);
echo "Luas Persegi Panjang adalah: " . $luasPP . PHP_EOL; 

$luasPS = LuasPersegi(8);
echo "Luas Persegi adalah: " . $luasPS . PHP_EOL;

$luasST = LuasSegitiga(3, 6);
echo "Luas Segitiga adalah: " . $luasST . PHP_EOL;