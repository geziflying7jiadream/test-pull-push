<?php
function refreshMajiang(){
    $majiang = array();
    for($i = 1; $i <= 34 ; $i++){
        $count = 4;
        for($j = 0; $j < $count ; $j++){
            array_push($majiang,$i);
        }
    }
    for($i = 35;$i<=42;$i++){
        array_push($majiang,$i);
    }
    shuffle($majiang);
    return $majiang;
}

$mjList = refreshMajiang();
echo "<pre>";
print_r($mjList);
