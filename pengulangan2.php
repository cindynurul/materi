<!DOCTYPE html>
<html>
    <head> 
        <title>Form Pengulangan</title>
    </head>
    <body>
        <center>
<h2>Form Pengulangan</h2>
<form method="POST" action="">
    <table>
        <p>1. Deret Bilangan Ganjil</p>
        <p>2. Segitiga Sama Kaki Terbalik</p>
        <p>3. Deret Bilangan Kelipatan 3</p>
    <tr>
         <td>Pilih</td>
            <td>:</td>
            <td><input type="number" name="pilih"></td>
        </tr>
         <tr>
         <td>Masukkan Angka</td>
            <td>:</td>
            <td><input type="number" name="angka"></td>
        </tr>
        <tr>
    <td></td>
    <td></td>
<td>
<input type="submit" name="simpan" value="KIRIM"></td>
</tr>
        </table>
</form>

<?php
    echo "<br>";
if(isset($_POST['simpan'])){
    $pilih = $_POST['pilih'];
    $angka = $_POST['angka'];
    if ($pilih == 1){
        for($i=1; $i <= $angka; $i++){
            if ($i %2 == 0) { 
             } else {
                echo"$i ";
            } 
        }
} elseif ($pilih == 2){
        $star=$angka;
	for($a=1; $a<=$star; $a++){
	for($b=1; $b<=$a; $b++){
	}
	for($c=$star; $c>=$a; $c-=1){
		echo "*";
	}
	echo "<br>";
	}
    } else{
        for($i=1; $i <= $angka; $i++){
            if ($i %3 == 0) {        
        echo "$i ";
    } 
}
    }
}
?>
</center>
</body>
    </html>