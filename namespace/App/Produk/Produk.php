<?php
abstract class Produk
{
    protected $judul,
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

    abstract public function getInfo();

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
