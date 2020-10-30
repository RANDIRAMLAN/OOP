<?php
// constraktor
class Produk
{
    private $judul,
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
    // setter
    public function setJudul($judul)
    {
        $this->judul = $judul;
    }
    // getter
    public function getJudul()
    {
        return $this->judul;
    }
}

$produk = new Produk("naruto", "masashi", "tokyo TV", 50000);
echo $produk->getInfoProduk();
echo "<br>";

//Pewarisan
class Buku extends Produk
{
    private $jumlahHalaman;
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

echo "<hr>";

// setter
$produk->setJudul("Sasuke");
// getter
echo $produk->getJudul();
