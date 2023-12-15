<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Selamat Datang</title>
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
            padding: 200px;
            text-align: center;
          }

          * {
            border-radius: 5px;
            box-sizing: border-box;
          }
          </style>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
</head>
<body>
    <div class="container">
        <h1>Selamat Datang, Periksa kembali data anda!</h1>
        <p>NIK: {{ $data['nik'] }}</p>
        <p>Nama: {{ $data['name'] }}</p>
        <p>Provinsi: {{ $data['provinsi'] }}</p>
        <p>Kota: {{ $data['kota'] }}</p>
        <p>Nomor Telpon: {{ $data['nomorTelpon'] }}</p>
    </div>

</body>
</html>
