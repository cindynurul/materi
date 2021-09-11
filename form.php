<!DOCTYPE html>
<head>
    <title> Form Biodata diri</title>
</head>
<body>
    <h2>Form biodata diri</h2>
    <form method = "POST" action=""> 
        <table>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type ='text' name = 'nama'> </td>
            </tr>
            <tr>
            <td>Umur </td>
            <td>: </td>
            <td><input type ='text' name = 'umur'> </td>
            </tr>
            <tr>
            <td>Alamat  </td>
            <td>: </td>
            <td><input type ='text' name = 'alamat'> </td>
            </tr>
            <tr>
                <td></tr>
                <td></tr>
                <td><input type ='submit' name = 'simpan' value='KIRIM'> </td>
</table>
</form>
</body>     
</html>

<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];

    echo "nama = $nama <br>";
    echo "umur = $umur <br>";
    echo "alamat = $alamat <br>";
}


?>