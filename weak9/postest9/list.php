<?php
$bukulist = array(
  array("Laskar Pelangi(2005) karya Andrea Hirata " , 5),
  array("Cinta Brontosaurus(2006) karya Raditya Dika" , 2),
  array("Dear Nathan(2016) karya Erisca Febriani" , 10),
  array("Thank You Salma (2019) karya Erisca Febriani" , 7),
  array("Laut Bercerita(2020) karya Leila S. Chudori" , 5),
  array("Cantik Itu Luka(2016) karya Eka Kurniawan" , 2),
  array("A Tale of Two Cities(1859) karya Charles Dickens" , 1),
  array("The Little Prince(1943) karya Antoine de Saint -Exupery" , 3),
)
?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
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
  td {
    width: 2%;
    padding: 10px 0;
  }
  table, th, td {
    text-align: center;
    border: 1px solid rgba(110, 104, 99, 0.527);
  }

  th {
    padding: 10px;
    color: azure;
    background-color: brown;
  }
  a {	
    color: azure;
    border: 1px solid;
    background-color: brown;
    padding: 20px;
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
            <h1>List Buku Dan Stok Yang Tersedia Di Perpustakaan</h1>
            <table>
                <tr>
                    <th>Deskripsi Buku </th>
                    <th>Stok </th>
                </tr>
                <?php 
                // perulangan ada array buat mengisi table list buku
                    for ($i=0; $i < 7; $i++) { 
                        echo "
                        <tr>
                            <td>".$bukulist[$i][0]."</td>
                            <td>".$bukulist[$i][1]."</td>
                        </tr>
                        ";
                    }
                ?>
            </table>
            <tr>
                <td colspan="3">
                <a href="menu.php">Back To Home</a>
          </td>
        </tr>
        </div>
        
    </body>
</html>

