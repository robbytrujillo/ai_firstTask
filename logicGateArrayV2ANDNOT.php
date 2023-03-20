<?php
// deklarasi variabel
$x1 = array(1,1,0,0);
$x2 = array(1,0,1,0);
$w1 = 2;
$w2 = -1;
$y_in = 0;
$y = 0;

echo "x1 x2 y\n";
echo "-------\n";

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
    echo " ".str_pad($x1[$i],2)." ".str_pad($x2[$i],2)." ".str_pad($y,2)."\n";
}

echo "----------\n";
?>