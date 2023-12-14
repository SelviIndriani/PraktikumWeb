<?php 
require 'buku.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>peminjaman Buku</title>
  <style>
  body {
    background-color: black;
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
    border-radius: 5px;
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
    width: 20%;
  }

  td {
    width: 2%;
    padding: 10px 0;
  }

  td:last-child {
    width: 60%;
  }

  input, select {
    width: 100%;
    padding: 10px;
    font-size: 16px;
  }

  input[type="text"] {
    border: 1px solid rgba(63, 63, 63, 0.5);
  }

  input[type="submit"] {
    border: 1px solid;
    color: azure;
    background-color: brown;
    padding: 10px;
    height: auto;
  }

  input[type="submit"]:hover {
    border: 1px solid rgba(76, 255, 70, 0);
  }
  </style>
</head>

<body>
  <div class="container">
    <h1>Silahkan Isi Form Peminjaman</h1>
<!-- mengarah ke pinjam.php -->
    <form action="pinjam.php" method="post"> 
      <table>
        <!-- form input -->
        <tr>
          <th>Nama</th>
          <td>:</td>
          <td>
            <input type="text" name="nama" id="nama"/>
          </td>
        </tr>
        <tr>
          <th>Nim</th>
          <td>:</td>
          <td>
            <input type="text" name="nim" id="nim"/>
          </td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>:</td>
          <td>
            <input type="text" name="alamat" id="alamat"/>
          </td>
        </tr>
        <tr>
          <th>No.tlp</th>
          <td>:</td>
          <td>
            <input type="text" name="tlp" id="tlp"/>
          </td>
        </tr>
        <tr>
          <th>Judul buku</th>
          <td>:</td>
          <td>
            <select name="judul" id="judul">
              <?php 
								for ($i=0; $i < count($books); $i++) { 
									echo ("<option value=".$i.">".$books[$i]->judul."</option>");
								}
							?>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3">
            <input type="submit" value="Submit" />
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>