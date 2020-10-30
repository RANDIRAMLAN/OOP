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
    public function All()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->All()} (Rp.{$this->harga}) ";
        return $str;
    }
}

$produk = new Produk("naruto", "masashi", "tokyo TV", 50000);
echo $produk->getInfoProduk();
echo "<br>";

//Pewarisan
class Buku extends Produk
{
    public $jumlahHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}


$produk1 = new Buku("naruto", "masashi", "tokyo TV", 50000, 100);
echo $produk1->getInfoProduk();
