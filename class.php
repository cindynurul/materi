<?php
//class
//class laptop{

    //property/atribut
   // var $pemilik;
   // var $merk;
    //var $ukuran_layar;

    //ini sebuah method/function
   // function hidupkan_laptop() {
        //... isi dari method hidupkan_laptop
     //   return "hidupkan Laptop";
        //}
      
      //  function matikan_laptop() {
        //... isi dari method matikan_laptop
       // return "matikan Laptop";

       // }
//}
//$laptop_andi = new laptop();

//echo $laptop_andi ->hidupkan_laptop();
//echo "<br>";
//echo $laptop_andi ->matikan_laptop();

class handphone {
  
    // buat property untuk class laptop
    var $pemilik;
    var $merk;
    var $warna;
    var $ukuran_layar;

   
    // buat method untuk class laptop
    function hidupkan_handphone($ket) {
      return $ket;
     }
    function matikan_handphone() {
      return "Matikan handphone";
    }
    function keluarkan_handphone(){
    return "Keluarkan handphone";
    }

 }
   
 // buat objek dari class laptop (instansiasi)
 $handphone = new handphone();
   
 // set property
 $handphone->pemilik="cindy";
 $handphone->merk="oppo";
 $handphone->warna="biru";
 $handphone->ukuran_layar="18 inchi";
   
 // tampilkan property
 echo $handphone->pemilik;
 echo "<br />";
 echo $handphone->merk;
 echo "<br />";
 echo $handphone->warna;
 echo "<br />";
 echo $handphone->ukuran_layar;
 echo "<br />";
   
 
 // tampilkan method
 echo $handphone->hidupkan_handphone("Hidupkan Handphone");
 echo "<br />";
 echo $handphone->matikan_handphone();
 echo "<br />";
 echo $handphone->keluarkan_handphone();
?>