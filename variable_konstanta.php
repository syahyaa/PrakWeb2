<?php
//Definisi Konstanta
define ('PHI', 3.14);

//soal 1. cari nilai dari luas lingkaran dengan jari jari 8
//soal 2. cari nilai dari keliling lingkaran dengan jari jari 8

//definisi jari jari
$jari = 8;
//rumus luas lingkaran
$luas = PHI * $jari * $jari;

//rumus keliling
$kll = 2 * PHI * $jari;

echo 'luas lingkaran dari jari jari ' .$jari. ' adalah ' .$luas;
echo '<br/>keliling lingkarannya adalah ' .$kll;
?>