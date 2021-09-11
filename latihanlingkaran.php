<html>
<head>
    <title>Menghitung Luas dan Keliling Lingkaran</title>
</head>
<body>
    <fieldset>
   <legend> Menghitung Luas dan Keliling Lingkaran </legend>
    <form action=" " method="post">
    <tr>
                <td>Masukan Jari - Jari Lingkaran</td>
                <td>:</td>
        <input type="number" name="jari">
    </tr>
        <input type="submit" name="submit">
    </form>

<?php

if (isset($_POST['submit'])) {
    function luas($jari, $phi=3.14){
        $jari **= 2;
        $luas = $jari * $phi;
        return $luas;
    }
    function keliling($jari, $phi=3.14) {
        $keliling = ($jari * $phi) * 2;
        return $keliling;
    }
    echo "Jari - Jari = " . $_POST['jari'];
    echo "<br>";
    echo "Luas Lingkaran = " . luas($_POST['jari']);
    echo "<br>";
    echo "Keliling Lingkaran = " . keliling($_POST['jari']) ;
}

?>
</fieldset>
</body>
</html>