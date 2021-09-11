<?php


$buah = array (
    1 => "palah",
    2 => "azis",
    3 => "aliyul",
    4 => "adzura",
    5 => "nabila",
    6 => "cecep",
    7 => "cindy",
    8 => "maudi",
    9 => "diki",
    10 => "dinda"
    );

    $warna = array (
        1 => "10",
        2 => "20",
        3 => "30",
        4 =>"40",
        5 =>"50",
        6 =>"60",
        7 =>"70",
        8 =>"80",
        9 =>"90",
        10 =>"100"
        );


// menampilkan seluruh data array menggunakan foreach

foreach ($buah as $val)
{
   echo "$val";
   echo "<br />";
}
echo "<br>";
foreach ($warna as $val)
{
   echo "$val";
   echo "<br />";
}

     //masukan akses array
    // echo "nilai produktif siswa <br>";
     //echo "$buah[1] $warna[7]<br>";
     //echo "$buah[10] $warna[8]<br>";
     //echo "$buah[6] $warna[9]<br>";
     //echo "$buah[8] $warna[10]<br>";
     //echo "$buah[5] $warna[6]<br>";
    ?>