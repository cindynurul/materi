<!DOCTYPE html>
<head>
    <title> Form for</title>
</head>
<body>
    <h2>Form  for</h2>
    <form method = "POST" action=""> 
        <table>
            <tr>
                <td>masukan angka </td>
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

    for ($i=1; $i<=$angka; $i++){
        echo "Angka $i<br>";
    }
}
    ?>