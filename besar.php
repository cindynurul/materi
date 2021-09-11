<!DOCTYPE html>
<head>
    <title> Form besar</title>
</head>
<body>
    <h2>Form</h2>
    <form method = "POST" action=""> 
        <table>
            <tr>
                <td>ini nilai dari yang terbesar ke yang terkecil</td>
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
 
for ($i=5; $i>=0; $i--){
    echo "Angka $i<br>";
}
}
?>