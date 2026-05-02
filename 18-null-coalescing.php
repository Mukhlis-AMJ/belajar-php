<?php

//$data = [
//    "nama" => "Denis",
//    "umur" => 18
//];
// $data = ["dsa" , "asda"];

$data = [
    "nama" => "dodi",
    "umur" => 20
];

$nama = $data["umur"] ?? "data tidak ditemukan";

echo $nama;