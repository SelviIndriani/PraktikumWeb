<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Document</title>
<style>
    * {
        color: rgb(52, 39, 9);
    }

    body {
        background-color: rgb(255, 255, 255);
        display: grid;
        margin: 0;
        grid-template-rows: auto auto;
        grid-template-areas: "header""main""footer";
    }

    header {
        grid-area: header;
    }

    main {
        grid-area: main;
    }

    footer {
        grid-area: footer;
        margin-top: 30px;
    }

    .atas ul, #contact ul {
        display: flex;
        margin-right: 29px;
        list-style: none;
        gap: 20px;
    }

    .atas li a, #contact {
        text-decoration: none;
        color: azure;
    }

    .atas, #contact {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: black;
    }

    #rekomendasi img, #bestseller img {
        width: 315px;
        height: 250px;
    }

    #rekomendasi div, #bestseller div, #bestseller {
        border-radius: 0.5em;
        box-shadow: 0 2.5px 6px rgba(110, 104, 99, 0.527);
        margin: 20px;
        border: px solid;
    }

    #rekomendasi div a, #bestseller div a {
        display: block;
        text-decoration: none;
        font-size: 27px;
    }

    .rekomendasi {
        text-align: center;
        margin: 3mm;
        font-size: 30px;
        display: flex;
    }

    .bestseller {
        margin: 0 !important;
        text-align: center;
        font-size: 30px;
    }

    #bestseller, #somethinc, #cosrx, #daviena, #msglow {
        float: left;
    }

    #somethinc, #cosrx, #daviena, #msglow {
        margin: 0px;
        padding-bottom: 70px;
        height: 250px;
    }

    #harga table {
        text-align: center;
        width: 100%;
    }

    #contact * {
        color: azure;
    }

    table, th, td {
        border: 1px solid rgba(110, 104, 99, 0.527);
    }

    th {
        padding: 10px;
        color: azure;
        background-color: black;
    }

    #pemesanan table td, #pemesanan table {
        width: 50%;
    }

    #pemesanan input[type="submit"] {
        margin: 20px 0;
        padding: 6px 20px;
        background-color: black;
        color: azure;
    }
</style>
<link rel="preconnect" href="https://fonts.bunny.net">

</head>
<body>
    <header>
        <div class="atas">
            <h1 style="margin: 30px; margin-left: 60px; color: azure">
                <!-- contoh pemanggilan variabel nama -->
                {{$nama}} <span style="color: rgba(254, 254, 254, 0.527)">Shop</span>
            </h1>
            <ul>
                <li><a href="#rekomendasi">Rekomendasi</a></li>
                <li><a href="#bestseller">Best Seller</a></li>
                <li><a href="#pemesanan">Pemesanan</a></li>
                <li><a href="#harga">Price List</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </header>
<main>
    <div id="rekomendasi">
    <h1>Recommendations</h1>
        <div class="rekomendasi">
            <div id="Skintific">
                <a href="#Skintific" ;> Skintific</a>
                <img src="/img/skintific.webp" /><br />
            </div>
            <div id="Emina">
                <a href="#Emina"> Emina</a>
                <img src="/img/emina.jpg" /> <br /><br />
            </div>
            <div id="Avoskin">
                <a href="#Avoskin"> Avoskin</a>
                <img src="/img/avoskin.jpg" />
            </div>
            <div id="Lacoco">
                <a href="#Lacoco"> Lacoco</a>
                <img src="/img/lacoco.jpeg" />
            </div>
        </div>
    </div>
    <h1>Best Seller</h1>
    <div id="bestseller">
        <div class="bestseller">
            <div id="somethinc">
                <a href="#Somethinc"> Somethinc</a>
                <img src="/img/somethinc.jpg" /><br />
            </div>
            <div id="cosrx">
                <a href="#Cosrx"> Cosrx</a>
                <img src="/img/cosrx.webp" /> <br /><br />
            </div>
            <div id="daviena">
                <a href="#daviena"> Daviena</a>
                <img src="/img/daviena.jpg" />
            </div>
            <div id="msglow">
                <a href="#msglow"> MS Glow</a>
                <img src="/img/msglow.jpg" />
            </div>
        </div>
    </div>
    <h2>Price List</h2>
    <div id="harga">
        <table>
            <tr>
            <th>Nama Produk</th>
            <th>Harga (Rp)</th>
            </tr>
            <!-- implement php -->
            @for ($i=0; $i < 7; $i++)
            <tr>
                <td>{{$produk[$i][0]}}</td>
                <td>{{$produk[$i][1]}}</td>
            </tr>
            @endfor

        </table>
    </div>

    <div id="pemesanan">
        <form id="form">
            <table>
                <h2>Pemesanan :</h2>
                <tr>
                    <td><label for="pilihan">PILIH PESANAN</label></td>
                    <td>:
                        <select name="skincare" id="skincare">
                            <option value="120000">Skintific</option>
                            <option value="75000">Emina</option>
                            <option value="300000">Avoskin</option>
                            <option value="300000">MS glow</option>
                            <option value="420000">Somethinc</option>
                            <option value="400000">Lacoco</option>
                            <option value="280000">Daviena</option>
                            <option value="450000">Cosrx</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="jumlah">Jumlah</label></td>
                    <td>: <input type="text" name="jumlah" id="jumlah" /></td>
                </tr>
                <tr>
                    <td><label for="diskon">Voucher</label></td>
                    <td>: <input type="text" name="diskon" id="diskon" /></td>
                </tr>
                <tr>
                    <td><label for="alamat">Alamat</label></td>
                    <td>: <input type="text" name="alamat" id="alamat" /></td>
                </tr>
            </table>
            <input type="submit" value="Submit" />
        </form>
        <table class="pesanan" id="pesanan">
            <h2>Rincian Pesanan :</h2>
            <tr>
                <td>Nama Pesanan</td>
                <td id="pesan">:</td>
            </tr>
            <tr>
                <td>Jumlah Pesanan</td>
                <td id="jumlah_pesanan">:</td>
            </tr>
            <tr>
                <td>Total Diskon</td>
                <td id="Total_diskon">:</td>
            </tr>
            <tr>
                <td>Total Harga</td>
                <td id="total_harga">:</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td id="alamatPemesan">:</td>
            </tr>
        </table>
    </div>
</main>
<footer>
    <div id="contact">
        <h3 style="text-align: center; margin: 12px; margin-left: 100px">
            Contact
        </h3>
        <ul>
            <li>Instagram : CandyyShop_</li>
            <br />
            <li>TikToK : CandyShop</li>
            <br />
            <li>WhatsApp : 0819194847XXXX</li>
            <br />
        </ul>
    </div>
</footer>

<script>
    let form = document.getElementById("form");
    form.addEventListener("submit", (e) => {
        e.preventDefault();
        let skincare = document.getElementById("skincare");
        let jumlah = document.getElementById("jumlah");
        let diskon = document.getElementById("diskon");
        let alamat = document.getElementById("alamat");

        function hitungHarga(skincare, diskon, jumlah) {
            return jumlah.value * skincare.value - hitungDiskon(diskon, skincare);
        }

        function hitungDiskon(diskon, skincare) {
            if (diskon.value == "DiskonHoki") {
                return (5 / 100) * skincare.value * jumlah.value;
            } else {
                return 0;
            }
        }
        //arraynya ini ya, jenis array nya array associative
        let pesanan = {
            pesanan: skincare[skincare.selectedIndex].textContent,
            jumlah: jumlah.value,
            diskon: hitungDiskon(diskon, skincare),
            total: hitungHarga(skincare, diskon, jumlah),
            alamat: alamat.value,
        };
        //implementasi array nya di sini
            document.getElementById("pesan").textContent = ": " + pesanan["pesanan"];
            document.getElementById("jumlah_pesanan").textContent = ": " + pesanan["jumlah"];
            document.getElementById("Total_diskon").textContent = ": " + pesanan["diskon"];
            document.getElementById("total_harga").textContent = ": " + pesanan["total"];
            document.getElementById("alamatPemesan").textContent =": " + pesanan["alamat"];
    }
);
</script>
</body>
</html>
