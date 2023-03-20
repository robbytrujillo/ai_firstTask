<?php
// deklarasi variabel
$x = array(
    array(1, 1),
    array(1, 0),
    array(0, 1),
    array(0, 0)
);

// bobot (weight), sesuaikan kasus AND (w1 = 1, w2 = 1), sesuaikan kasus OR (w1 = 1, w2 = 2), dan sesuaikan kasus AND NOT (w1 = 2, w2 = -1)
$w = array(2, -1);
$y_in;
$y;

echo " x1 x2 y\n";
echo "========\n";

foreach ($x as $row) {
    $y_in = 0;
    foreach ($row as $k => $val) {
        // hitung y_in
        $y_in += $val * $w[$k];
        // cetak x1 dan x2
        printf(" %2i", $val);
    }
    // hitung y, fungsi aktivasi
    if ($y_in >= 2) {
        $y = 1;
    } else {
        $y = 0;
    }
    // cetak y
    printf(" %2i\n", $y);
}

echo "==========\n";
?>