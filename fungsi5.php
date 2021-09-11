<?php
// membuat fungsi
function hitungUmur($thn_lahir,$thn_sekarang)
{
    $umur = $thn_sekarang - $thn_sekarang;
    return $umur;
}

function perkenalan ($nama, $salam = "Assalaammualaikum")
{
    echo $salam . ", ";
    echo "Perkenalkan , Nama saya " .$nama."<br/>";
    // memanggil fungsi lain
    echo "Saya Berusia". hitungUmur(2004,2021).
    "tahun <br/>";
    echo "Senang Berkenalan Dengan Anda</hr>";
}

//memanggil fungsi perkenalan
echo perkenalan("Cindy");

?>