<html>
<head>
    <title>Biodata</title>
</head>
<body>
    <fieldset>
        <legend>Formulir</legend>
        <form action="" method="post">
        <tr>
            <td>
             <label for="nama">
             Nama :
            </label>
            </td>
            <td>
            <input type="text" name="nama" required><br>
            </td>
            </tr>
            <br>
            Jenis Kelamin :
            </td>
            <td>
            <label for="1">
            <input type="radio" name="jk" id="l" value="Laki-laki">
             Laki-laki
             </label>

             <label for="p">
               <input type="radio" name="jk" id="p" value="Perempuan"> Perempuan</label><br>
                </td>
                <br>
            <td>
                <tr>
                    Tanggal Lahir :
                    <input type="date" name="tanggal"><br>
                </tr>
            </td>
            <br>
            <tr>
                <td>    
                Pilih Agama :
            </tr>    
            </td>
            <td>
                <select name="agama" required>
                    <option value="">Pilih</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Konghucu">Konghucu</option>
                </select>
            </td>
            <br>
            <tr>
               <br> Alamat :
                <textarea name="textarea" id="" cols="30" rows="10"></textarea>
            </tr>
            <br>
            Hobi : 
                <input type="checkbox" name="hobi[]" value="Membaca"> Membaca 
                <input type="checkbox" name="hobi[]" value="Bermain Game"> Bermain Game 
                <input type="checkbox" name="hobi[]" value="Berenang"> Berenang 
                <input type="checkbox" name="hobi[]" value="Memasak"> Memasak 
                <input type="checkbox" name="hobi[]" value="Olahraga"> Olahraga 
                <input type="checkbox" name="hobi[]" value="Makan"> Makan <br>
             <br>

                   <input type="submit" name="simpan" value="simpan">
</form>

<?php 
if(isset($_POST['simpan']))
    {
    $nama = $_POST['nama'];
    $jenis = $_POST['jk'];
    $tglLahir = $_POST['tanggal'];
    $agama = $_POST['agama'];
    $textarea = $_POST['textarea'];
    $hobi = $_POST['hobi'];

 function tampilBiodata($nama,$jenis,$tglLahir,$agama,$textarea,$hobi)
{
$bioData = "Nama : $nama <br>";
$bioData .= "Jenis Kelamin : $jenis <br>";
$bioData .= "Tanggal Lahir : $tglLahir <br>";
$bioData .= "Agama : $agama <br>";
$bioData .= "Alamat : $textarea <br>";
$bioData .= "Hobi : " . implode (",", $hobi);
return $bioData;
}

echo tampilBiodata($nama,$jenis,$tglLahir,$agama,$textarea,$hobi);
}
?>
    </fieldset>
</body>
</html>