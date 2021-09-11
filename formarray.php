<html>
    <head>
    <title>form array</title>
</head>
<body><center>
 
<form action ="" method="post">
    <h2>DATA SISWA KELAS XII</h2>
    <table>
        <tr>
            <td>Jumlah Siswa</td>
            <td>:</td>
            <td><input type ="number" name = "jumlah"> </td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name = "proses" value ="Proses"></td>
</tr>
</table>
<br>
</form>

<?php 
if(isset($_POST['proses'])){
    $jumlah = $_POST['jumlah'];
    ?>
    <form action ="hasilformarray.php" method ="post">
        <table>
            <?php
            for ($i=1; $i<= $jumlah;$i++){
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Data Siswa Ke- <?php echo $i; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type = "text" name = "nama[]"> </td>
            </tr>
            <tr>
            <td>kelas</td>
                <td>:</td>
                <td><input type = "text" name = "kelas[]"> </td>
            </tr>
            <tr>
            <td>Jenis Kelamin</td>
                <td>:</td>
                <td><input type = "text" name = "jk[]"> </td>
            </tr>
            <tr>
            <td>Jurusan</td>
                <td>:</td>
                <td><input type = "text" name = "jr[]"> </td>
            </tr>
            
           
            <?php
            }
            ?>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"/></td>
        </tr>
        </table>
        </form>
        <?php
            }
            ?>

</body></center>
    </html>