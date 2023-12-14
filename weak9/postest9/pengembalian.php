<?php 
require 'buku.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$judul = $_POST['judul'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>pengembalian Buku</title>
  <style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    padding: 0;
    margin: 0;
  }

  h1 {
    margin: 0;
  }

  .container {
    background-color: beige;
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 100px;
    padding: 200px;
    text-align: center;
  }

  * {
    border-radius: 10px;
    box-sizing: border-box;
  }

  table {
    width: 100%;
  }

  th,
  td {
    text-align: start;
  }

  th {
    width: 30%;
  }

  td {
    width: 2%;
    padding: 10px 0;
  }

  td:last-child {
    width: 68%;
  }

  input,
  select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
  }

  input[type="text"] {
    border: 1px solid rgba(63, 63, 63, 0.5);
  }
  a {	
    color: azure;
    border: 1px solid;
    background-color: brown;
    padding: 10px;
    display: block;
    text-align: center;
    width: 100%;
    height: auto;
    text-decoration: none;
  }
  </style>
</head>

<body>
  <div class="container">
    <h1>Anda berhasil megembalikan buku</h1>
    <table>
      <tr>
        <!-- menampilkan rincian pengembalian dari hasil inputan -->
        <th>Nama</th>
        <td>:</td>
        <td>
          <?php echo ('<input type="text" value="'.$nama.'" readonly />') ?>
        </td>
      </tr>
      <tr>
        <th>Nim</th>
        <td>:</td>
        <td>
          <?php echo ('<input type="text" value="'.$nim.'"  readonly />') ?>
        </td>
      </tr>
      <tr>
        <th>Judul buku</th>
        <td>:</td>
        <td>
          <?php echo ('<input type="text" value="'.$books[$judul]->judul.'" readonly />') ?>
        </td>
      </tr>
      <tr>
        <th>Pengarang</th>
        <td>:</td>
        <td>
          <?php 
            echo ('<input type="text" value="'.$books[$judul]->pengarang.'" readonly />');
          ?>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <a href="menu.php">Back To Home</a>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>