<?php

// class pada php

class Produk
{
    // properti
    public $judul = "Dragon Ball",
        $penulis = "Goku",
        $penerbit = "Jepan",
        $harga = "1000";

    //  method
    public function getBuku()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }

    public function getGame()
    {
        return "$this->penulis, $this->penerbit";
    }
}

// object pada php

// memberikan nilai pada properti
$produk = new Produk();
$produk->judul = "Naruto";
$produk->penulis = "Masasi Kimoto";
$produk->penerbit = "Jepan";
$produk->harga = "50000";
// panggil dengan function pertama
echo $produk->getBuku();

echo "<hr>";

// memberikan nilai pada properti
$produk1 = new Produk();
$produk1->penulis = "Masashi";
$produk1->penerbit = "Tokyo TV";
// panggil dengan function kedua
echo $produk1->getGame();
