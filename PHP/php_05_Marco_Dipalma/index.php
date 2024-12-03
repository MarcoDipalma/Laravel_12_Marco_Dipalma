<?php

// $

$accumulator = 0;
$counter = 0;

$arr = [3, 6, 23, 9, 45, 67, 23, 64, 0, 42, 18, 80];

$num_array = count($arr);


for ($i=0; $i < $num_array ; $i++) {
    if ($arr[$i]%2 == 0) {
        $accumulator = $accumulator + $arr[$i];
        $counter = $counter + 1;
    }
}

$media = $accumulator / $counter;

echo $media;



?>