<!DOCTYPE html>
<head>
    <title> Form besar</title>
</head>
<body>
    <h2>Form </h2>
    <form method = "POST" action=""> 
        <table>
            <tr>
                <td>ini segitiga kaki</td>
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
?>