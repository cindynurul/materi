<?php

class bangundatar{
    
    public $luas;
}

   class persegi extends bangundatar{
    public function psg($sisi){
            echo  "<b><i>Menghitung Luas Persegi</i></b><br>";
            echo  "Sisinya = $sisi<br>";
          
          $this->luas=$sisi*$sisi;
          $this->keliling=4*$sisi;
          echo  "<i>Luasnya = $this->luas</i> <br>";
          echo  "<i>Kelilingnya = $this->keliling</i> <br>";
          echo "<hr>";
                 }
                     }    

       class pp extends bangundatar{
       public function persegipanjang($panjang,$lebar){
           echo "<i><b>Mengitung Luas Persegi Panjang</i></b><br>";
           echo "panjangnya = $panjang<br>";
           echo "lebarnya = $lebar<br>";

           $this->luas=$panjang*$lebar;
           $this->keliling=2*$panjang*$lebar;
           echo "<i>luasnya = $this->luas </i><br>";
           echo "<i>keliling = $this->keliling </i><br>";

           echo "<hr>";
       }
   }

    class po extends bangundatar{
    public function segitiga($alas,$tinggi){
        echo "<i><b>Menghitung Luas Segitiga</i></b><br>";
        echo "alasnyanya = $alas<br>";
        echo "tingginya = $tinggi<br>";

        $this->luas=1/2*$alas*$tinggi;
        $this->keliling=$alas*$tinggi;
        echo "<i>luasnya = $this->luas<i> <br>";
        echo "<i>keliling = $this->keliling<i> <br>";

        echo "<hr>";
    }
}

    class pa extends bangundatar{
    public function lingkaran($phi,$jari){
        echo "<i><b>Menghitung Luas Lingkaran</i></b>/<br>";
        echo "phi = $phi<br>";
        echo "jari = $jari<br>";

        $this->luas=$phi*$jari*$jari;
        $this->keliling=2*$phi*$jari;
        echo "<i>luasnya = $this->luas </i><br>";
        echo "<i>Kelilling = $this->keliling </i><br>";
        echo "<hr>";
    }
}
$cetak = new persegi();
$cetak -> psg(10);
$pletak = new pp();
$pletak ->persegipanjang(10,5);
$jos = new po();
$jos ->segitiga(10,50);
$king = new pa();
$king ->lingkaran(3.14,10);

?>