<?php

$nilai = 40;
if ($nilai >= 90 && $nilai <= 100 ) {
    echo "grade A";
    }
else if ($nilai >= 80  && $nilai <= 89) {
    echo "Grade B";
}
else if ($nilai >= 70  && $nilai <= 79) {
    echo "Grade C";
}
else if ($nilai >= 60  && $nilai <= 69) {
    echo "Grade D";
}
else if ($nilai <= 50 && $nilai >= 0) {
    echo "Grade E";
}
else{
    echo "NILAI KACAU !!!! ";
}
?>