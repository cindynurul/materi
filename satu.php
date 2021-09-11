<!DOCTYPE html>
<head>
    <title> Form besar</title>
</head>
<body>
    <h2>Form </h2>
    <form method = "POST" action=""> 
        <table>
            
            <tr>
                <td>masukan angka :</td>
                <td>:</td>
                <td><input type ='text' name = 'angka'> </td>
            </tr>
            <tr>
                <td></tr>
                <td></tr>
                <td><input type ='submit' name = 'simpan' value='KIRIM'> </td>
</tr>
</table>
</form>
</body>     
</html>

<?php
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    
    echo "bilangan terbesar keterkecil<br>";
    for ($i=5; $i>=0; $i--){
        echo "Angka $i<br>";
    }
    echo "<br>";
    echo "bilangan genap<br>";
    if(isset($_POST['simpan'])){
        $angka = $_POST['angka'];
    for ($x=0; $x <= 10; $x++){
        $x % 2 == 1;
        echo "$x <br>";
        $x++;
    }
    }
    echo "<br>";
    echo "bilangan segitiga<br>";
    if(isset($_POST['simpan'])){
        $angka = $_POST['angka'];
    $o=6;
    for ($a=$o; $a > 0; $a--){
        for ($b=$o; $b >= $a; $b--){
            echo "*";
        }
        echo "<br>";
    
    }
     echo "<br>";
}
echo "<br>";
echo "bilangan segitiga terbalik<br>";
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
$o=6;
for ($a=$o; $a > 0; $a--){
    for ($b=1; $b <= $a; $b++){
        echo "*";
    }
    echo "<br>";

}
 echo "<br>";
}
echo "<br>";
echo "bilangan segitiga kaki<br>";
if(isset($_POST['simpan'])){
    $angka = $_POST['angka'];
    $o=6;
    for ($a=1; $a < $o; $a++){
        for ($b=$o; $b >= $a; $b--){
            echo "&nbsp";
        }
        for ($c=1; $c <= $a; $c++){
     echo "*";
        }
       
    echo "<br>";
    }
}
}
?>