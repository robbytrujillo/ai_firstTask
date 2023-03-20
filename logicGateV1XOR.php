<?php
// deklarasi fungsi aktivasi sigmoid
function sigmoid($x) {
    return 1 / (1 + exp(-$x));
}

// input (2 neuron)
$x1 = 1;
$x2 = 1;

// bobot layer 1
$w11 = 1;
$w12 = 1;
$b1 = -1;

// hitung y_in layer 1
$y_in1 = $x1 * $w11 + $x2 * $w12 + $b1;

// hitung y layer 1
$y1 = sigmoid($y_in1);

// bobot layer 2
$w21 = 1;
$w22 = 1;
$b2 = -1;

// hitung y_in layer 2
$y_in2 = $y1 * $w21 + $y1 * $w22 + $b2;

// hitung y layer 2
$y = sigmoid($y_in2);

// cetak
echo "X1: $x1 X2: $x2 Y: $y";
?>