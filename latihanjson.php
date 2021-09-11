<?php
//  File json yang akan dibaca
$file = "latihan.json";

//  Mendapatkan file json
$latihan = file_get_contents($file);

//  Mendecode anggota.json
$data = json_decode($latihan, true);

//  Membaca/menampilkan data array menggunakan foreach
foreach ($data as $key => $d) {
    echo "nama : ". $d['nama']. "<br>";
    echo "domisili : ". $d['domisili']. "<br>";


foreach ($d['hobi'] as $d2) {
    echo "<ul>";
    echo  "<li>".$d2. "</li> <br>";
    echo "</ul>";

      }
      
    }

?>