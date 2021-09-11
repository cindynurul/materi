<!DOCTYPE html>
<head>
    <title> Form segitiga</title>
</head>
<body>
    <table>
    <h2>Form segitiga </h2>
    <form method = "POST" action=""> 
            <tr>
                <td>ini segitiga</td>
                <td>:</td>
                <td><input type ='text' name = 'angka'> </td>
            </tr><tr>
                <td></tr>
                <td></tr>
                <td><input type ='submit' name = 'simpan' value='KIRIM'> </td>
                <tr>
</table>
</form>
</body>     
</html>

<?php
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
?>