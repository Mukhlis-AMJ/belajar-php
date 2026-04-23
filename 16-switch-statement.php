<?php

$nilai_Mahasiswa = "G";
switch ($nilai_Mahasiswa) {
    case "A":
        echo "Nilai Anda Sangat Baik";
        break;
    case "B":
        echo "Nilai Anda Baik";
        break;
    case "C":
        echo "Nilai Anda Cukup";
        break;
    case "D":
        echo "Nilai Anda Kurang";
        break;
    case "E":
        echo "Nilai Anda Sangat Kurang";
        break;
    default:
        echo "Nilai Anda Tidak Valid";
        break;
}