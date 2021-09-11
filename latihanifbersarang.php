<?php

echo "+++ Restoran colak colek +++<br>";
echo "============================<br>";

$makanan = "makanan";
$jm = 10;

if ($makanan == "makanan")
{
    if ($makanan == "nasi goreng"  )
    {
        $harga = 15000;
        $jumlah = $jm * $harga;
        $bayar =$jumlah -($jumlah * (20/100));
        echo "Makanan : Nasi goreng <br>";
        echo "Harga : Rp. $harga<br>";
        echo "pesan : $jm <br>";
        echo "total : $jumlah <br>";
        if ($jumlah >= 15000 ) {
            