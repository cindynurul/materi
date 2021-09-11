<?php
// membuat fungsi
function tentang_saya($thn_lahir, $thn_sekarang)
{
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;

}

function perkenalan($nama, $salam = "Hi")
{
    echo $salam . ", ";
    echo "Nama Saya " . $nama ." ";
    // memanggil fungsi lain

    echo "dan umur saya " . tentang_saya(2004, 2021) . " tahun<br/>";
}

// memanggil fungsi perkenalan 
echo perkenalan("Cindy Nurul A");
?>