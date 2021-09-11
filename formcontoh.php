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
            <td>tempat lahir </td>
            <td>: </td>
            <td><input type ='text' name = 'tempat'> </td>
            </tr>
            <tr>
            <td>tanggal lahir  </td>
            <td>: </td>
            <td><input type ='date' name = 'tanggal'> </td>
            </tr>
            <tr>
            <td>jenis kelamin </td>
            <td>:</td>
            <td><input type ='radio' name = 'jenis'  value ='perempuan'>perempuan 
            <input type ='radio' name = 'jenis'  value ='laki-laki'>laki-laki </td>
            </tr>
            <td>alamat </td>
            <td>: </td>
            <td><input type ='textarea' name = 'alamat'> </td>
            </tr>
            <td>agama </td>
            <td>: </td>
            <td><select name ='agama'>
            <option value = 'islam'>islam</option>
            <option value = 'kristen'>kristen</option>
            <option value = 'konghucu'>konghucu</option>
            <option value = 'hindu'>hindu</option>
            </tr>
            </td>
            <td>pendidikan </td>
            <td>: </td>
            <td><select name ='pendidikan'>
            <option value = 'sd'>sd</option>
            <option value = 'smp'>smp</option>
            <option value = 'sma'>sma</option>
            <option value = 'smk'>smk</option>
            <option value = 'kuliah'>kuliah</option>
            </tr>
            </td>
            <tr>
            <td>status </td>
            <td>: </td>
            <td><select name ='status'>
            <option value = 'pelajar'>pelajar</option>
            <option value = 'mahasiswa'>mawasiswa</option>
            <option value = 'sudah menikah'>sudah menikah</option>
            <option value = 'belum menikah'>belum menikah</option>
            </tr>
            <tr>
            <td>hobi </td>
            <td>: </td>
            <td>
           <input type ='checkbox' name = 'hobi'  value ='membaca'>membaca 
           <input type ='checkbox' name = 'hobi'  value ='menulis'>menulis
           <input type ='checkbox' name = 'hobi'  value ='mendengarkanmusik'>mendengarkan musik  
           <input type ='checkbox' name = 'hobi'  value ='melukis'>melukis
           <input type ='checkbox' name = 'hobi'  value ='menyanyi'>menyanyi 
            </tr>
            </td>
            <tr>
            <td>cita-cita </td>
            <td>: </td>
            <td><select name ='cita'>
            <option value = 'dokter'>dokter</option>
            <option value = 'polisi'>polisi</option>
            <option value = 'youtuber'>youtuber</option>
            <option value = 'guru'>guru</option>
            </tr>
            <tr>
            <td>kata-kata bijak </td>
            <td>: </td>
            <td><input type ='textarea' name = 'kata'> </td>
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
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $jenis = $_POST['jenis'];
    $alamat = $_POST['alamat'];
    $pendidikan = $_POST['pendidikan'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata = $_POST['kata'];




    echo "nama             = $nama <br>";
    echo "tempat lahir     = $tempat <br>";
    echo "tanggal lahir    = $tanggal<br>";
    echo "jenis kelamin    = $jenis <br>";
    echo "alamat           = $alamat <br>";
    echo "pendidikan       = $pendidikan <br>";
    echo "status           = $status <br>";
    echo "hobi             = $hobi <br>";
    echo "cita-cita        = $cita <br>";
    echo "kata-kata bijak  = $kata <br>";

}


?>