<?php

class Produk
{
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

}

// $produk1 = new Produk();
// $produk1->judul = "AngryBird";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Mekorama";
// $produk2->tambahProperty = "hahahahahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Mekorama";
$produk3->penulis = "Mekorima";
$produk3->penerbit = "Hayam Wuruk";
$produk3->harga = 50000;


$produk4 = new Produk();
$produk4->judul = "Mobile legend";
$produk4->penulis = "Bang Bang";
$produk4->penerbit = "Lengendaris";
$produk4->harga = "45000";


echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();