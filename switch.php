<!DOCTYPE html>
<head>
    <title> Form input</title>
</head>
<body>
    <h2>Form  switch case</h2>
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

    switch ($angka){
        case 1:
        echo "isi variabel angka adalah satu <br>";
        break;
        case 2:
        echo "isi variabel angka adalah dua <br>";
        break;
        case 3:
        echo "isi variabel angka adalah tiga <br>";
        break;
        case 4:
        echo "isi variabel angka adalah empat <br>";
        break;
        case 5:
        echo "isi variabel angka adalah lima <br>";
        break;
        case 6:
        echo "isi variabel angka adalah enam <br>";
        break;
        default:
        echo "isi variabel tidak di temukan";
        break;
    }
    
}


?>