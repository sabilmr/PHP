<?php
//perulangan tidak berhenti
//for ( ; ; ) {
//    echo "Ini Adalah For Loop";
//}
//increment
for ($counter = 1 ; $counter <= 10 ; $counter++) {
    echo "Ini Adalah For Loop ke-$counter" . PHP_EOL;
}

//decrement
for ($counter = 10 ; $counter >= 1 ; $counter--) {
    echo "Ini Adalah For Loop ke-$counter" . PHP_EOL;
}

//syntax alternatif
for ($counter = 1 ; $counter <= 10 ; $counter++) :
    echo "Ini Adalah For Loop ke-$counter" . PHP_EOL;
endfor;

for ($counter = 10 ; $counter >= 1 ; $counter--) :
    echo "Ini Adalah For Loop ke-$counter" . PHP_EOL;
endfor;

//init statement akan diekskusi hanya sekali di awal sebelum perulangan
//kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
//post statement akan diekskusi setiap kali akhir perulangan
//init statement kondisi dan post statement tidak wajib diisi, jika kondisi tidak diisi, brarti kondisi selalu bernilai true
