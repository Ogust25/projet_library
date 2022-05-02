<?php
include "./count.php";

$array1 = ["green", "red", "blue"];
$array2 = ["green", "yellow", "red","black"];

function fn_array_diff($a1,$a2){
    $res = [];
    fn_count($a1);
    fn_count($a2);
    if ($a1 < $a2) {
        for ($i=0; $i < fn_count($a2); $i++) {
            for ($j=0; $j < fn_count($a1); $j++) { 
                if ($a1[$j] != $a2[$i]) {
                    $res .= $a1[$j];
                }
            }
        }
    }else{
        for ($i=0; $i < fn_count($a1); $i++) {
            for ($j=0; $j < fn_count($a2); $j++) { 
                if ($a1[$i] != $a2[$j]) {
                    $res .= $a1[$i];
                }
            } 
        }
    }
    return $res;
}
echo fn_array_diff($array1,$array2);

?>