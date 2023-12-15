<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Pemesanan</title>
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
  input, select{
    width: 100%;
    padding: 10px;
    font-size: 16px;
  }

  button[type="text"] {
    border: 1px solid rgba(63, 63, 63, 0.5);
  }

  button[type="submit"] {
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
<!-- Fonts -->
<link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <div class="container">
        <h1>Form Pendataan Penduduk</h1>
        <form method="post" action="{{ route('submit-order')}}">
            @csrf
            <label for="nik">NIK :</label>
            <input type="text" id="nik" name="nik"
            required><br>
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name"
            required><br>
            <label for="provinsi">Provinsi:</label>
            <input type="text" id="provinsi" name="provinsi"
            required><br>
            <label for="kota">Kota:</label>
            <input type="text" id="kota" name="kota"
            required><br>
            <label for="nomorTelpon">Nomor Telpon:</label>
            <input type="noTelpon" id="noTelpon" name="noTelpon"
            required><br> <br> <br>
            <button type="submit">Submit Data</button>
        </form>
    </div>

</body>
</html>
