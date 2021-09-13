<?php

// class
class bangun_datar{
    
    // property

    // method
    function persegi(){
        $sisi = 2;
        $luas = $sisi * $sisi;
        echo "Menghitung Luas Persegi";
        echo "<br>";
        echo "Sisinya = ".$sisi;
        echo "<br>";
        return $luas;
    }

    function segitiga(){
        $alas = 2;
        $tinggi = 6;
        echo "Menghitung Luas Segitiga";
        echo "<br>";
        echo "Alasnya = ".$alas;
        echo "<br>";
        echo "Tingginya = ".$tinggi;
        echo "<br>";
        $luas = 1/2 * $alas * $tinggi;
        return $luas;
    }

    function lingkaran(){
        $jari = 5;
        $phi = 3.14;
        echo "Menghitung Luas Lingkaran";
        echo "<br>";
        echo "Phinya = ".$phi;
        echo "<br>";
        echo "Jari-Jarinya = ".$jari;
        echo "<br>";
        $luas = $phi * $jari * $jari;
        return $luas;
    }
}

// object
$bentuk_persegi = new bangun_datar();
$bentuk_segitiga = new bangun_datar();
$bentuk_lingkaran = new bangun_datar();


// menampilkan di browser
echo "Luasnya Adalah = ".$bentuk_persegi -> persegi();
echo "<hr>";

echo "Luasnya Adalah = ".$bentuk_segitiga -> segitiga();
echo "<hr>";

echo "Luasnya Adalah = ".$bentuk_lingkaran -> lingkaran();
echo "<hr>";

?>