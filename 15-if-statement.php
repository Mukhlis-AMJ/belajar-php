<?php

$name = "Rasya";
$grade = 50;
$standar = 75;
$remidial = 80;

if ($grade > $standar) {
    echo "LULUS";
} else if ($grade == $standar) {
    echo "LULUS";
} else if ($grade < $standar && $grade >= $remidial) {
    echo "LULUS";
}else {
    echo "GAGAL";
}