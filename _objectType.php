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

class cetakInfoBuku
{
    public function cetak(Produk $produk10)
    {
        $str = "{$produk10->judul} | {$produk10->getBuku()} (Rp.{$produk10->harga})";
        return $str;
    }
}

$produk = new Produk("naruto", "masashi", "tokyo TV", 50000);

$infoProduk1 = new cetakInfoBuku();
echo $infoProduk1->cetak($produk);
