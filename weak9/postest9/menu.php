<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>menu</title>
  <style>
  body {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    padding: 0;
    margin: 0;
  }
  .container {
    background-color: beige;
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 10px;
    padding: 250px;
    text-align: center;
  }

  * {
    border-radius: 10px;
    box-sizing: border-box;
  }

  table {
    width: 100%;
  }
  td {
    text-align: start;
    width: 2%;
    padding: 10px 0;
  }
  a {	
    color: azure;
    border: 1px solid;
    background-color: brown;
    padding: 40px;
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
  <h1>Selamat Datang Di Perpustakaan</h1>
  <table>
        <h3>Silahkan Pilih Layanan Yang Anda Butuhkan</h3>
        <!-- fitur fitur -->
        <tr>
          <td colspan="3">
            <a href="list.php">List Buku</a>
          </td>
        </tr>
        <tr>
        <td colspan="3">
          <a href="index.php">Peminjaman Buku</a>
        </td>
      </tr>
      <tr>
        <td colspan="3">
          <a href="index2.php">Pengembalian Buku</a>
        </td>
      </tr>
    </table>
  </div>
</body>

</html>