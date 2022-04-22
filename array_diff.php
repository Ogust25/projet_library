<?php
include "./count.php";

$array1 = ["green", "red", "blue"];
$array2 = ["green", "yellow", "red"];

function fn_array_diff($a1,$a2){
    $res = [];
    for ($i=0; $i < fn_count($a1); $i++) { 
        for ($j=0; $j < fn_count($a2); $j++) { 
            if ($a1[$i] != $a2[$j]) {
                $res .= $a1[$i];
            }
        }
    }
    return $res;
}
echo fn_array_diff($array1,$array2);

?>