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
for ($a=$o; $a > 0; $a--){
    for ($b=1; $b <= $a; $b++){
        echo "*";
    }
    echo "<br>";

}
 echo "<br>";
}
?>