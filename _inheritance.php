<?php
// constraktor
class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman;


    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman = "0")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
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


//Pewarisan
class Buku extends Produk
{
    public function getInfoProduk()
    {
        $str = "{$this->judul} | {$this->All()} (Rp.{$this->harga}) - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
}

$produk = new Produk("naruto", "masashi", "tokyo TV", 50000);
$produk1 = new Buku("naruto", "masashi", "tokyo TV", 50000, 100);

echo $produk->getInfoProduk();
echo "<br>";
echo $produk1->getInfoProduk();
// 