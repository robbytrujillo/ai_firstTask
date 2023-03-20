<?php
// deklarasi variabel
$x = array(array(1,1),
           array(1,0),
           array(0,1),
           array(0,0));

// bobot (weight)
// sesuaikan kasus AND (w1 = 1, w2 = 1)
//                  OR (w1 = 2, w2 = 2)
//                  AND NOT (w1 = 2, w2 = -1)
$w = array(2, -1);

echo " x1 x2  y\n";
echo "=========\n";

for ($b = 0; $b < 4; $b++)
{
    $y_in = 0;
    for ($k = 0; $k < 2; $k++)
    {        
        // hitung y_in
        $y_in += $x[$b][$k] * $w[$k];
        
        // cetak x1 dan x2
        echo " " . $x[$b][$k];
    }
    
    // hitung y 
    // fungsi aktivasi
    if ($y_in < 2) $y = 1;
    else $y = 0;
        
    // cetak y
    echo " " . $y . "\n";
}

echo "=========\n"; 

?>