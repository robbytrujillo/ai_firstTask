<?php
// deklarasi variabel
$x1 = 1;
$x2 = 1;
$w1 = 2; // bobot weight
$x1 = 2;
$y_in = $x1 * $w1 + $x2 * $w2;
$y = 0; // inisialisasi nilai y

// fungsi aktivasi
if ($y_in >= 1) {
    $y = 1;
}

// cetak hasil
echo "X1: $x1, X2: $x2, Y: $y";

?>