<?php
  require 'daftar.php';

  $nama = $_POST['nama'];
  $pass = $_POST['pass'];

  foreach ($members as $member) {
    if ($nama == $member->nama && $pass == $member->pass) {
      // mengarahkan ke laman peminjaman buku
      header('Location: http://localhost:/selvi/menu.php');
    }
    // jika gagal login atau salah makan akan mengarah ke halaman gagal.php
    else {
      header('Location: http://localhost:/selvi/gagal.php');
    }
  }
  ?>