<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form action="" method="POST">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cindy Nurul A</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="penggajihan.php">Penggajihan <span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link" href="pengulangan.php">Pengulangan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="vaksin.php">Vaksin <span class="sr-only">(current)</span></a>
      </li>
     
    </ul>
  </div>
</nav>

    <!--Form Input-->
<form>
    <div class = "container">
    <br>
    <h2><center>PENGGAJIHAN PT GARUDA KELINCI AKUR</center></h2>
    <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Bendahara : </label>
    <input type="text" name="bendahara" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Nama Pekerja :</label>
    <input type="text" name="pekerja" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jenis Kelamin :</label>
    <br>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis" id="inlineRadio1" value="Laki - Laki">
  <label class="form-check-label" for="inlineRadio1">Laki - Laki</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="jenis" id="inlineRadio2" value="Perempuan">
  <label class="form-check-label" for="inlineRadio2">Perempuan</label>
</div>
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Tanggal Gaji :</label>
    <input type="date" name="tanggal" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Jabatan :</label>
    <select class="form-control" name="jabatan" id="exampleFormControlSelect1">
      <option>---Pilih Jabatan---</option>
      <option>Direktur</option>
      <option>Manager</option>
      <option>Karyawan</option>
      <option>OB</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Pendidikan Terakhir :</label>
    <select class="form-control" name="pendidikan" id="exampleFormControlSelect1">
      <option>---Pendidikan Terakhir---</option>
      <option>SD</option>
      <option>SMP</option>
      <option>SMA</option>
      <option>S1</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Lembur : </label>
    <input type="text" class="form-control" name="lembur" id="exampleInputEmail1" aria-describedby="emailHelp">Hari / Rp.20.000</input>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Potongan : </label>
    <input type="text" class="form-control" name="potongan" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <button type="submit" name="simpan" class="btn btn-primary">KIRIM</button>
  </div>
</form>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

if(isset($_POST['simpan'])){
$bendahara = $_POST['bendahara'];
$pekerja = $_POST['pekerja'];
$lembur = $_POST['lembur'];
$tanggal =$_POST['tanggal'];
$jenis = $_POST['jenis'];
$potongan = $_POST['potongan'];
$pendidikan = $_POST['pendidikan'];
$jabatan =$_POST['jabatan'];
 echo "<center>";
 echo "<table>";
 echo "<tr>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
 
    echo "<b>STRUK PENGGAJIHAN</b><br>";
    echo "-------------------------------------------------------<br>";
    echo "<td>Tanggal :<b><i>$tanggal</td></i></b><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b><i>Gaji Pokok<br></i></b><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Karyawan : $pekerja<br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin : $jenis<br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir : $pendidikan<br></td>";
    echo "</tr>";
    
    if($jabatan == "Direktur"){
    $gaji = 10000000;
    echo "<tr>";
    echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>Gaji : Rp.$gaji<br></td>";
    echo "</tr>";
}

else if($jabatan == "Manager"){
    $gaji = 7500000;
  
    echo "<tr>";
    echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>Gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
    
}
else if($jabatan == "Karyawan"){
    $gaji = 5000000;
    
    echo "<tr>";
    echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>Gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
}
else if($jabatan == "OB"){
    $gaji = 2500000;
    
    echo "<tr>";
    echo "<td>Jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>Gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
}else {
    
    echo "ERROR";
    
}
echo "<tr>";
    echo "<td><b><i>Tunjangan<br></b></i><br></td>";
    echo "</tr>";
    if($pendidikan == "SD"){
        $tunjangan = 250000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
        echo "</tr>";
    }
    else if($pendidikan == "SMP"){
        $tunjangan = 500000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan : Rp.$tunjangan</td><br>";
        echo "</tr>";
    }
    else if($pendidikan == "SMA"){
        $tunjangan = 1000000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan : Rp.$tunjangan<br></td>";
        echo "</tr>";
    }
    else if($pendidikan == "S1"){
        $tunjangan = 1500000;
        echo "<tr>";
        echo "<td>Tunjangan Pendidikan : Rp.$tunjangan<br></td>";
        echo "</tr>";
    } 
    
    $vakasi = $lembur * 20000;
    echo "<tr>";
    echo "<td>Vakasi Lembur : Rp.$vakasi<br><br></td>";echo "</tr>";
    echo "<td><b><i>Potongan</b></i><br><br></td>";
    echo "</tr>";

    $potongan = 1000000;
    echo "<tr>";
    echo "<td>Potongan : $potongan</td>";
    echo "</tr>";
    
    $total = ($gaji+$tunjangan+$vakasi-$potongan);
    echo "<tr>";
    echo "<td><b>Total Gaji : Rp.$total</b><br><br></td>";
    echo "</tr>";
    echo "<tr>";
 echo "<td></td>";
 echo "<td></td>";
 echo "<td></td>";
   echo "<td>Bendahara : <br><b>$bendahara</b><br></td>";echo "</tr>";
   
   echo "</table>";
   echo "</center>";
  
   
}
?>