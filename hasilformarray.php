<?php
if(isset($_POST['simpan'])){
$nama= $_POST['nama'];
$kelas= $_POST['kelas'];
$jk= $_POST['jk'];
$jr =$_POST['jr'];

}
?>

<htm>
    <head>
        <title>dockumen</title>
</head>
<body>
    <center>
        <h2>DATA SISWA KELAS XII</h2>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>kelas</th>
                <th>jenis kelamin</th>
                <th>Jurusan</th>

            </tr>
<?php
for ($i=0; $i<count($nama); $i++){
    ?>
    <tr>
        <td><?php echo $nama[$i]; ?></td>
        <td><?php echo $kelas[$i]; ?></td>
        <td><?php echo $jk[$i]; ?></td>
        <td><?php echo $jr[$i];} ?></td>


</table>
</center>
</body>
    </html>