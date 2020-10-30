<?php
// define variabel yang nialainya tidak dapat diubah dan tidak dapat digunakan dalam class
define('NAMA', 'Randi');
echo NAMA;
echo "<br>";
// const variable yang nilainya tidak dapat diubah  dan dapat diguanakn dalam class
const UMUR = 28;
echo UMUR;
echo "<br>";

// contoh
class Coba
{
    const KOTA = 'Makassar';
}

echo Coba::KOTA;
echo "<br>";

// magic Constanta sala satnay dapat digunakan untuk menampilkan pesan kesalahan
echo __FILE__;
