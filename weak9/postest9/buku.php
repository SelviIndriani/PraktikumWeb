<?php

class Buku{
  public $judul;
  public $pengarang;

  public function __construct($judul, $pengarang){
    $this->judul = $judul;
    $this->pengarang = $pengarang;
  }
  
  public function getJudul(){
    return $this->judul;
  }
  public function getPengarang(){
    return $this->pengarang;
  }
}

// array yg isinya daftar objek buku
$books = array();

// list buku
$buku_list = array([
  "judul" => "Laskar Pelangi (2005)",
  "pengarang" => "Andrea Hirata "
],[
  "judul" => "Cinta Brontosaurus (2006)",
  "pengarang"=> "Raditya Dika"
],[
  "judul" => "Dear Nathan (2016)",
  "pengarang"=> "Erisca Febriani"
],[
  "judul" => "Thank You Salma (2019)",
  "pengarang"=> "Erisca Febriani"
],[
  "judul" => "Laut Bercerita (2020)",
  "pengarang"=> "Leila S. Chudori"
],[
  "judul" => "Cantik Itu Luka (2016)",
  "pengarang"=> "Eka Kurniawan"
],[
  "judul" => "A Tale of Two Cities (1859)",
  "pengarang"=> "Charles Dickens"
],[
  "judul" => "The Little Prince (1943)",
  "pengarang"=> "Antoine de Saint-Exupery"
],
);

// membuat object Buku
for ($i=0; $i < count($buku_list); $i++) { 
  $books[$i] = new Buku($buku_list[$i]['judul'], $buku_list[$i]['pengarang']);
}
?>
