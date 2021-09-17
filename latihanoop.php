<?php
class penggajihan{
public $totalgaji;
public $totalpengeluaran;

  public function gaji($jabatan,$pendidikan){
      echo "<b><i>Pendapatan</i></b><br>";
      if($jabatan == "Direktur"){
        $gaji = 10000000;
        echo "<tr>";
        echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
    }
    
    else if($jabatan == "Manager"){
        $gaji = 5000000;
      
        echo "<tr>";
        echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
    
        
    }
    else if($jabatan == "Karyawan"){
        $gaji = 3000000;
        
        echo "<tr>";
        echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
         echo "<tr>";
        echo "<td>gaji : Rp.$gaji<br></td>";
        echo "</tr>";
        
    }else {
        
        echo "ERROR";
        
    }
      echo "<tr>";
        
        echo "</tr>";
        if($pendidikan == "S1"){
            $tunjangan = 2000000;
           
            echo "<td>Pendidikan : $pendidikan</td><br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMP"){
            $tunjangan = 500000;
            echo "<tr>";
            echo "<td>Pendidikan : $pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
            echo "</tr>";
        }
        else if($pendidikan == "SMK"){
            $tunjangan = 1000000;
            echo "<tr>";
            echo "<td>Pendidikan : $pendidikan</td></br>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Tunjangan Pendidikan : Rp.$tunjangan<br></td>";
            echo "</tr>";
        }
      $this->totalgaji=$gaji+$tunjangan;
      echo "Total Gaji : $this->totalgaji <br><hr>";
      
    
  }


    public function pengeluaran($listrik,$kontrakan,$kendaraan){
        echo "<b><i>Pengeluaran</i></b></br>";
        echo "Bayar listrik : $listrik<br>";
        echo "Bayar kontrakan : $kontrakan<br>";
        echo "Cicilan Kendaraan : $kendaraan<br>";
        $this->totalpengeluaran = $listrik+$kontrakan+$kendaraan;
        echo "Total Bayar : $this->totalpengeluaran <br><hr>";
    }
  
 function sisa(){
     $total= $this->totalgaji-$this->totalpengeluaran;
     echo "<b><i>Sisa : $total</i></b>";
 }
}
$oop = new penggajihan();
echo $oop->gaji("Manager","SMP");
echo $oop->pengeluaran(200000,1000000,500000);
echo $oop->sisa();
?>