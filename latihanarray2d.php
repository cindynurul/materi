<?php
//array 2 dimensi +array


$nilai =[

    ["judul" => "Belajar Php Dan Mysql Untuk Pemula", "penulis" => "petanikode"],
    ["judul" => "Tutorial Php Dari Nol Hingga Mahir", "penulis" => "dunia ilkom"],
    ["judul" => "Membuat Aplikasi Web Dengan Php", "penulis" => "jago koding"],
    ["judul" => "Tutorial Membuat Android", "penulis" => "programer"],
    ["judul" => "Belajar Membuat Mikrotik", "penulis" => "dunia cyber"]
];
    
    

echo "ARTIKEL BELAJAR NGODING";
echo "<br>";
echo  $nilai[2]['judul'] . "-".$nilai[2]['penulis']. "<br>";
echo "<br>";
echo  $nilai[4]['judul'] . "-".$nilai[3]['penulis']. "<br>";


    //["petanikode" => "Belajar Php Dan Mysql Untuk Pemula"],
    //["Dunia Ilkom" => "Belajar Php Hingga Mahhir"],
    //["Jago Koding" => "Membuat Aplikasi Web Dengan Php"],
    //["Programer" => "Tutorial Membuat Android"],
    //["Dunia Cyber" => "Belajar Membuat Mikrotik"]
   //];
  
   //echo "ARTIKEL BELAJAR NGODING";
   //echo "<br>";
   //echo  $nilai[2]['Jago Koding'] ."=>"."Jago Ngoding";
   //echo "<br>";
   //echo  $nilai[3]['Programer']. " => ". "Programer";
   

 
?>


