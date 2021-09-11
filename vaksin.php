<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">



    <title>Hello, world!</title>
  </head>
  <body>
  <form action="" method="POST">
<!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Cindy nurul</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="penggajihan.php">Penggajihan <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item active">
        <a class="nav-link" href="pengulangan.php">Pengulangan <span class="sr-only">(current)</span></a>
        </li>
      <li class="nav-item active">
        <a class="nav-link" href="vaksin.php">vaksin <span class="sr-only">(current)</span></a>
      </li>
    
    </ul>
  </div>
</nav>


<!--form-->
<form>
    <div class = "container">
    <br>
    <h2><center>Vaksin</center></h2>
    <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama : </label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Umur :</label>
    <input type="text" name="umur" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Status</label>
    <select class="form-control" name="status" id="exampleFormControlSelect1">
      <option>---Pilih---</option>
      <option value="1">Sudah vaksin</option>
      <option value="2">Belum Vaksin</option>
    </select>
  </div>
  <button type="submit" name="simpan" class="btn btn-primary">KIRIM</button>
  </div>
</form>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php 
echo "<center>";
if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $umur = $_POST['umur'] ;
        $status = $_POST['status'] ;
        $sudah = "Sudah Vaksin";
        $belum = "Belum Vaksin";

        {
			echo "<br>";
            echo " Nama Anda  :  $nama <br>";
            echo " Umur : $umur <br>";
        }

        if ($umur < 12) {
            echo "<b>TIDAK BISA MASUK!<b>";
        }elseif ($umur > 50) {
            echo "<b><i>TIDAK BISA MASUK!</b></i>";
        }elseif ($status == "1") {
            echo "Status Vaksin : $sudah <br>" ;
            echo "<br>";
            echo "<b><center><i>DIIZINKAN<i><center> </b>";
        }else if ($status == "2") {
            echo "Status Vaksin : $belum <br>";
            echo "<br>";
            echo "<center><b><i>TIDAK DIIZINKAN!</center></b><br>";
            echo "Lakukan Vaksinasi Terlebih Dahulu</i>";
            echo "<br>";
            echo "<center><a href = https://pedulilindungi.id/>pedulilindungi.id</a><center>";
        }else {
            echo "Isi Data!";
        }
}
echo "</center>"
?>
</td>
</form>
</center>
</table>
</body>
</html>