<?php
class Buku extends Produk implements infoProduk
{
    private $jumlahHalaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $jumlahHalaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->jumlahHalaman = $jumlahHalaman;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman.";
        return $str;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->All()} (Rp.{$this->harga}) ";
        return $str;
    }
}
