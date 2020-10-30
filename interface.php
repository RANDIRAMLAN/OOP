 <?php

    interface infoProduk
    {
        public function getInfoProduk();
    }


    // kelas abstarct
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

    //Pewarisan
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

    class CetakInfoProduk
    {

        public $daftarProduk = array();
        public function tambahProduk(Produk $produk)
        {
            $this->daftarProduk[] = $produk;
        }
        public function cetak()
        {
            $str = "Daftar Produk : <br>";
            foreach ($this->daftarProduk as $p) {
                $str .= "{$p->getInfoProduk()} <br>";
            }

            return $str;
        }
    }

    $produk1 = new Buku("naruto", "masashi", "tokyo TV", 50000, 100);

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    echo $cetakProduk->cetak();
