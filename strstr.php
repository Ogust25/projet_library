<?php
include "./strlen.php";

function fn_strstr($str, $var, $test=false){
    $res = "";
    if ($test == true) {
        for ($i=0; $i < fn_strlen($str); $i++) { 
            if ($str[$i] == $var) {
                break;
            }else{
                $res .= $str[$i];
            }
        }
    }else {
        for ($i=0; $i < fn_strlen($str); $i++) { 
            if ($str[$i] == $var) {
                for ($j=$i; $j < fn_strlen($str); $j++) { 
                    $res .= $str[$j];
                }
            }
        }
    }
    return $res;
}

?>