<!DOCTYPE html>
<head>
    <title> Form besar</title>
</head>
<body>
    <h2>Form </h2>
    <form method = "POST" action=""> 
        <table>
            <tr>
                <td>ini nilai genap</td>
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
for ($x=0; $x <= 10; $x++){
    $x % 2 == 1;
    echo "$x <br>";
    $x++;
}
}
?>