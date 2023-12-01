<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

    if (isset($_POST['nilai'])) {
        $jumlah_matkul = count($_POST['nilai']);
        $total_nilai = 0;
        $jumlah_sks = 0;

        for ($nilai_matkul = 0; $nilai_matkul < $jumlah_matkul; $nilai_matkul++) {
            $nilai_ipk = array();
            $nilai_ipk[$nilai_matkul] = $_POST['nilai'][$nilai_matkul];
            //ASUMSI NILAI A
            if ($nilai_ipk[$nilai_matkul] > 85 && $nilai_ipk[$nilai_matkul] <= 100) {
              $nilai_ipk[$nilai_matkul] = 4.00;
            }
            //ASUMSI NILAI A-
            elseif($nilai_ipk[$nilai_matkul] > 75 && $nilai_ipk[$nilai_matkul] <= 85){
              $nilai_ipk[$nilai_matkul] = 3.75;
            }
            //ASUMSI NILAI B+
            elseif ($nilai_ipk[$nilai_matkul] > 65 && $nilai_ipk[$nilai_matkul] <= 75) {
              $nilai_ipk[$nilai_matkul] = 3.50;
            }
            //ASUMSI NILAI B
            elseif ($nilai_ipk[$nilai_matkul] > 55 && $nilai_ipk[$nilai_matkul] <= 65) {
              $nilai_ipk[$nilai_matkul] = 3.25;
            }
            //ASUMSI NILAI B-
            elseif ($nilai_ipk[$nilai_matkul] > 45 && $nilai_ipk[$nilai_matkul] <= 55) {
              $nilai_ipk[$nilai_matkul] = 3.00;
            }
            //ASUMSI NILAI C+
            elseif ($nilai_ipk[$nilai_matkul] > 35 && $nilai_ipk[$nilai_matkul] <= 45) {
                $nilai_ipk[$nilai_matkul] = 2.75;
              }
            else{
              $nilai_ipk[$nilai_matkul] = 0;
            }
            $total_nilai += $nilai_ipk[$nilai_matkul];
            $jumlah_sks++;
        }
        $ipk = $total_nilai / $jumlah_sks;

        echo "Hasil Perhitungan IPK Dan Status Kelulusan". "<br>". "<br>";

        echo "IPK: " . number_format($ipk, 2) . "<br>". "<br>";

        if ($ipk>=2.75){
            echo "Status Kelulusan : LULUS";
        }
        else{
            echo "Status Kelulusan : TIDAK LULUS";
        }
    }
  ?>
  <br><br>
  <a href="http://localhost/posttest8/index.html">Kembali</a>
</body>

</html>