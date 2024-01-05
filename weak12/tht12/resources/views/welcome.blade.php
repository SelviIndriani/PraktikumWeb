<!-- resources/views/quran/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hadist App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="p-5 py-4">
    <h1 class="mb-5">Kumpulan Hadist</h1>
    <ul>
        @foreach($hadistData['data']['hadiths'] as $hadiths)
            <li>
                {{-- menampilkan nomor hadist nya yang keberapa --}}
                <h3>Hadiths {{ $hadiths['number'] }}</h3>
                {{-- menampilkan hadist dalam bahasa arab --}}
                <p class="text-end ps-5">{{ $hadiths['arab'] }}</p>
                {{-- menampilkan terjemahan dari hadistnya --}}
                <p style="text-align: justify"><span class="fw-bold">Artinya : </span>{{ $hadiths['id'] }}</p>
            </li>
        @endforeach
    </ul>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
