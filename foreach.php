<?php
$nama = array("Andri","Joko","Sukma","Rina","Sari");

foreach ($nama as $val)
{
   echo "$val";
   echo "<br />";
   //foreach ($nama_array as $value)
   //{
      //statement(value)
      // }
      //foreach= merupakan pengulangan khusus untuk pembacaan nilai array
  
}
?>

<br>
<br>
<?php
//key
$nama = array(
        1=>"Andri",
        6=>"Joko",
        12=>"Sukma",
        45=>"Rina",
        55=>"Sari");

foreach ($nama as $kunci =>$isi)
{
   echo "Urutan ke-$kunci adalah $isi";
   echo "<br />";
}
?>