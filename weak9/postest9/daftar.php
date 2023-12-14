<?php

class daftar{
  // atribut
  public $nama;
  public $pass;

  public function __construct($nama, $pass){
    $this->nama = $nama;
    $this->pass= $pass;
  }
  
  public function getNama(){
    return $this->nama;
  }
  public function getPass(){
    return $this->pass;
  }
}
// siswa yang terdaftar dalam member
$members = array();
// masukan nama dan password membernya
$member_list = array(
  [
    "nama" => "Selvi Indriani",
    "pass" => 123456
  ],
  [
    "nama" => "Candy",
    "pass"=> 23456
  ],
);

// membuat object member
for ($i=0; $i < count($member_list); $i++) { 
  $members[$i] = new daftar($member_list[$i]['nama'], $member_list[$i]['pass']);
}