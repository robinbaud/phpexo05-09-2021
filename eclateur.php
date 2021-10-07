<?php

function eclateur($mot){
    $list = [];
    for($i = 0; $i < strlen($mot); $i++){
        $num =1;
        for($j = $i+1; $j < strlen($mot); $j++){
            if($mot[$i] == $mot[$j]){
                $num++;
                array_push($list, $mot[$j]);
                break;
            }
        }
        array_push($list, $mot[$i]);
        echo $mot[$i]." => ".$num.PHP_EOL;
    }
    sort($list);
    $mot = implode(",", $list);
    echo $mot;
}

eclateur($argv[1]);