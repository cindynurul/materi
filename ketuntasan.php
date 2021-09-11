<?php

$nilai = 1000;
if ($nilai >= 75 && $nilai <= 100) {
    echo "lulus";
    }
else if ($nilai < 75 && $nilai >= 0){
    echo "tidak lulus";
}else{
    echo "nilai tidak valid";
}
?>