<?php
// deklarasi variabel
$x = array(
    array(1, 1),
    array(1, 0),
    array(0, 1),
    array(0, 0)
);

// bobot (weight)
$w = array(1, -1);

$y_in;
$y;

echo " x1 x2  y\n";
echo "=========\n";

for ($b = 0; $b < 4; $b++) {
    $y_in = 0;
    for ($k = 0; $k < 2; $k++) {
        // hitung y_in
        $y_in = $y_in + ($x[$b][$k] * $w[$k]);
        // cetak x1 dan x2
        echo " " . $x[$b][$k];
    }

    // hitung y 
    // fungsi aktivasi
    if ($y_in >= 1) {
        $y = 0;
    } else {
        $y = 1;
    }

    // cetak y
    echo "  " . $y . "\n";
}

echo "=========\n";

?>
