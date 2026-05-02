<?php

  //berfungsi dengan nilai default
function CekStatusKesehatan($nilai=55,$pengobatan=0) {
    if ($nilai>65&&$pengobatan<65) {
        echo "Anda Sehat";
    } else {
        echo "Anda Sakit";
        }
    }

CekStatusKesehatan(60);