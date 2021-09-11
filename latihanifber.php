<?php

echo "+++ Restoran colak colek +++<br>";
echo "============================<br>";

$food ="";
$makanan="";
$drink ="minuman";
$minuman="Air mineral";
$jm=90;

if($food == "makanan"){
    if ($makanan =="Mie goreng"){
        $harga = 10000;
        $jumlah =$jm * $harga;
        $bayar =$jumlah -($jumlah *(20/100));
        echo "Makanan : Mie goreng <br>";
        echo "Harga : Rp. $harga<br>";
        echo "pesan :$jm <br>";
        echo "total :$jumlah <br>";
        if ($jumlah >= 50000 ){
            echo "<br>";
            echo "Pesanan lebih dari Rp.50000!";
            echo "Mendapatkan diskon 20%<br>";
            echo "Total : Rp. $bayar";
            
        }
    }

    elseif ($makanan =="Nasi goreng"){
        $harga = 15000;
        $jumlah =$jm * $harga;
        $bayar =$jumlah -($jumlah *(20/100));
        echo "Makanan : Nasi goreng <br>";
        echo "Harga : Rp. $harga<br>";
        echo "pesan :$jm <br>";
        echo "total :$jumlah <br>";
        if ($jumlah >= 50000 ){
            echo "<br>";
            echo "Pesanan lebih dari Rp.50000!";
            echo "Mendapatkan diskon 20%<br>";
            echo "Total : Rp. $bayar";
            
        }
    }
    elseif ($makanan =="Ayam goreng"){
        $harga = 20000;
        $jumlah =$jm * $harga;
        $bayar =$jumlah -($jumlah *(20/100));
        echo "Makanan : Ayam goreng <br>";
        echo "Harga : Rp. $harga<br>";
        echo "pesan :$jm <br>";
        echo "total :$jumlah <br>";
        if ($jumlah >= 50000 ){
            echo "<br>";
            echo "Pesanan lebih dari Rp.50000!";
            echo "Mendapatkan diskon 20%<br>";
            echo "Total : Rp. $bayar";
            
        }
    }
    else{
        echo "tidak ada makanan";
    }
}
    
    if ($drink == "minuman"){
        if ($minuman =="Air mineral"){
            $harga = 8000;
            $jumlah =$jm * $harga;
            $bayar =$jumlah -($jumlah *(20/100));
            echo "Minuman : air mineral <br>";
            echo "Harga : Rp. $harga<br>";
            echo "pesan :$jm <br>";
            echo "total :$jumlah <br>";
            if ($jumlah >= 50000 ){
                echo "<br>";
                echo "Pesanan lebih dari Rp.50000!";
                echo "Mendapatkan diskon 20%<br>";
                echo "Total : Rp. $bayar";
                
            }
        }
    
        elseif ($drink =="Jus"){
            $harga = 10000;
            $jumlah =$jm * $harga;
            $bayar =$jumlah -($jumlah *(20/100));
            echo "Minuman : jus <br>";
            echo "Harga : Rp. $harga<br>";
            echo "pesan :$jm <br>";
            echo "total :$jumlah <br>";
            if ($jumlah >= 50000 ){
                echo "<br>";
                echo "Pesanan lebih dari Rp.50000!";
                echo "Mendapatkan diskon 20%<br>";
                echo "Total : Rp. $bayar";
                
            }
        }
        elseif ($minuman =="Kopi"){
            $harga = 12000;
            $jumlah =$jm * $harga;
            $bayar =$jumlah -($jumlah *(20/100));
            echo "Minuman : kopi <br>";
            echo "Harga : Rp. $harga<br>";
            echo "pesan :$jm <br>";
            echo "total :$jumlah <br>";
            if ($jumlah >= 50000 ){
                echo "<br>";
                echo "Pesanan lebih dari Rp.50000!";
                echo "Mendapatkan diskon 20%<br>";
                echo "Total : Rp. $bayar";
                
            }
        }
        else{
            echo "tidak ada minuman";
        }
    }

?>