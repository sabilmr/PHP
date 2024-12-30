<?php
//Tag pembuka PHP. Digunakan untuk memberi tahu server bahwa kode di dalamnya adalah kode PHP.
echo "Decimal : ";
//echo: Sebuah fungsi bawaan PHP untuk mencetak output ke layar (browser/terminal).
//"Decimal : ": Sebuah string (teks) yang akan dicetak ke layar. Teks ini diapit oleh tanda kutip ganda ("),
//sehingga PHP mengenalinya sebagai string literal.
var_dump(1234);
//var_dump: Fungsi bawaan PHP untuk menampilkan informasi lengkap tentang variabel,
//termasuk jenis data (type) dan nilainya.
//1234: Angka yang dimasukkan sebagai parameter untuk fungsi var_dump.
//PHP mengenalinya sebagai bilangan bulat (integer).
echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b111111);

echo "Underscore in numbers : ";
var_dump(1241241241);

echo "Floating point dengan E Notation : (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating point dengan E Notation minus : (1.7 x 0.001) : ";
var_dump(1.7e3);

echo "Underscore di floating point : ";
var_dump(1123.123);
//64 bit
echo "Interger Overflow : ";
var_dump(9223372036854775808);
