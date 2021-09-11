<?php
    if(isset($_POST['simpan'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $indo = $_POST['indo'];
        $inggris = $_POST['inggris'];
        $mtk = $_POST['mtk'];
        $produktif = $_POST['produktif'];
        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa Indonesia</th>
                <th>Bahasa Inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>
                <th>Total Nilai</th>
                <th>Rata - rata</th>
                <th>Grade</th>
                <th>Status</th>
            </tr>
            <?php
                for($i=0; $i<count($nama); $i++){
                $total= $indo[$i] + $inggris[$i] + $mtk[$i] + $produktif[$i];
                $rata= $total / 4;
                if($rata >= 90 && $rata <= 100 ){
                    $grade = "Grade A";
                }
                else if ($rata >= 80 && $rata <= 89 ){
                    $grade = "Grade B";
               
                }
                else if ($rata >= 75 && $rata <= 79 ){
                   $grade = "Grade C";
               
               }
               else if ($rata >= 50 && $rata <= 74 ){
                   $grade = "Grade D";
               }
               else if ($rata <= 0 && $rata >= 49 ){
                   $grade = "Grade E";
               }
               else{
                   $grade = "Tidak ada grade";
                }
                    if ($rata >= 75 && $rata <= 100 ){
                        $status = "Lulus";
                    }
                    else{
                        $status ="Tidak Lulus";
                    }
                    
            ?>
            
        
        
            <tr>
                <td><?php echo $nis[$i]; ?></td>
                <td><?php echo $nama[$i]; ?></td>
                <td><?php echo $kelas[$i]; ?></td>
                <td><?php echo $indo[$i]; ?></td>
                <td><?php echo $inggris[$i]; ?></td>
                <td><?php echo $mtk[$i]; ?></td>
                <td><?php echo $produktif[$i]; ?></td>
                <td><?php echo $total ; ?></td>
                <td><?php echo $rata ; ?></td>
                <td><?php echo $grade ; ?></td>
                <td><?php echo $status ; }?></td>
                    
                 </tr>                     
            </tr>
        </table>
    </center>
    </body>
</html>