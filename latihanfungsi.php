<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>Nilai Ujian 12 RPL<br></h2>
    
    <table border="1">
    <tr>
        <th>Nama</th>
        <th>Matematika</th>
        <th>Bahasa Inggris</th>
        <th>Bahasa Indonesia</th>        
        <th>kejuruan</th>
        <th>Rata-Rata</th>
        <th>Status</th>
        <th>Grade</th>
    </tr>
    <?php
        function penjumlahan($nama ,$mtk,$bin,$bi,$kej){
            echo"<tr>";
            echo"<th>$nama";
            echo"</th>";
            echo"<th>$mtk";
            echo"</th>";
            echo"<th>$bin";
            echo"</th>";
            echo"<th>$bi";
            echo"</th>";
            echo"<th>$kej";
            echo"</th>";
            $rata=($mtk+$bin+$bi+$kej)/4;
            echo"<th>$rata";
            echo"</th>";
            
            if ($rata >= 75 ) {
                echo "<td>Lulus</td>";
            }else {
                echo "<td>Tidak Lulus</td>";
    
            }
        echo "<center><b>";
        if ($rata >= 90 && $rata <= 100) {
            echo "<td>A</td>";
        }else if ($rata >= 80 && $rata <= 89) {
            echo "<td>B</td>";
        }else if ($rata >= 70 && $rata <= 79) {
            echo "<td>C</td>";
        }else if ($rata >= 50 && $rata <= 74) {
            echo "<td>D</td>";
        }else if ($rata >= 0 && $rata <= 49) {
            echo "<td>E</td>";
        }
        echo "</b></center>";
    }
    penjumlahan("Cindy Nurul A",55,45,0,10);
    penjumlahan("Cindy Nurul A",55,45,0,10);
    ?>

</table>
</center>
</body>
</html>