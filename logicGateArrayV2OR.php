<?php
// deklarasi variabel
$x1 = array(1, 1, 0, 0);
$x2 = array(1, 0, 1, 0);
$w1 = 2;
$w2 = 2;
$y_in = 0;
$y = 0;

echo " x1 x2 y\n";
echo "--------\n";

for ($i = 0; $i < 4; $i++) {
    // hitung y_in
    $y_in = $x1[$i] * $w1 + $x2[$i] * $w2;

    // hitung y, fungsi aktivasi
    if ($y_in >= 2) {
        $y = 1;
    } else {
        $y = 0;
    }

    // cetak
    printf(" %2d %2d %2d\n", $x1[$i], $x2[$i], $y);
}

echo "-----------\n";
?>