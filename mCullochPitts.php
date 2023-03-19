<?php
    // deklarasi variabel dan input (2 neuron)
    $x1 = 1;
    $x2 = 1;

    // bobot (weight) 
    // sesuaikan kasus AND ($w1=1, $w2=2)
    // sesuaikan kasus OR ($w1=1, $w2=2)
    // sesuaikan kasus AND NOT ($w1=1, $w2=2)
    $w1 = 1;
    $w2 = 1;

    // hitung $y_in
    $y_in = $x1 * $w1 + $x2 * $w2;

    // hitung y fungsi aktivasi
    if ($y_in >= 2) {
        $y = 1;
    } else {
        $y = 0;
    }

    // cetak
    echo "X1: $x1 X2: $x1 Y: $y"; 

?>