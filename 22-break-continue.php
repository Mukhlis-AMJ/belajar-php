<?php

$counter = 1;
while (true) {
    echo "istirahat dulu ya : " . $counter . PHP_EOL;
    $counter++;

    if ($counter > 5) {
        break;
    }
}

for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Selamat Pagi : " . $counter . PHP_EOL;
}