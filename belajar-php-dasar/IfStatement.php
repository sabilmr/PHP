<?php

$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat anda lulus" . PHP_EOL;
} else {
    echo "Selamat anda tidak lulus " . PHP_EOL;
}

$nilaii = 20;
$absenn = 90;

if ($nilaii >= 80 && $absenn >= 80) {
    echo "Nilai Anda A" . PHP_EOL;
} elseif ($nilaii >= 70 && $absenn >= 70) {
    echo "Nilai Anda B" . PHP_EOL;
} elseif ($nilaii >= 60 && $absenn >= 60) {
    echo "Nilai Anda C" . PHP_EOL;
} elseif ($nilaii >= 50 && $absenn >= 50) {
    echo "Nilai Anda D" . PHP_EOL;
} else {
    echo "Nilai Anda E" . PHP_EOL;
}

//syntax alternatif dengan menggunakan titik dua
if ($nilaii >= 80 && $absenn >= 80) :
    echo "Nilai Anda A" . PHP_EOL;
elseif ($nilaii >= 70 && $absenn >= 70) :
    echo "Nilai Anda B" . PHP_EOL;
elseif ($nilaii >= 60 && $absenn >= 60) :
    echo "Nilai Anda C" . PHP_EOL;
elseif ($nilaii >= 50 && $absenn >= 50) :
    echo "Nilai Anda D" . PHP_EOL;
else :
    echo "Nilai Anda E" . PHP_EOL;
endif;
