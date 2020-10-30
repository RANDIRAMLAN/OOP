<?php
require_once 'App/init.php';

// $produk1 = new Buku("naruto", "masashi", "tokyo TV", 50000, 100);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// echo $cetakProduk->cetak();

use App\Produk\User as ProdukUser;
use App\Service\User as ServiceUser;

new ProdukUser();
echo "<br>";
new ServiceUser();
