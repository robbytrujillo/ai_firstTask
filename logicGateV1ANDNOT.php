<?php 
// deklarasi variabel
$x1 = 1;
$x2 = 0;
$w1 = 2;
$w2 = -1;

// hitung y_in
$y_in = $x1 * $x2 + $x2 * $w2;

// hitung y, fungsi aktivasi
if ($y_in >= 2) {
    $y-1;
} else {
    $y = 0;
}

// cetak
echo  "X!:" . $x1 , "x2" . $x2 . "Y:" .$y;

?>