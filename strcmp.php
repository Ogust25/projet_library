<?php
include "./strlen.php";

function fn_strcmp($str1,$str2){
    $res = "";
    for ($i=0; $i < fn_strlen($str1); $i++) { 
        for ($j=0; $j < fn_strlen($str2); $j++) { 
            if ($str1 == $str2) {
                $res = 0;
            }else if ($str1 > $str2) {
                $res = 1;
            }else if ($str1 < $str2) {
                $res = -1;
            }
        }
    }
    return $res;
}

?>