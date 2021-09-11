<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata Diri</title>
</head>

<body>
    <form action="" method="post">
        <fieldset>
        <center>
            <legend>
                <h2>Program Penggajihan</h2>
                <h1>PT. GARUDA KELINCI AKUR</h1>
            </legend>

            <table>
                <tr>
                    <td>
                        <label for="bendahara">
                            Nama Bendahara
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="bendahara" id="bendahara" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="pekerja">
                            Nama Pekerja
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="pekerja" id="pekerja" required>
                    </td>
                </tr>

                <tr>
                    <td>
                         Jenis Kelamin
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <label for="l">
                            <input type="radio" name="jenis" id="l" value="Laki-laki" >
                            Laki-laki
                        </label>

                        <label for="p">
                            <input type="radio" name="jenis" id="p" value="Perempuan" >
                            Perempuan
                        </label>
                    </td>
                </tr>

                <tr>
                    <td>
                        Tanggal Gaji
                    </td>
                    <td>
                        :
                    </td>
                    <td><input type ='date' name='tanggal'></td>
                </tr>

                <tr>
                    <td>
                        Jabatan
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="jabatan" required>
                            <option value="">---Pilih Jabatan---</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="Karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        Pendidikan Terakhir
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <select name="pendidikan" required>
                            <option value="">---Pendidikan Terakhir---</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="lembur">
                            Lembur
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="lembur" id="lembur" required> Hari / Rp.20.000
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <label for="potongan">
                            Potongan
                        </label>
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <input type="text" name="potongan" id="potongan" required> 
                    </td>
                </tr>

            </table>

            <button type="submit" name="simpan">
                KIRIM
            </button>

        </fieldset>

    </form>

</center>
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
 
    echo "<b>Struk Gaji Karyawan</b><br>";
    echo "-------------------------------------------------------<br>";
    echo "<td>Tanggal :<b><i>$tanggal</td></i></b><br><br>
    <td></td>
    <td></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><b>Gaji Pokok<br></b><br></td>
    <td></td>
    <td></td>
    <td></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Karyawan : $pekerja<br></td>
    <td></td>
    <td></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin : $jenis<br></td>
    <td></td>
    <td></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Pendidikan Terakhir : $pendidikan<br></td>";
    echo "</tr>";
    
    if($jabatan == "Direktur"){
    $gaji = 10000000;
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
}

else if($jabatan == "Manager"){
    $gaji = 7500000;
  
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
    
}
else if($jabatan == "Karyawan"){
    $gaji = 5000000;
    
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
}
else if($jabatan == "OB"){
    $gaji = 2500000;
    
    echo "<tr>";
    echo "<td>jabatan : $jabatan<br></td>";echo "</tr>";
     echo "<tr>";
    echo "<td>gaji : Rp.$gaji<br></td>";
    echo "</tr>";
    
}else {
    
    echo "ERROR";
    
}
echo "<tr>";
    echo "<td><b><i>Tunjangan <br></b></i><br></td>";
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
        echo "Tunjangan Pendidikan : Rp.$tunjangan<br>";
        echo "</tr>";
    } 
    
    $vakasi = $lembur * 20000;
    echo "<tr>";
    echo "<td>Vakasi Lembur : Rp.$vakasi<br><br></td>";echo "</tr>";
    echo "<td><b><i>Potongan</b></i><br><br></td>";
    echo "</tr>";

    $potongan = 1000000;
    echo "<tr>";
    echo "<td>Potongan: $potongan</td>";
    echo "</tr>";
    
    $total = ($gaji+$tunjangan+$vakasi-$potongan);
    echo "<tr>";
    echo "<td><b>Total Gaji : Rp.$total</b><br><br></td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
   echo "<td>Bendahara : <br><b>$bendahara</b><br><br></td>";echo "</tr>";
   
   echo "</table>";
   echo "</center>";
  
   
}
?>