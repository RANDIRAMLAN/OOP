<?php
// constraktor
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;


    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getBuku()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

$produk = new Produk("naruto", "masashi", "tokyo TV", 50000);
echo $produk->getBuku();
